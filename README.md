## Instalación
1. `composer install`
2. Configurar `.env` 
`DB_CONNECTION=mysql` \
`DB_HOST=127.0.0.1`\
`DB_PORT=3306`\
`DB_DATABASE=clicko`\
`DB_USERNAME=root`\
`DB_PASSWORD= contraseña_de_la_base_de_datos`

3. `php artisan migrate --seed` Para migrar los datos.
4. `php artisan serve` Para arrancar el servidor.

## Rutas
- `GET /api/users`: Listar usuarios.
- `POST /api/users`: Crear usuario (body: `name`, `email`, `password`).
- `GET /api/users/{id}`: Obtener un usuario.
- `PUT /api/users/{id}`: Actualizar usuario.
- `DELETE /api/users/{id}`: Eliminar usuario.
- `GET /api/top-domains`: Top 3 dominios de email.
