<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;


    protected $fillable = ['name', 'note_id', 'user_id', 'description'];

    public function note()
    {
        return $this->hasMany(Note::class);
    }

    public function user()
    {
        return $this->hasOne(Topic::class);
    }

}
