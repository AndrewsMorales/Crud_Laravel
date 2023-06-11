# Crud_Laravel
 Se realiza una crud en laravel se implementa una plantilla adminlte y se hace un inicio de sesion y validacion de datos con jetstream.
    
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
