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

    public function Console()
    {
        return $this->hasMany(Console::class, 'game_console', 'game_id', 'console_id');
    }
}
