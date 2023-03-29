<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Game extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'image',
        'manufacturer',
        'launch',
    ];

    public function console()
    {
        return $this->belongsToMany(Console::class, 'game_console', 'console_id', 'game_id');
    }
}
