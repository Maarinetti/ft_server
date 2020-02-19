# 02.wordpress & php

Hay que bajarse todos los archivos de wordpress & php y cambiar los archivos de configuracion. (`wordpress/wp.admin && phpmyadmin/config.inc.php` )

Dentro del contenedor los metemos en:

`/var/www/html/wordpress/`

`/var/www/html/phpMyAdmin/`

Inicializamos la base de datos de wordpress con el archivo init.sql:

    /* create database with the name wordpress */
    CREATE DATABASE wordpress;
    /*grant user 'root' access to the database */
    GRANT ALL PRIVILEGES ON wordpress.* TO 'root'@'localhost';
    /*save changes */
    FLUSH PRIVILEGES;
    /* asign user */
    update mysql.user set plugin = 'mysql_native_password' where user='root';