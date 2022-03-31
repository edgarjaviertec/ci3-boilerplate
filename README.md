## Instalar Phinx
```
composer require robmorgan/phinx
```

## Configurar Phinx

1.- Ejecuta los siguientes comandos:
```
php vendor/bin/phinx init
mkdir database           
mkdir database/migrations
mkdir database/seeders
```

2.- Edita el archivo **"phinx.php"** con los datos de tu DB.


## Crear migraciones
```
php vendor/bin/phinx create CrearTablaDeUsuarios
php vendor/bin/phinx migrate
```

## Crear Seeds
```
php vendor/bin/phinx seed:create usuarios
php vendor/bin/phinx seed:run
```

## Comando útiles

Comando equivalente al **"php artisan migrate:reset"** de Laravel:
```
php vendor/bin/phinx migrate -e development -t 0 
```

Comando equivalente al **"php artisan migrate:refresh"** de Laravel:
```
php vendor/bin/phinx migrate -e development -t 0  && php vendor/bin/phinx migrate
```


Comando equivalente al **"php artisan migrate:refresh --seed"** de Laravel:
```
php vendor/bin/phinx migrate -e development -t 0  && php vendor/bin/phinx migrate && php vendor/bin/phinx seed:run
```
