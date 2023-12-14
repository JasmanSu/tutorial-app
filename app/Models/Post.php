<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];
    //protected $fillable = ['title','slug', 'excerpt','body', 'id'];

    public function category(){
        return $this->belongsto(Category::class);
    }
}
