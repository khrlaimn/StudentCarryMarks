<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable =['studID', 'name','mobileNumber'];

    public function subjects(){
        return $this->belongsToMany(Subject::class,'student_subject');
    }
}
