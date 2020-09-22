<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class board extends Model
{
    // use HasFactory;
    protected $guarded = array('id');

    public static $rules = array(
        'person_id' => 'required',
        'title' => 'required',
        'messages' => 'required'
    );

    public function getData(){
        return $this->id . ': ' . $this->title;
    }
}
