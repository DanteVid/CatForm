# CatForm
A simple docker compose app, form in html/css using mariadb for persistence and phpmyadmin for database management.

## ANTES DE USAR:

Se recomienda que utilice un equipo con una instalación de linux que sea compatible con docker y docker compose.

## PASOS DE INSTALACIÓN:
1. Verifique su equipo tenga git instalado con **"git version".**
2. Ubiquese en la carpeta donde desea clonar la aplicación, y ejecute el comando **"git clone https://github.com/DanteVid/CatForm.git".**
3. Una vez clonado, ingrese al directorio raíz de la aplicación con **"cd CatForm".**
5. Revise que docker y docker compose se encuentren instalados en su equipo mediante los comandos **"docker version"** y **"docker compose version".**
6. Verifique que su usuario tenga acceso al daemon de docker usando el comando **"groups"**, debería aparecer "docker" entre los resultados. Si no es así, por favor use el comando **"sudo usermod -a -G docker (SU NOMBRE DE USUARIO)"**.
7. Desactive el servicio mysql si se encuentra activado en su máquina mediante el comando **"systemctl stop mysql"**, para liberar el puerto necesario para que la aplicación funcione correctamente.
8. Verifique que no se encuentren activados otros contenedores que usen los puertos 8080, 8081 o 3306.
9. Verifique se encuentre en el directorio raiz de la aplicación con **"pwd".**
10. Despliegue la aplicación con el comando **"docker compose up --build"**.

## USO:
1. Para verificar si la aplicación se desplegó correctamente, conectese a **"localhost:8080"** en su navegador web. Debería recibirlo la siguiente página en html:

![catForm1](https://github.com/user-attachments/assets/6d83a4ec-60ca-46f6-a2ab-d314436aaf74)

2. Conectese a **"localhost:8081"** en el navegador, debería recibirlo una interfaz de phpmyadmin con una base de datos **"CatApp"** creada, la cual contiene una base de datos llamada **"results"**. Aquí se guardarán los resultados del formulario.

![image](https://github.com/user-attachments/assets/27951b97-99de-4086-81b1-6a173c1e83cb)

3. Finalmente, llene los campos del formulario y haga click en **"Submit"**. Se muestra una pantalla de agradecimiento.

![image](https://github.com/user-attachments/assets/a855cc58-ad4c-4f37-a339-8b3a4a0de6c8)

4. Finalmente, revise en la pestaña de phpmyadmin que los resultados se hayan guardado exitosamente.

![image](https://github.com/user-attachments/assets/35141ab3-8e3d-4bd4-99fd-e135feb5fa22)
