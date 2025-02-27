<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable=['country_id','state_id','department_id','city_id','first_name','last_name','middle_name','address','zipcode','date_of_birth','date_hired'];

    public function city(){
        return  $this->belongsTo(City::class);
    }

    public function department(){
        return  $this->belongsTo(Department::class);
    }

    public function state(){
        return  $this->belongsTo(State::class);
    }

    public function country(){
        return  $this->belongsTo(Country::class);
    }
}
