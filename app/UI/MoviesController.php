<?php

namespace UI;

use Application\Movies\NetflixAppService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MoviesController extends NetflixController
{
    private NetflixAppService $netflixAppService;

    public function __construct(NetflixAppService $netflixAppService)
    {
        $this->netflixAppService = $netflixAppService;
    }

    public function getMovies(Request $request): JsonResponse
    {
        return response()->json($this->netflixAppService->getMovies());
    }
}
