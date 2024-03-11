<?php

namespace App\Providers;

use App\Mixins\PostgresEnumGrammarMixin;
use App\Mixins\PostgresEnumMixin;
use Illuminate\Support\ServiceProvider;
use Tpetry\PostgresqlEnhanced\Schema\Blueprint;
use Tpetry\PostgresqlEnhanced\Schema\Grammars\Grammar;
use Tpetry\PostgresqlEnhanced\Support\Facades\Schema;

class PostgresEnumProvider extends ServiceProvider
{
    public function register(): void
    {
        Schema::mixin(new PostgresEnumMixin());
        Grammar::mixin(new PostgresEnumGrammarMixin());

        Blueprint::macro('enumeration', function (string $name, string $type, array $options = []) {
            return $this->addColumn('enumeration', $name, [
                'pg_enum' => $type,
                ...$options,
            ]);
        });
    }
}
