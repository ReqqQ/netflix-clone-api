<?php

namespace Infrastructure\Netflix\Movie;

use Illuminate\Database\Eloquent\Model;

class MovieModel extends Model
{
    protected $table = 'movies';
    protected $fillable = ['id', 'name', 'description'];

    public function getName()
    {
        return $this->getAttribute('name');
    }
}
