<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tpetry\PostgresqlEnhanced\Eloquent\Concerns\AutomaticDateFormatWithMilliseconds;
use Tpetry\PostgresqlEnhanced\Eloquent\Concerns\RefreshDataOnSave;

class Contact extends Model
{
    use AutomaticDateFormatWithMilliseconds;
    use HasFactory;
    use RefreshDataOnSave;
}
