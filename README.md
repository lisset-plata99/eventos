# eventos
proyecto eventos
Alumna : Lisset Guadalupe Sanchez Plata
Grupo : 1522IS
Link Heroku : https://lisseteventos.herokuapp.com/
Link YouTube : 

Codigos

 composer create-project laravel/laravel eventos

 crear base de datos en phpmyadmin

 php artisan make:migration TipoEvento
 php artisan make:migration Cliente
 php artisan make:migration MenuComida
 php artisan make:migration AgendaEventos

 php artisan migrate

 php artisan make:seeder EventosSeeder   

 php artisan make:model TipoEvento
 php artisan make:model Cliente
 php artisan make:model MenuComida
 php artisan make:model AgendaEventos

php artisan make:controller agendaeventosController

creamos las vistas
creamos las rutas
nos registramos en la api
obtuvimos la key de la api a consumir
consumimos la api en noticias.blade.php, utilizando la tecnologia JSON

creamos un nuevo repositorio en github
subimos a github
enlazamos github con heroku
creamos un dominio en heroku
creamos archivo de Procfile
subimos base de datos
creamos Config Vars
crear variable con el servidor donde se subio la base de datos
