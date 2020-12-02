# sorteoSymfony

## Instalación del proyecto:

1. Clonar el repositorio.
2. Ejecutar ``composer install`` para instalar las dependencias software.
3. Hacer una copia del archivo ``.env`` llamada ``.env.local`` y personalizar la configuración de la base de datos.
4. Ejecutar ``php bin/console doctrine:migrations:migrate`` para ejecutar las migraciones

## Comprobación de un punto concreto

En el [apartado de tags del repositorio](https://github.com/sambrista/sorteoSymfony/tags) se pueden encontrar etiquetas para comprobar cong ``git checkout`` el estado del proyecto al concluir una sección o un ejercicio. Si por ejemplo queremos comprobar cómo debe quedar el proyecto al terminar el Ejercicio 5.7 (cuya etiqueta es ``Ejercicio-5.7``) deberemos ejecutar la siguiente instrucción:

```bash
git checkout tags/Ejercicio-5.7
```

Para volver a la última versión ejecutamos la siguiente instrucción:

```bash
git checkout main
```
