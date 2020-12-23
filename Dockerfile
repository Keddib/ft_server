# getting base image debian/buster
FROM debian:buster
#RUN chmod o+r /etc/resolv.conf
#I've set the following environment so that no question/dialog is asked during apt-get install.
ARG DEBIAN_FRONTEND=noninteractive

# installing nginx
RUN apt-get update && \
	apt-get -qq install nginx

#adding the Mysql repo,
#before that we need to install GNUPG (Gnupg is requoired)
RUN apt-get update && \
	apt-get -qq install gnupg && \
	apt-get install -qq lsb-release

#After confirming the installation, apt will install gnupg and its dependencies.
RUN apt-get install -qq wget && \ 
	wget https://dev.mysql.com/get/mysql-apt-config_0.8.13-1_all.deb

#dpkg is used to install, remove, and inspect .deb software packages. The -i flag indicates that we’d like to install from the specified file.
#before that I will set mysql-5.7 as a value in debconf to be a default value.
RUN echo "mysql-apt-config mysql-apt-config/select-server select mysql-5.7" | debconf-set-selections -v
RUN dpkg -i mysql-apt-config_0.8.13-1_all.deb && \ 
	apt-get update

# Installing MySQL and enabling it.
RUN apt-get -qq install mysql-server

#install PHP for processing
#we will need to install php-fpm. will tell Nginx to pass PHP requests to this software for processing 
#php-mysql will allow PHP to communicate with our MySQL database backend.
RUN apt-get update && \
	apt-get install -qq php php-fpm php-mysql && \
	apt-get install -qq php-curl php-gd php-intl php-mbstring php-soap php-xml php-xmlrpc php-zip
COPY srcs  /
RUN bash /mysql.sh && bash /cpy.sh
EXPOSE 80 443
ENTRYPOINT bash /services.sh  && bash
