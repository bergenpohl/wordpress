#!/bin/bash

sudo adduser --no-create-home --gecos "" ftp_user

openssl req -newkey rsa:4096 \
		-x509 \
		-sha256 \
		-days 365 \
		-nodes \
		-out /etc/ssl/certs/localhost.crt \
		-keyout /etc/ssl/private/localhost.key

rm -rf /etc/nginx/sites-enabled/*
cp /root/srcs/localhost.conf /etc/nginx/sites-enabled/

mkdir /var/www/localhost/

wget -O /root/srcs/latest.tar.gz https://wordpress.org/latest.tar.gz
tar -xf /root/srcs/latest.tar.gz -C /root/srcs/
cp -r /root/srcs/wordpress/* /var/www/localhost/
cp /root/srcs/wp-config.php /var/www/localhost/wp-config.php

chown www-data:www-data /var/www
chown www-data:www-data -R /var/www/*

find /var/www/* -type d -exec chmod 755 {} \;
find /var/www/* -type f -exec chmod 644 {} \;

/etc/init.d/mariadb start
/etc/init.d/mariadb status

echo "CREATE DATABASE wpdb;" | mysql -u root
echo "CREATE USER 'wp_user'@'localhost' IDENTIFIED BY 'password';" | mysql -u root
echo "GRANT ALL PRIVILEGES ON wpdb.* TO 'wp_user'@'localhost';" | mysql -u root
echo "FLUSH PRIVILEGES;" | mysql -u root

/etc/init.d/php7.4-fpm start
/etc/init.d/php7.4-fpm status

cp /root/srcs/vsftpd.conf /etc/vsftpd.conf
cp /root/srcs/vsftpd.user_list /etc/vsftpd.user_list

/etc/init.d/vsftpd start
/etc/init.d/vsftpd status

/etc/init.d/nginx start
/etc/init.d/nginx reload
/etc/init.d/nginx status

/bin/bash
