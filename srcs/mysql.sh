#!/bin/bash
chown -R mysql /var/lib/mysql
service mysql start
mysql --user=root -e "CREATE DATABASE wpdata;"
 mysql --user=root -e "CREATE USER 'admin'@'localhost' IDENTIFIED BY '0000';"
  mysql --user=root -e "GRANT ALL ON wpdata.* TO 'admin'@'localhost';"
mysql --user=root -e "FLUSH PRIVILEGES;"
