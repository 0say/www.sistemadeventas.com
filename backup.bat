@echo off
:: Configuración de la base de datos
set DB_HOST=localhost
set DB_PORT=3307
set DB_USER=root
set DB_PASS=
set DB_NAME=sistemadeventas
set BACKUP_FILE=sistemadeventas_%date:~-4%-%date:~7,2%-%date:~4,2%.sql

:: Ruta al ejecutable mysqldump en XAMPP
set MYSQLDUMP_PATH="C:\xampp\mysql\bin\mysqldump.exe"

:: Comando para hacer el backup
%MYSQLDUMP_PATH% -h %DB_HOST% -P %DB_PORT% -u %DB_USER% --password=%DB_PASS% %DB_NAME% > %BACKUP_FILE%

echo Backup creado: %BACKUP_FILE%
