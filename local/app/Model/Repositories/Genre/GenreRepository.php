<?php
/**
 * Created by IntelliJ IDEA.
 * User: abbas
 * Date: 11/6/16
 * Time: 1:00 AM
 */

namespace Repositories\Genre;

use Entities\Genre;
use Repositories\Genre\GenreInterface;
use \stdClass;

class GenreRepository implements GenreInterface
{

    public function getGenres()
    {
        return Genre::get();
    }

}