# sellr_test
Acontinuacion se presenta la prueba para Sellr, la cual solicita no usar base de datos y manejar  dos objetos JSON, se entiende que se desea simular el registro basico de productos.

Este desarrollo tiene el registro de proveedore y productos; para su almacenamiento se usa la libreria STORAGE la cual creara dos archivos JSON

- **supplier_data:** el cual almacena los proveedores
- **product_data:** el cual almacena los productos

el controlador **CodeController.php** tiene 4 funciones encargadas de consultar y almacenar la informacion en los archivos JSON, se relizo un front basico para ser un poco mas amigable la navegacion de la prueba

# Instalar la prueba
- El primero paso es descargar el codigo con las sentencias de GIT
- Se debe tener inatalado 
  - **COMPOSER** 
  - **DOCKER**
  
##Paso a paso
- Una vez descargado el repositorio entre desde consola a la carpeta SRC e instale composer, para poder instalar las dependencias de laravel


    cd src
    composer install

- Ahora salga de la carpeta SRC y ejecute el docker compose      


    cd..
    docker-compose up -d
Asegurece de que  nginx y  php esten corriendo


    docker-compose ps
- De permisos a la carpeta STORAGE

      docker exec sellr_php chmod -R 777 storage/
      docker exec sellr_php chmod -R 777 storage/logs/
- Vaya a la URL http://localhost/, si sale un error de permisos vuelva a ejecutar

      docker exec sellr_php chmod -R 777 storage/
  
##Evidencia el sistema
