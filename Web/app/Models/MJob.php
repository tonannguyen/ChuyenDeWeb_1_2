<?php

namespace App\Models;

use App\Models\BaseModel;

class MJob extends BaseModel
{
    protected $table = 'm_jobs';

    protected $primaryKey = 'Id';

	public $timestamps = false;

    protected $fillable = [
        'TypeId',
        'Title',
        'Url',
        'Address',
        'Salary',
        'Exp',
        'Degree',
        'Position'
    ];
    protected $guarded = []; 

}
