<?php

namespace Application\Movies;

use DomainModel\Netflix\MovieService;
use Illuminate\Support\Collection;

class NetflixAppService
{
    private MovieService $movieService;
    public function __construct(MovieService $movieService)
    {
        $this->movieService = $movieService;
    }

    public function getMovies(): Collection
    {
        $movies = $this->movieService->getMovies();
        $collect = new Collection();
        foreach ($movies as $movie){
            $collect->add(new MoviesDTO($movie));
        }
        return $collect;
    }
}
