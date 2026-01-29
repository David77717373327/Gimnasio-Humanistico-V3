<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
    public function boot(): void
    {
        // Sobrescribir helper asset() para agregar versionado automático
        if (!function_exists('versioned_asset')) {
            function versioned_asset($path) {
                $file = public_path($path);
                if (file_exists($file)) {
                    return asset($path) . '?v=' . filemtime($file);
                }
                return asset($path);
            }
        }

        // Reemplazar asset() en Blade
        Blade::directive('asset', function ($expression) {
            return "<?php echo versioned_asset({$expression}); ?>";
        });
    }
}