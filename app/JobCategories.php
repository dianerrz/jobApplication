<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobCategories extends Model
{
    //
    

    protected $table ='jobcategories';
    protected $fillable = ['jobCatName', 'jobCatCode', 'jobCatDesc'];
}
