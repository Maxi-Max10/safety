# Control de Seguridad

## Requisitos
- PHP 8.1+
- MySQL/MariaDB
- Servidor Apache con mod_rewrite

## Configuración rápida
1) Copiá .env.example a .env y completá credenciales.
2) Importá la base usando database/schema.sql.
3) Apuntá el DocumentRoot a la carpeta public.
4) Ingresá con admin@demo.com / Admin123.

## Hostinger
1) Subí todos los archivos del proyecto (incluyendo public, src y database).
2) En el panel, configurá el DocumentRoot a la carpeta public.
3) Creá la base en MySQL y ejecutá database/schema.sql dentro de esa base.
4) Creá el archivo .env con tus credenciales reales.

## Notas
- Las fotos se guardan en base de datos (LONGBLOB).
- Reporte se descarga como Excel (.xls) desde el panel admin.
