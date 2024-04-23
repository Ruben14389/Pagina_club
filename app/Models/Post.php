<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descripcion',
        'imagen',
        'user_id'
    ];

    public function user()
    {    //->select(['name', 'username']) solo es para que de manera puntual nos muestre lo que nosotros queremos
        return $this->belongsTo(User::class)->select(['name', 'username']);
    }
    public function comentarios()
    {
        return $this->hasMany(Comentario::class);
    }
    public function likes()
    {
        return $this->hasMany(like::class);
    }
    public function checkLike(User $user)
    {
        return $this->likes->contains('user_id', $user->id);
    }
}
