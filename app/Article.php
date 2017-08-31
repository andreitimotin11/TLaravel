<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    //
    use SoftDeletes;
    protected $fillable = ['name', 'text'];
    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function getNameAttribute($value)
    {
        return 'Hello world - ' . $value . 'ola-la';
    }
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = '|' . $value . '|';
    }
}
