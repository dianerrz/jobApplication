<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobVacancies extends Model
{
    //
    protected $table ='jobvacancies';
    protected $fillable = ['jobVacName', 'jobVacCode', 'jobVacDesc', 'jobVacQual', 'jobVacApplicants'];
}
