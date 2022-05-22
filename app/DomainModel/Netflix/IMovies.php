<?php

namespace DomainModel\Netflix;

use Illuminate\Support\Collection;

interface IMovies
{
    public function getMovies(): Collection;
}
