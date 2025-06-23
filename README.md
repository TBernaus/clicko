## Instalación
Una vez clonado el repositorio y accedido al directorio correspondiente.
1. `composer install`: Para instalar las dependencias de PHP. 
2. Es necesario tener una base de datos previamente para poder usar esta aplicación. En mi caso, la base de datos se llamará `clicko` y trabajará en el puerto 3306.
3. Renombrar el archivo `.env.example` a `.env`. Configurar el archivo `.env` con: \
`DB_CONNECTION=mysql` \
`DB_HOST=127.0.0.1`\
`DB_PORT=3306`\
`DB_DATABASE=clicko`\
`DB_USERNAME=root`\
`DB_PASSWORD= contraseña_de_la_base_de_datos`
4. `php artisan key:generate`: Para generar la clave para la aplicación.
5. `php artisan migrate --seed`: Para migrar los datos.
6. `npm install` y `npm run build`: Para instalar dependencias y compilar assets.
7. `php artisan serve` Para arrancar el servidor.\
El usuario por defecto será `Tomas@clicko.es` y la contraseña `password`

## Rutas para Postman
- `GET /api/users`: Listar usuarios.
- `POST /api/users`: Crear usuario (body: `name`, `email`, `password`).
- `GET /api/users/{id}`: Obtener un usuario.
- `PUT /api/users/{id}`: Actualizar usuario.
- `DELETE /api/users/{id}`: Eliminar usuario.
- `GET /api/top-domains`: Top 3 dominios de email.

## Rutas para Usuarios
- `/register`: Registrarse
- `/login`:  Iniciar sesión
- `/dashboard`: Dashboard
- `/users`: Lista de usuarios. Necesita un usuario registrado.
- `/users/{id}`: Detalles de un usuario específico. Necesita un usuario registrado.
- `/top-domains`: Top 3 dominios de email juntamente a estadísticas. No necesita iniciar sesión.
