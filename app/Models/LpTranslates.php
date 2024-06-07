<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LpTranslates extends Model
{

    protected $table = 'lp_translates';


    protected $fillable = [
        'category', 'key', 'landing_ids', 'en', 'pl', 'es', 'ru', 'de', 'th', 'pt-br'
    ];


}
