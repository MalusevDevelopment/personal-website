<?php

namespace App\Mixins;

use Closure;
use Illuminate\Database\Schema\ColumnDefinition;

class PostgresEnumGrammarMixin
{
    public function typeEnumeration(): Closure
    {
        return function (ColumnDefinition $columnDefinition) {
            return $columnDefinition['pg_enum'];
        };
    }
}
