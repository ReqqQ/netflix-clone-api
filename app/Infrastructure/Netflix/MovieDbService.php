<?php

namespace Infrastructure\Netflix;

use DomainModel\Netflix\IMovies;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class MovieDbService implements IMovies
{
    public function getMovies(): Collection
    {
        return DB::table('movies')->get();
    }
}
