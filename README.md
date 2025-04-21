# CatForm
A simple docker compose app, form in html/css using mariadb for persistence and phpmyadmin for database management.

## ANTES DE USAR:

Se recomienda que utilice un equipo con una instalación de linux que sea compatible con docker y docker compose.

## PASOS DE INSTALACIÓN:
1.
2.
3.
4. Revise que docker y docker compose se encuentren instalados en su equipo mediante los comandos "docker version" y "docker compose version".
5. Verifique que su usuario tenga acceso al daemon de docker usando el comando "groups", debería aparecer "docker". Si no es así, por favor use el comando "sudo usermod -a -G docker (SU NOMBRE DE USUARIO)"
6. Desactive los servicios php, mysql y phpmyadmin si se encuentran activados en su máquina mediante el comando "systemctl stop (NOMBRE DEL SERVICIO)", para liberar los puertos necesarios a la interacción con la aplicación.
7. Verifique se encuentre en el directorio raiz de la aplicación con "pwd", y despliegue la aplicación con el comando "docker compose up --build".
