# Viex-extension

Proyecto elaborado en PHP

# Pre Requeisitos

## Instalar Visual Studio Code
[Visual Studio Code](https://code.visualstudio.com/)

Además, instalar desde el marketplace de VSCode las siguientes extensiones:

 1. Prettier
 2. PHP 
 3. PHP Extension Pack

## Instalar Docker y Docker Compose

[Docker](https://www.docker.com/)
[Docker Compose](https://docs.docker.com/compose/install/)

	Paso muy importante para ejecutar los proyectos localmente de una manera mas sencilla

## Instalar Git y Clonar el Repositorio
[Git](https://git-scm.com/)
		
Una vez instalado git, acceder a la carpeta donde va a guardar el proyecto localmente
Abrir la terminal y ejecutar el comando: 

    git clone https://github.com/JonathanGantes/viex-extension.git

Una vez clonado abrir el proyecto con Visual Studio Code
# Ejecución del proyecto

Una vez clonado y abierto el proyecto en Visual StudioCode podemos ejecutarlo usando Docker con el siguiente comando:

**(LEVANTAR EL PROYECTO EN DOCKER):**

	docker compose -f "docker-compose-php.yml" up -d --build 


Una vez hayamos terminado de visualizar  o desarrollar podemos ejecutar el siguiente comando para cerrar el proyecto:

**(APAGAR EL PROYECTO EN DOCKER):**

	docker compose -f "docker-compose-php.yml" down

Si estamos desarrollando o realizando cambios en el proyecto debemos reiniciar su ejecución para que se hagan visibles con los siguientes comandos;
**(REINICIAR PARA VER LOS CAMBIOS)
SE USA EL COMANDO DE APAGAR Y LUEGO EL DE LEVANTAR**

	docker compose -f "docker-compose-php.yml" down 
	docker compose -f "docker-compose-php.yml" up -d --build 


