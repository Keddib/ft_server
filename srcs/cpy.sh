#!/bin/bash
rm /etc/nginx/sites-available/default
mv /default /etc/nginx/sites-available/
cp -avr /wordpress /var/www/html
chown -R www-data:www-data /var/www/html
chown -R mysql:mysql /var/lib/mysql
cp -avr /phpmyadmin /usr/share
ln -s /usr/share/phpmyadmin /var/www/html/phpmyadmin
mkdir /etc/nginx/ssl
chmod 700 /etc/nginx/ssl
mv /keddib.* /etc/nginx/ssl
