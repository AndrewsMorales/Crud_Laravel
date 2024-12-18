# Crud_Laravel
 Este proyecto consiste en la implementación de un CRUD (Crear, Leer, Actualizar, Eliminar) en Laravel, utilizando la plantilla AdminLTE para el diseño de la interfaz de usuario. Además, se integra Jetstream para la gestión de inicio de sesión y validación de datos, asegurando una experiencia de usuario fluida y segura.
    
 --//--//--//--//--//--//--//--//--//--//--//--//--//--//--//--//--//--//--//--//--//--//--//--//--
 
- Cuando se instala jetstream toca agregar lo siguiente en "Crud_Laravel\app\Providers\AppServiceProvider.php"
se cambia el codigo por lo siguiente:

    namespace App\Providers;

    use Illuminate\Support\ServiceProvider;
    use Illuminate\Support\Facades\Schema;

    class AppServiceProvider extends ServiceProvider
    
    {
    
        /**
         * Register any application services.
         */
         
        public function register(): void
        {
            //
        }
        
        /**
         * Bootstrap any application services.
         */
         
        public function boot()
        {
            Schema::defaultStringlength(191);
        }
        
    }
- Esto se realiza para evitar errores cuando se migra la base y se ejecuta es muy importante
 
--//--//--//--//--//--//--//--//--//--//--//--//--//--//--//--//--//--//--//--//--//--//--//--//--

- Para iniciarlo primero crear el .env 
Luego ejecutar "php artisan key:generate"
luego "npm install && npm run build"
luego migrar la base de datos con "php artisan migrate"
y por ultimo "php artisan serve" para probar el funcionamiento


![Imagen de WhatsApp 2023-06-11 a las 00 14 35](https://github.com/AndrewsMorales/Crud_Laravel/assets/120028117/333b136f-6a28-49a9-a26c-a06c2c631b74)
![Imagen de WhatsApp 2023-06-11 a las 00 14 59](https://github.com/AndrewsMorales/Crud_Laravel/assets/120028117/a4aa0f50-dc45-43f2-99e3-e3f50188ea2a)
![Imagen de WhatsApp 2023-06-11 a las 00 15 15](https://github.com/AndrewsMorales/Crud_Laravel/assets/120028117/ce4d131c-6a69-4d8d-9c08-c6acbf0426f7)
![Imagen de WhatsApp 2023-06-11 a las 00 15 33](https://github.com/AndrewsMorales/Crud_Laravel/assets/120028117/2e597fc0-9d8b-416e-9454-fc2993b74508)
