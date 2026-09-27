# Keek CRM

CRM inmobiliario de Keek basado en CodeIgniter 4. Conserva la funcionalidad del sistema de origen con la identidad visual, recursos y paleta de Keek.

## Puesta en marcha con Docker

Requisitos: Docker Desktop con contenedores Linux.

```powershell
docker compose up -d --build
```

La aplicación queda disponible en <http://localhost:8088> y MySQL en el puerto local `3307`.

La base de datos usa el volumen persistente `keek`. Los datos de ejecución y las cargas de usuarios se guardan en `keek_writable`, `keek_uploads` y `keek_videos`.

## Importar la base de datos

El respaldo de producción no forma parte del repositorio. Para importarlo en una instalación nueva:

```powershell
docker cp ..\assets\damelodamelo_damelo.sql keek-db:/tmp/keek.sql
docker exec keek-db sh -c 'mysql -uroot -p"$MYSQL_ROOT_PASSWORD" keek < /tmp/keek.sql'
docker exec keek-db rm -f /tmp/keek.sql
```

## Configuración

Copia `.env.example` como `.env` para sustituir contraseñas, puertos y SMTP. `.env` y los volcados `*.sql` están excluidos de Git.

## Desarrollo sin Docker

Se necesita PHP 8.1 o superior con `intl`, `mbstring`, `mysqli`, `gd` y `zip`, además de Composer. Configura la URL y la conexión en un archivo `.env` de CodeIgniter o mediante variables de entorno.
