<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gameplay extends Model
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;

    protected $table = 'card_gameplay_fields';
}
