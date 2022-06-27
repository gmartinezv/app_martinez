# CakePHP 3 APP Martinez (Prueba Backend Kibernum)





El framework usado es cakePHP 3.9: 

## Instalacion

Para ejecutarlo necesitas tener: un servidor con apache, php 7, Mysql, composer.

1. bajarte la app con git clone https://github.com/gmartinezv/app_martinez.git
2. entrar a la carpeta `cd app_martinez`.
3. Run `composer install  `  o `composer update`.

 luego ejecutar en su localhost la direccion completa donde coloco el proyecto.

o tambien puede crear un server:
```bash
bin/cake server -p 8765
```

y visite `http://localhost:8765` para ver la pagina inicial.

Tambien se encuentra activa en mi servidor web:  https//germanweb.cl/app_martinez
o en AWS de Amazon http://13.59.163.50/app_martinez/ 

## Update

sin compentarios.


## Configuration

existe un archivo de SQL el cual contiene los datos que maneja la aplicacion. 

## Layout

sin comentarios.
___________________________________________________________________
PRUEBA PRÁCTICA
La prueba consiste en hacer una app con un mantenedor de usuarios, el modelo de datos
queda al criterio del postulante.La app debe contar con un Login de usuario, dos perfiles y un
mantenedor de usuarios.
La autentificación a la plataforma debe ser por medio de un usuario y contraseña, el usuario
puede ser el correo electrónico de la persona.

Funcionalidad esperada
- Login de usuario
- Mantenedor de personas y sus contraseñas de acceso
- Buscador de usuarios por distintos criterios
- Dos perfiles
- Perfil visita: sólo tiene acceso al listado de usuarios y puede visualizar los datos
de cada uno
- Perfil admin: incluye lo del perfil visita y además puede modificar, eliminar,
desactivar, modificar y cambiar contraseña de cualquier usuario.


Pauta a seguir
- La aplicación debe ser desarrollada usando CakePHP 2.* o 3.* y Bootstrap en el front.
- El código debe quedar en un repositorio público como github y deberá ser compartido
para su revisión, con una base de datos de prueba con datos precargados y un usuario
y contraseña de test para cada perfil.
- Se deberá generar una URL pública que permita probar lo desarrollado, de lo contrario
no será considerado. Heroku, los créditos gratuitos de amazon o Vercel te ayudarán si
no sabes donde subir la app.
- Código limpio y reusable
- Utilización de funcionalidades nativas del framework
- Utilizar un algoritmo de encriptación de contraseña (no es MD5)
- Funcionalidades adicionales útiles por parte del postulante.

Los criterios de evaluación serán
- Implementación
- Convención de código y namespacing
- Validaciones
- Capa de seguridad para cada perfil
- Orden
- Funcionalidad de la aplicación.
