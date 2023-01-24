<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Scopes\ScopePerson;

class Person extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'mail' => 'email',
        'Field4' => 'integer|min:0|max:150',
    );

    public function getData() {
        return $this->id . ': ' . $this->name . '（' . $this->Field4 . '）';
    }

    public $timestamps = false;

    public function boards() {
        return $this->hasMany('App\Board');
    }

    // public function getData() {
    //     return $this->id . ': ' . $this->name . '（' . $this->Field4 . '）';
    // }
    // public function scopeNameEqual($query, $str) {
    //     return $query->where('name', $str);
    // }

    // public function scopeAgeGreaterThan($query, $n) {
    //     return $query->where('Field4', '>=', $n);
    // }
    // public function scopeAgeLessThan($query, $n) {
    //     return $query->where('Field4', '<=', $n);
    // }

    // protected static function boot() {
    //     parent::boot();
    //     static::addGlobalScope(new ScopePerson);
    // }
}
