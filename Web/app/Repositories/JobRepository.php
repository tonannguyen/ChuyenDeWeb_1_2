<?php

namespace App\Repositories;
use App\Models\MJob;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Schema;

class JobRepository extends BaseRepository
{

    /**
     * Create a new QuizRepository instance.
     *
     * @param  App\Models\MJob $mJob
     * @return void
     */
    public function __construct(
        MJob $mJob
    ) 
    {
        $this->model = $mJob;
    }
}