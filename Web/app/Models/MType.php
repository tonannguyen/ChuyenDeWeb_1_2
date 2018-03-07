<?php

namespace App\Models;

use App\Models\BaseModel;

class MType extends BaseModel
{
    protected $table = 'm_types';

    protected $primaryKey = 'TypeId';

	public $timestamps = false;

    protected $fillable = [
        'Name'
    ];
    protected $guarded = []; 

    public function getAll()
    {
        $types = self::all();
        return $types;
    }
}
