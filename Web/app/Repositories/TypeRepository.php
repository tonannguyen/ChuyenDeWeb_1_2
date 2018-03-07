<?php

namespace App\Repositories;
use App\Models\MType;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Schema;

class TypeRepository extends BaseRepository
{

    /**
     * Create a new QuizRepository instance.
     *
     * @param  App\Models\MType $mType
     * @return void
     */
    public function __construct(
        MType $mType
    ) 
    {
        $this->model = $mType;
    }
}