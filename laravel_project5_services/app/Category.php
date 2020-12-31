<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Applicant;

class Category extends Model
{
    protected $primaryKey ="cat_id";
    public function applicants(){
        return $this->hasMany(App\Applicant);
    }

    protected $fillable = [
        "cat_desc",
        "cat_name",
        "cat_image"
        ];
}
