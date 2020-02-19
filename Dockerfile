#start debian image, version buster.
FROM debian:buster

#check updates and install the required packages
RUN apt update && \
	apt -y upgrade && \
	apt install -y vim nginx \
		php-json php-mbstring php-fpm php-mysql \
		mariadb-server mariadb-client \
		openssl

#copy the files needed to run the services to the container
COPY /srcs/default /etc/nginx/sites-available/
COPY /srcs/wordpress /var/www/html/wordpress/
COPY /srcs/phpMyAdmin /var/www/html/phpmyadmin/
COPY /srcs/init.sql /tmp/
COPY /srcs/wordpress.sql /tmp/
COPY /srcs/self-signed.conf /etc/nginx/snippets/
COPY /srcs/ssl-params.conf /etc/nginx/snippets/

#grant permissions and change ownership
RUN	chown -R root /var/www/* && \
	chown -R www-data:www-data /var/www/* && \
	chmod -R 775 /var/www/ && \
	chmod -R 777 /etc/ssl/ && \
	chmod -R 777 /etc/nginx/

#start db
RUN service mysql start && \
	mysql -u root --password= < /tmp/init.sql && \
	mysql wordpress -u root --password= < /tmp/wordpress.sql

#create ssl certis
RUN	openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
		-subj "/C=SP/ST=Spain/L=Madrid/O=42Madrid/CN=localhost" \
		-keyout /etc/ssl/private/default.key \
		-out /etc/ssl/certs/default.crt && \
	openssl dhparam -out /etc/nginx/dhparam.pem 512

#start the services
CMD service nginx start && \
	service php7.3-fpm start && \
	service mysql start && \
	bash
