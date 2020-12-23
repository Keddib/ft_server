#!/bin/bash
service nginx reload
service nginx start
chown -R mysql /var/lib/mysql
service mysql start
service php7.3-fpm start
