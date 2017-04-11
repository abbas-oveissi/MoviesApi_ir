<?php
namespace Entities;

/**
 * Created by IntelliJ IDEA.
 * User: abbas
 * Date: 11/8/16
 * Time: 5:07 PM
 */
use \Illuminate\Database\Eloquent\Model;
class Genre extends Model
{
    public function Movie()
    {
        return $this->belongsToMany('Entities\Movie');
    }
}