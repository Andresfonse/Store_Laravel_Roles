# Proyecto Laravel 10 con CRUD y Roles - Descripción del Proyecto

Este proyecto Laravel 10 implementa un sistema CRUD con roles de administrador y usuario. El administrador tiene todas las funcionalidades CRUD, mientras que el usuario "marcos" solo puede observar la aplicación. 

## Definición

El objetivo principal de este proyecto es proporcionar un sistema de gestión de contenido con roles definidos, incluyendo:

- **Funcionalidades CRUD para el rol de administrador.**
- **Acceso solo de lectura para el rol de usuario "marcos".**
- **Sistema de autenticación con roles y permisos.**

## Tecnologías Utilizadas

- **Laravel 10**
- **PHP**
- **Eloquent ORM**
- **HTML/CSS**
- **Bootstrap (opcional para estilos adicionales)**

## Estructura del Proyecto


bash
Copy code

## Instrucciones de Ejecución

Siga estos pasos para configurar y ejecutar el proyecto en su entorno local:

1. **Clona el repositorio:**

   ```bash
   git clone git@github.com:Andresfonse/Store_Laravel_Roles.git
Instala las dependencias:


Copy code


composer install
Copia el archivo de configuración:




Copy code
cp .env.example .env
Y luego, edita el archivo .env con tus configuraciones.


Genera la clave de aplicación:

Copy code
php artisan key:generate
Crea la base de datos y aplica las migraciones:


Copy code
php artisan migrate


Lanza el servidor de desarrollo:

Copy code
php artisan serve
Visita http://localhost:8000 en tu navegador.

Accede con las siguientes credenciales:

Administrador:
Usuario: admin
Contraseña: admin
Usuario "marcos":
Usuario: marcos
Contraseña: marcos
Recursos Adicionales
Documentación de Laravel
Bootstrap
Imagen de Laravel
Licencia
Este proyecto está bajo la Licencia MIT - consulta el archivo LICENSE para más detalles.