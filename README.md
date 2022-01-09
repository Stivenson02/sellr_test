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
  
##Evidencia del sistema
![](https://raw.githubusercontent.com/Stivenson02/sellr_test/main/src/resources/img/Captura%20de%20pantalla%20de%202022-01-08%2022-10-26.png)
![](https://github.com/Stivenson02/sellr_test/blob/main/src/resources/img/Captura%20de%20pantalla%20de%202022-01-08%2022-11-45.png?raw=true)
![](https://github.com/Stivenson02/sellr_test/blob/main/src/resources/img/Captura%20de%20pantalla%20de%202022-01-08%2022-12-07.png?raw=true)
![](https://github.com/Stivenson02/sellr_test/blob/main/src/resources/img/Captura%20de%20pantalla%20de%202022-01-08%2022-12-37.png?raw=true)
![](https://github.com/Stivenson02/sellr_test/blob/main/src/resources/img/Captura%20de%20pantalla%20de%202022-01-08%2022-13-45.png?raw=true)
![](https://github.com/Stivenson02/sellr_test/blob/main/src/resources/img/Captura%20de%20pantalla%20de%202022-01-08%2022-14-16.png?raw=true)
![](https://github.com/Stivenson02/sellr_test/blob/main/src/resources/img/Captura%20de%20pantalla%20de%202022-01-08%2022-15-01.png?raw=true)
![](https://github.com/Stivenson02/sellr_test/blob/main/src/resources/img/Captura%20de%20pantalla%20de%202022-01-08%2022-15-23.png?raw=true)