## Paso 1:

Crear la imagen desde _Dockerfile_:

``` bash
docker build -t prueba .
```

## Paso 2:

Levantar las imágenes.

``` bahs
docker-compose up
```

## Paso 3:

Entrar en phpmyadmin http://localhost:8080.

``` bash
usuario: root
password: toor
```

## Paso 4:

Importar _init_db.sql_, esto creará una base de datos db_blog;

## Paso 5:

Acceder a la aplicación: http://localhost/

