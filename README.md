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

## Notas
- Las fotos se guardan en base de datos (LONGBLOB).
- Reporte se descarga como Excel (.xls) desde el panel admin.
