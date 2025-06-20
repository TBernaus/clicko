## Instalación
1. `composer install`
2. Configurar `.env` 
3. `php artisan migrate --seed`

## Rutas
- `GET /api/users`: Listar usuarios.
- `POST /api/users`: Crear usuario (body: `name`, `email`, `password`).
- `GET /api/users/{id}`: Obtener un usuario.
- `PUT /api/users/{id}`: Actualizar usuario.
- `DELETE /api/users/{id}`: Eliminar usuario.
- `GET /api/top-domains`: Top 3 dominios de email.