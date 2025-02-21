<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory; 

    protected $fillable = [
        'title',
        'description',
        'status',
        'categorie_id',
        'user_id'
    ];

    public function comments(){
        return $this->hasMany(comments::class, 'post_id');
    }

    public function categorie(){
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }

    public function user(){
        return $this->belongTo(User::class, 'user_id');
    }

    }
 
