<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Api Rest con Laravel 8
## Tecnologías usadas
Este fue desarrollado con Laravel 8.36 y Postman
## Descripción del proyecto
Este proyecto es un api rest sencillo sobre directorios con los siguientes campos
 - nombre
 - dirección
 - teléfono
 - foto

Además de esto cuenta con 2 ramas uno con validación con un token generado aleatoriamente y otro con autenticación por personal acces token, la primera con la finalidad de solo conectar 1 usuario con las mismas credenciales 1 vez y el segundo para conectar varios.
### Pasos para correr el api rest:
configurar el .env para poner a que base de datos se conectara a si como user y password
 - `create database`
Ingresamos al directorio del proyecto:
 - `php artisan migrate -seed`
 - `php artisan serve`
## En Postman podemos interactuar con el api
![Captura de pantalla de 2021-04-11 17-41-31](https://user-images.githubusercontent.com/22924166/114323968-5772cc80-9aed-11eb-85e9-52134802c593.png)
![Captura de pantalla de 2021-04-11 17-41-33](https://user-images.githubusercontent.com/22924166/114323970-58a3f980-9aed-11eb-8054-401b05217365.png)
![Captura de pantalla de 2021-04-11 17-41-34](https://user-images.githubusercontent.com/22924166/114323972-59d52680-9aed-11eb-8722-314f839d6c04.png)
![Captura de pantalla de 2021-04-11 17-41-34-1](https://user-images.githubusercontent.com/22924166/114323974-5a6dbd00-9aed-11eb-803e-841a6a24fe18.png)
![Captura de pantalla de 2021-04-11 17-41-35](https://user-images.githubusercontent.com/22924166/114323975-5b065380-9aed-11eb-8729-ef4d0cca65bf.png)
![Captura de pantalla de 2021-04-11 17-41-37](https://user-images.githubusercontent.com/22924166/114323977-5c378080-9aed-11eb-966b-40787909bc29.png)
![Captura de pantalla de 2021-04-11 17-41-40](https://user-images.githubusercontent.com/22924166/114323979-5d68ad80-9aed-11eb-8c2d-787b5f60f580.png)
## Autor
* Rocha Vicente Jesus Antonio
### Contacto
jesus_reddead@comunidad.unam.mx
