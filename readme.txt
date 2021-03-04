Lenguge de Programación WEB -  ISIV 2021

Objetivo
Realizar las actividades determinadas en el documento "Trabajo Final-LPW.pdf"

Aclaración
El contenido de la carpeta "www" puede ser utilizado en un servidor con Apache2 y PHP instalado.
En caso de no disponer de un servidor con PHP, puede iniciar una instancia docker desde el Dockerfile proporcionado.

Contenido
Las carpetas TP1, TP2 & TP3 corresponden a las actividades Trabajo Práctico 1, Trabajo Práctico 2 y Trabajo Práctico correspondientemente. 

Dockerfile
Para correr el archivo Dockerfile, debe tener instalado docker.
[WINDOWS]
https://docs.docker.com/docker-for-windows/install/

[LINUX]
https://docs.docker.com/engine/install/#server 

Construir la imagen
	$docker build -t lpw-final .

crear una instancia, publicando en el puerto 80
	$docker run -p 80:80 [IMAGE ID]
	
Puede cambiar el puerto por cualquier otro disponible.
	$docker run -p 8085:80 [IMAGE ID]
	
Ejemplo:
	$docker run -p 8085:80 3263a1e583c0
	
Puede ver el estado del contenedor activo utilizando la sentencia:
	$docker ps -a
	
CONTAINER ID        IMAGE               COMMAND                  CREATED              STATUS                      PORTS                          NAMES
28a2fe8d4ab3        3263a1e583c0        "docker-php-entrypoi…"   About a minute ago   Up About a minute           80/tcp, 0.0.0.0:80->8085/tcp   vigorous_hoover



