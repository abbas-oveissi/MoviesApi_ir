<?php
namespace Entities;

/**
 * Created by IntelliJ IDEA.
 * User: abbas
 * Date: 11/8/16
 * Time: 5:07 PM
 */
use \Illuminate\Database\Eloquent\Model;
class Movie extends Model
{
    public function Genre()
    {
        return $this->belongsToMany('Entities\Genre');
    }

    public function Image()
    {
        return $this->hasMany('Entities\Image','movie_id');
    }
}