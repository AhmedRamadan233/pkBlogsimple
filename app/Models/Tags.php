<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;




    public function categories()
    {
        return $this->BelongsToMany(Tags::class , 'category_tags');
    }
}
