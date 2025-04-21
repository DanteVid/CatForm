# CatForm
A simple docker compose app, form in html/css using mariadb for persistence and phpmyadmin for database management.

## ANTES DE USAR:

Se recomienda que utilice un equipo con una instalación de linux que sea compatible con docker y docker compose.

## PASOS DE INSTALACIÓN:
1. Verifique su equipo tenga git instalado con "git version".
2. Ubiquese en la carpeta donde desea clonar la aplicación, y ejecute el comando "git clone https://github.com/DanteVid/CatForm.git".
3. Una vez clonado, ingrese al directorio raíz de la aplicación con "cd CatForm".
5. Revise que docker y docker compose se encuentren instalados en su equipo mediante los comandos "docker version" y "docker compose version".
6. Verifique que su usuario tenga acceso al daemon de docker usando el comando "groups", debería aparecer "docker". Si no es así, por favor use el comando "sudo usermod -a -G docker (SU NOMBRE DE USUARIO)".
7. Desactive los servicios php, mysql y phpmyadmin si se encuentran activados en su máquina mediante el comando "systemctl stop (NOMBRE DEL SERVICIO)", para liberar los puertos necesarios a la interacción con la aplicación.
8. Verifique se encuentre en el directorio raiz de la aplicación con "pwd".
9. Despliegue la aplicación con el comando "docker compose up --build".
