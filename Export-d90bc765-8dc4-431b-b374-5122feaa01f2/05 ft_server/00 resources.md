# 00.resources

Teoria y explicaciones:

[How to Install LEMP Stack on Debian 10 Buster Server/Desktop](https://www.linuxbabe.com/debian/install-lemp-stack-debian-10-buster)

[How To Install phpMyAdmin with Nginx on Debian 10](https://www.itzgeek.com/how-tos/linux/debian/how-to-install-phpmyadmin-with-nginx-on-debian-10.html)

[| Docker Documentation](https://docs.docker.com/engine/reference/builder/)

[Install WordPress 5 with Nginx on Debian 10 Buster - kifarunix.com](https://kifarunix.com/install-wordpress-5-with-nginx-on-debian-10-buster/)

[How To Create a Self-Signed SSL Cert for Nginx on Debian 10 | DigitalOcean](https://www.digitalocean.com/community/tutorials/how-to-create-a-self-signed-ssl-certificate-for-nginx-on-debian-10)

Herramienta para analizar una imagen y ver el contenido de cada capa.

[wagoodman/dive](https://github.com/wagoodman/dive)

Q&A's

---

**PREGUNTA**:

*Hi, how do people here interpret* `You will also need to make sure your server is running with an index that must beable to be disabled.` *in ft_server? Kinda confused what they mean here*

**RESPUESTA**:

Nginx has the abily to show you an index page of the files existing in the root folder, which can be turned on or off in the nginx config: 

[Module ngx_http_autoindex_module](http://nginx.org/en/docs/http/ngx_http_autoindex_module.html)

---

**PREGUNTA:**

Hi everyone,In ft_server, how can we configure Nginx to access our website through [https://localhost](https://localhost/) instead of [https://localhost/wordpress](https://localhost/wordpress) ?I tried to change the location root folder to wordpress/ but it breaks my phpmyadmin access... so I don't think this is the best method.

---

**RESPUESTA**:

Putting your phpmyadmin folder in your wordpress folder (root of your server) should let you access wordpress through [https://localhost](https://localhost/) and phpmyadmin with [https://localhost/phpmyadmin](https://localhost/phpmyadmin)

**PREGUNTA:**

On ft_server, does anybody know how to properly open ports? Using`EXPOSE 80 443` through the Dockerfile doesn't seem to work.

---

**RESPUESTA:**

use     `-p [HOST_PORT]:[CONTAINER_PORT]`

ie:       `docker run -p 80:80 -p 443:443`

githubs de referencia:

[matteoolefloch/ft_server](https://github.com/matteoolefloch/ft_server)