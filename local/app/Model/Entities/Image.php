<?php
namespace Entities;

/**
 * Created by IntelliJ IDEA.
 * User: abbas
 * Date: 11/8/16
 * Time: 5:07 PM
 */
use \Illuminate\Database\Eloquent\Model;
class Image extends Model
{
    public function Image()
    {
        return $this->belongsTo('Entities\Image');
    }
}