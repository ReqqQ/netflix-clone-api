<?php

namespace DomainModel\Netflix;

use Illuminate\Support\Collection;
use Infrastructure\Netflix\Movie\MovieModel;
use Infrastructure\Netflix\Movie\MovieModelCollection;

class MovieService
{
    private IMovies $IMovies;
    public function __construct(IMovies $IMovies)
    {
        $this->IMovies = $IMovies;
    }

    public function getMovies(): MovieModelCollection
    {
        $movieModelCollection = new MovieModelCollection();
        $movies = $this->IMovies->getMovies();

        foreach ($movies as $movie) {
            $movieModelCollection->add(new MovieModel((array)$movie));
        }

        return $movieModelCollection;
    }
}
