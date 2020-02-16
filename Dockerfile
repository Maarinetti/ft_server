#start debian image, version buster.
FROM debian:buster

#check updates and install the required packages
RUN apt update && \
	apt install -y vim nginx php-json php-mbstring php-fpm php-mysql mariadb-server mariadb-client

#copy the files needed to run the services to the container
COPY /srcs/default /etc/nginx/sites-available/
COPY /srcs/wordpress /var/www/html/wordpress/
COPY /srcs/phpMyAdmin /var/www/html/phpMyAdmin/
COPY /srcs/init.sql /tmp/
COPY /srcs/wordpress.sql /tmp/

RUN service mysql start && \
	mysql -u root --password= < /tmp/init.sql && \
	mysql wordpress -u root --password= < /tmp/wordpress.sql


#run these commands to start the services
CMD service nginx start && \
	service php7.3-fpm start && \
	service mysql start && \
	bash
