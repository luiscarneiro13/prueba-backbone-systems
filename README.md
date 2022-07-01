# Backbone Challenge Senior Backend Developer


De antemano muchas gracias por permitirme realizar este reto



## Para correr el proyecto se necesita php 7.4.0 o superior, además de los siguientes comandos:

1.- composer install


2.- Configurar una base de datos local y agregar sus datos de conexión al archivo .env


3.- Correr en la terminal: php artisan migrate --seed


4.- Levantar xamp, wamp, laragon, etc. La aplicación se encarga de llenar la base de datos desde un archivo cuando se corren los seeders



## La forma en la que abordé el reto, fué la siguiente:


1.- Analicé el formato del endpoint de ejemplo y traté de aplicar normalización de bases de datos, pero no se podía, ya que en el archivo había muchas ciudades sin nombre.


2.- Descargué el archivo txt, lo abrí en excel, completé algunos zip_code con ceros a la izquierda para que llegara al estandar de 5 dígitos, lo exporté como csv y lo almacené dentro del proyecto en: App/Data/CPdescarga.csv


3.- Luego instalé laravel maatwebsite excel para procesar el archivo csv


4.- Creé la ruta, el controlador, agregué un helper que está disponible globalmente "quitarTildes()", ya que vi que el endpoint de muestra aparecen los nombres en mayúsculas y sin tildes


5.- Creé al modelo y agregué mutadores para las mayúscula, enteros y agregué el helper que quita las tildes


6.- Luego crré un recurso de tipo coleccion, agrupé y apliqué el formato requerido


7.- Creé la migración de la tabla y agregué el campo zip_code como index, ya que se iba a realizar la búsqueda mediante este campo


8.- Luego creé el controlador, devolviendo la consulta envuelta por el recurso de collection formateado


9.- Luego creé el repositorio de git


10.- Creé un servidor de base de datos y otro de aplicación laravel en DigitalOcean, a ésta última le paso las variables de entorno para la conexión a la base de datos y le indiqué el repositorio de git para que haga el despliegue contínuo cada que se actualice el repositorio en la rama main


##### El reto estuvo muy divertido y lo disfruté mucho. ¡Espero que cumpla con sus requerimientos!