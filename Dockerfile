FROM debian:buster

RUN apt update && \
	apt install -y nginx vim

COPY /srcs/default /etc/nginx/sites-available/
COPY /srcs/wordpress /var/www/html/wordpress/

CMD service nginx start && \
	bash
