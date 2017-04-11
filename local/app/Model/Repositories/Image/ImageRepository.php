<?php
/**
 * Created by IntelliJ IDEA.
 * User: abbas
 * Date: 11/6/16
 * Time: 1:00 AM
 */

namespace Repositories\Image;

use Entities\Genre;
use Repositories\Genre\GenreInterface;
use \stdClass;

class ImageRepository implements ImageInterface
{

    public function createImage()
    {
        return Genre::get();
    }

}