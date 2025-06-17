<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeDirectivesProvider extends ServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {
        Blade::directive('ld', static function (string $expression): string {
            $expression = str_replace(['\'', '"'], '', $expression);
            $data = file_get_contents(resource_path('ld'.DIRECTORY_SEPARATOR.$expression.'.json'));

            return <<<HTML
                <script type="application/ld+json">
                    $data
                </script>
                HTML;
        });

        Blade::directive('rawLd', static function (string $expression): string {
            $expression = str_replace(['\'', '"'], '', $expression);

            return file_get_contents(resource_path('ld'.DIRECTORY_SEPARATOR.$expression.'.json'));
        });

        Blade::directive('year', static function (): string {
            return '<?php echo now()->year; ?>';
        });
    }
}
