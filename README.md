# README- AGR-INVENTARIO
    * Sistema de Inventario es un sistema web desarrollado con PHP, MySQL y Bootstrap, que cubre una serie de 
    * requerimientos básicos para llevar el control del inventario dentro de la empresa AGROS S.A. DE C.V. Esta es una      solución sencilla para la gestión de recursos informáticos dentro del departamento de sistemas en la empresa.
    * Este proyecto fue realizado para acreditar puntos para la titulación de la carrera I.S.C.


# Instalacion.

Instalación en windows (servidor local)

1- Descargar los archivos fuentes del sistema

2- Copiar y descomprimir el archivo en la carpeta c:\Appserv/www, al final tendras una carpeta llamada “AGR-INVENTARIO”, a la cual podrás acceder desde el navegador como: http://localhost/AGR-INVENTARIO/

3- Crear una base de datos usando PHPMyAdmin accediendo a la url siguiente: http://localhost/phpmyadmin/

4- Importar las tablas de la base de datos para ello vamos a buscar el archivo "agr-inventario.sql" en el directorio BD de nuestro sistema, una vez localizado procedemos a hacer la importación de los datos desde PHPMyAdmin

5- Configurar los datos de conexión a la base de datos editando el archivo de configuración que se encuentra en la siguiente ruta: AGR-INVENTARIO/includes/root.php, AGR-INVENTARIO/includes/config.inc.php.

6- Vista web: http://localhost/AGR-INVENTARIO/

7- Datos de acceso por defecto: usuario: admin y contraseña: admin



## Prerequisites

* Servidor Web (Apache, Nginx, IIS, etc.)
* MariaDB >= 10.0 or MySQL >= 5.6
* PHP 5.6 o versiones actuales 7.1 en adelante.
* Obigatorio PHP extensiones:
    - json
    - mbstring
    - iconv
    - mysqli
    - session
    - gd (picture generation)
    - curl (CAS authentication)
    - Mpdf

* Recommended PHP extensions (to enable optional features)
    - domxml (CAS authentication)
    - imap (mail collector and users authentication)
    - ldap (users authentication)
    - openssl (encrypted communication)

 * Supported browsers:
    - IE 11+
    - Edge
    - Firefox (including 2 latests ESR version)
    - Chrome

Se recomienda usar Navegadores y Editores de texto que soporte la version usada de PHP, MYSQL, HTML.

## Support
EL SISTEMA ES UN SOFTWARE LIBRE EL CUAL NO TIENE SOPORTE, PERTENECE A LA EMPRESA AGROS S.A DE C.V.

## Colaboradores.
* Josue Sanchez Cruz.