<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $guarded = ['slug'];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
    use HasFactory;
}
