# 01.Docker basics

Para **instalar** Docker en el goinfree de la escuela:

    cd 42toolbox-master
    sh init_docker.sh

**Dockerfile**:

    #para decirle que imagen queremos bajar : y la version
    FROM debian:buster 
    
    #actualizar sistema e instalar servicios
    RUN apt update &&
    		apt install -y vim nginx mariadb...
    
    #copiar archivos desde mi local al contenedor:
    COPY /srcs/default /etc/nginx/sites-available/
    COPY /srcs/wordpress /var/www/wordpress/
    ...
    
    #para ejecutar comandos dentro del contenerdor:
    CMD service nginx start && \
    		bash

Para **compilar el contenedor** docker usando nuestro Dockerfile:

`docker build -t nombredelaimagen .`

**el punto es el path al dockerfile.

`docker images` te dice las imagenes que hay creadas.

`docker ps` las que se han corrido

`docker system prune -a` para borrar todo los que no se usa (imagenes, contenedores etc).

Para **inicializar** el contenedor:

`docker run -it -p 80:80 -p 443:443 nombredelaimagen`

Para salir del contenedor:

`exit`