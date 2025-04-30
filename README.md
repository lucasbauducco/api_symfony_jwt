# Proyecto Symfony + API Platform

Este proyecto es una API REST construida con Symfony 7.x y API Platform, lista para autenticación con JWT y consumo desde aplicaciones externas.

## Requisitos

- PHP >= 8.1
- Composer
- Symfony CLI (opcional pero recomendado)
- Docker y Docker Compose (opcional, si usas contenedores)
- MySQL o PostgreSQL (según configuración)
- Node.js y Yarn (opcional para frontend o Admin Panel)

## Instalación

### 1. Clonar el repositorio

```bash
git clone https://github.com/tu-usuario/tu-proyecto.git
cd tu-proyecto
```
### 2. Instalar dependencias de PHP
```bash
composer install
```
### 3. Copiar archivo de entorno
```bash
cp .env .env.local
```
### Modifica .env.local con los datos correctos de conexión a la base de datos:
```bash
DATABASE_URL="mysql://usuario:clave@127.0.0.1:3306/nombre_bd?serverVersion=8.0"
```
### 4. Crear la base de datos y correr migraciones
```bash
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
```
### 5. (Opcional) Cargar datos de prueba
```bash
php bin/console doctrine:fixtures:load
```
### 6. Iniciar el servidor Symfony
```bash
symfony server:start
```
O usando PHP nativo:
```bash
php -S localhost:8000 -t public
```
### Autenticación (si está habilitada)
Si el proyecto utiliza JWT (LexikJWTAuthenticationBundle), asegúrate de haber generado el par de claves:
```bash
php bin/console lexik:jwt:generate-keypair
```
Para iniciar sesión, usa:
```bash
POST /api/login
{
  "username": "usuario",
  "password": "contraseña"
}

```
### Rutas útiles

GET /api/test → Ruta de prueba

POST /api/login → Autenticación con JWT

GET /api/docs → Documentación Swagger UI generada por API Platform

### Despliegue
Para producción:

Configura correctamente .env.local

Usa un servidor como Nginx o Apache apuntando a /public

Asegúrate de tener configurado HTTPS y los permisos de carpetas (var, vendor, etc.)