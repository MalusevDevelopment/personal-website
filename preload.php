<?php
/**
 * Preloader Script
 *
 * This file is generated automatically by the Laragear Preload package.
 *
 * The following script uses `opcache_compile_file($file)` syntax to preload each file in this list into Opcache.
 * To full enable preload, add this file to your `php.ini` in `opcache.preload` key to preload
 * this list of files PHP at startup. This file also includes some information about Opcache.
 *
 * Add (or update) this line in `php.ini`:
 *
 *     opcache.preload=/var/www/html/preload.php
 *
 * Server restart is not required.
 *
 * --- Config ---
 * Generated at: 2023-08-27 21:06:53
 * Opcache
 *     - Used Memory: 10.6 MB
 *     - Free Memory: 117.4 MB
 *     - Wasted Memory: 0.0 MB
 *     - Cached files: 107
 *     - Hit rate: 9.83%
 *     - Misses: 6158
 * Preloader config
 *     - Memory limit: 32 MB
 *     - Files excluded: 0
 *     - Files appended: 0
 *
 *
 * For more information:
 * @see https://github.com/laragear/preload
 */



$files = [
    '/var/www/html/vendor/laravel/octane/src/Swoole/SwooleExtension.php',
    '/var/www/html/vendor/myclabs/deep-copy/src/DeepCopy/deep_copy.php',
    '/var/www/html/vendor/symfony/polyfill-intl-normalizer/bootstrap.php',
    '/var/www/html/vendor/laravel/prompts/src/helpers.php',
    '/var/www/html/vendor/paragonie/sodium_compat/lib/constants.php',
    '/var/www/html/vendor/symfony/translation/Resources/functions.php',
    '/var/www/html/vendor/pestphp/pest-plugin-laravel/src/Session.php',
    '/var/www/html/vendor/livewire/livewire/src/Features/SupportRedirects/TestsRedirects.php',
    '/var/www/html/vendor/symfony/deprecation-contracts/function.php',
    '/var/www/html/vendor/clue/stream-filter/src/functions_include.php',
    '/var/www/html/vendor/pestphp/pest-plugin-laravel/src/Console.php',
    '/var/www/html/vendor/pestphp/pest-plugin-laravel/src/Http.php',
    '/var/www/html/vendor/pestphp/pest/src/Pest.php',
    '/var/www/html/vendor/laravel/framework/src/Illuminate/Events/functions.php',
    '/var/www/html/vendor/pestphp/pest/src/Concerns/Extendable.php',
    '/var/www/html/vendor/pestphp/pest/src/Plugin.php',
    '/var/www/html/vendor/livewire/livewire/src/Features/SupportFileDownloads/TestsFileDownloads.php',
    '/var/www/html/vendor/pestphp/pest-plugin-arch/src/Autoload.php',
    '/var/www/html/vendor/nunomaduro/collision/src/Adapters/Phpunit/Autoload.php',
    '/var/www/html/vendor/phpunit/phpunit/src/Event/Events/Application/StartedSubscriber.php',
    '/var/www/html/vendor/laravel/octane/bin/bootstrap.php',
    '/var/www/html/vendor/autoload.php',
    '/var/www/html/vendor/sebastian/version/src/Version.php',
    '/var/www/html/vendor/phpunit/phpunit/src/Runner/Version.php',
    '/var/www/html/vendor/paragonie/sodium_compat/lib/stream-xchacha20.php',
    '/var/www/html/vendor/pestphp/pest/src/Concerns/Pipeable.php',
    '/var/www/html/vendor/phpunit/phpunit/src/Event/Subscriber.php',
    '/var/www/html/vendor/symfony/polyfill-php83/bootstrap.php',
    '/var/www/html/vendor/laminas/laminas-diactoros/src/functions/marshal_method_from_sapi.php',
    '/var/www/html/vendor/pestphp/pest/src/Concerns/Retrievable.php',
    '/var/www/html/vendor/composer/autoload_real.php',
    '/var/www/html/vendor/laminas/laminas-diactoros/src/functions/parse_cookie_header.php',
    '/var/www/html/vendor/paragonie/sodium_compat/autoload.php',
    '/var/www/html/vendor/laminas/laminas-diactoros/src/functions/marshal_protocol_version_from_sapi.php',
    '/var/www/html/vendor/fakerphp/faker/src/Faker/Factory.php',
    '/var/www/html/vendor/symfony/polyfill-intl-normalizer/bootstrap80.php',
    '/var/www/html/vendor/laminas/laminas-diactoros/src/functions/create_uploaded_file.php',
    '/var/www/html/vendor/symfony/polyfill-intl-idn/bootstrap.php',
    '/var/www/html/vendor/guzzlehttp/guzzle/src/functions_include.php',
    '/var/www/html/vendor/symfony/polyfill-php72/bootstrap.php',
    '/var/www/html/vendor/livewire/livewire/src/Features/SupportTesting/MakesAssertions.php',
    '/var/www/html/vendor/guzzlehttp/guzzle/src/functions.php',
    '/var/www/html/vendor/spatie/laravel-ignition/src/helpers.php',
    '/var/www/html/vendor/symfony/polyfill-mbstring/bootstrap80.php',
    '/var/www/html/vendor/pestphp/pest-plugin-laravel/src/Database.php',
    '/var/www/html/vendor/laminas/laminas-diactoros/src/functions/marshal_headers_from_sapi.php',
    '/var/www/html/vendor/symfony/polyfill-intl-grapheme/bootstrap.php',
    '/var/www/html/vendor/symfony/polyfill-mbstring/bootstrap.php',
    '/var/www/html/vendor/pestphp/pest-plugin-laravel/src/ExceptionHandling.php',
    '/var/www/html/vendor/livewire/livewire/src/Features/SupportEvents/TestsEvents.php',
    '/var/www/html/vendor/laravel/framework/src/Illuminate/Macroable/Traits/Macroable.php',
    '/var/www/html/vendor/symfony/polyfill-php80/bootstrap.php',
    '/var/www/html/vendor/php-http/message/src/filters.php',
    '/var/www/html/vendor/laminas/laminas-diactoros/src/functions/normalize_server.php',
    '/var/www/html/vendor/symfony/polyfill-ctype/bootstrap80.php',
    '/var/www/html/vendor/symfony/var-dumper/Resources/functions/dump.php',
    '/var/www/html/vendor/pestphp/pest-plugin-laravel/src/Autoload.php',
    '/var/www/html/vendor/barryvdh/laravel-debugbar/src/helpers.php',
    '/var/www/html/vendor/composer/platform_check.php',
    '/var/www/html/vendor/paragonie/sodium_compat/lib/ristretto255.php',
    '/var/www/html/vendor/ralouphie/getallheaders/src/getallheaders.php',
    '/var/www/html/vendor/pestphp/pest-plugin-laravel/src/Container.php',
    '/var/www/html/vendor/pestphp/pest-plugin-laravel/src/Time.php',
    '/var/www/html/vendor/symfony/polyfill-uuid/bootstrap.php',
    '/var/www/html/vendor/nunomaduro/termwind/src/Functions.php',
    '/var/www/html/vendor/livewire/livewire/src/Features/SupportValidation/TestsValidation.php',
    '/var/www/html/vendor/pestphp/pest-plugin-laravel/src/MocksApplicationServices.php',
    '/var/www/html/vendor/symfony/polyfill-ctype/bootstrap.php',
    '/var/www/html/vendor/ramsey/uuid/src/functions.php',
    '/var/www/html/vendor/spatie/flare-client-php/src/helpers.php',
    '/var/www/html/vendor/symfony/string/Resources/functions.php',
    '/var/www/html/vendor/paragonie/sodium_compat/lib/namespaced.php',
    '/var/www/html/vendor/pestphp/pest-plugin-livewire/src/Autoload.php',
    '/var/www/html/vendor/pestphp/pest-plugin-faker/src/Faker.php',
    '/var/www/html/vendor/laravel/framework/src/Illuminate/Support/helpers.php',
    '/var/www/html/vendor/composer/ClassLoader.php',
    '/var/www/html/vendor/laravel/framework/src/Illuminate/Collections/helpers.php',
    '/var/www/html/vendor/pestphp/pest-plugin-laravel/src/Authentication.php',
    '/var/www/html/vendor/laminas/laminas-diactoros/src/functions/normalize_uploaded_files.php',
    '/var/www/html/vendor/paragonie/sodium_compat/autoload-php7.php',
    '/var/www/html/vendor/nunomaduro/collision/src/Adapters/Phpunit/Subscribers/EnsurePrinterIsRegisteredSubscriber.php',
    '/var/www/html/vendor/laravel/framework/src/Illuminate/Foundation/helpers.php',
    '/var/www/html/vendor/pestphp/pest/src/Functions.php',
    '/var/www/html/vendor/livewire/livewire/src/helpers.php',
    '/var/www/html/vendor/pestphp/pest-plugin-laravel/src/Expectations.php',
    '/var/www/html/vendor/mockery/mockery/library/helpers.php',
    '/var/www/html/vendor/livewire/livewire/src/Features/SupportTesting/Testable.php',
    '/var/www/html/vendor/psy/psysh/src/functions.php',
    '/var/www/html/vendor/laravel/octane/src/Swoole/Handlers/OnWorkerStart.php',
    '/var/www/html/vendor/paragonie/sodium_compat/lib/sodium_compat.php',
    '/var/www/html/vendor/pestphp/pest/src/Expectation.php',
    '/var/www/html/vendor/mockery/mockery/library/Mockery.php',
    '/var/www/html/vendor/clue/stream-filter/src/functions.php',
    '/var/www/html/vendor/paragonie/sodium_compat/src/Compat.php',
    '/var/www/html/vendor/phpunit/phpunit/src/Framework/Assert/Functions.php',
    '/var/www/html/vendor/composer/autoload_static.php',
    '/var/www/html/vendor/laravel/octane/bin/WorkerState.php',
    '/var/www/html/vendor/laravel/octane/bin/createSwooleTimerTable.php',
    '/var/www/html/vendor/laravel/octane/bin/swoole-server',
    '/var/www/html/vendor/laravel/octane/src/Tables/SwooleTable.php',
    '/var/www/html/vendor/laravel/octane/src/Swoole/Handlers/OnManagerStart.php',
    '/var/www/html/vendor/laravel/octane/src/Tables/Concerns/EnsuresColumnSizes.php',
    '/var/www/html/vendor/laravel/octane/src/Tables/TableFactory.php',
    '/var/www/html/vendor/laravel/octane/bin/createSwooleCacheTable.php',
    '/var/www/html/vendor/laravel/octane/bin/createSwooleTables.php',
    '/var/www/html/vendor/laravel/octane/src/Stream.php',
    '/var/www/html/vendor/laravel/octane/bin/createSwooleServer.php'
];

foreach ($files as $file) {
    try {
        if (!(\is_file($file) && \is_readable($file))) {
            continue;
        }
        opcache_compile_file($file);
    } catch (\Throwable $e) {
        echo 'Preloader Script has stopped with an error' . \PHP_EOL .
             'Message: ' . $e->getMessage() . \PHP_EOL .
             'File: ' . $file . \PHP_EOL;

        throw $e;
    }
}

