<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function books()
    {
        $this->hasMany(Book::class, 'author_id', 'id');
    }
}
