<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Classroom extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class, 'classroom_user');
    }
}