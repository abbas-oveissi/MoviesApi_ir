<?php
/**
 * Created by IntelliJ IDEA.
 * User: abbas
 * Date: 11/6/16
 * Time: 1:02 AM
 */

namespace Repositories\Image;
use Illuminate\Support\ServiceProvider;
use Entities;
use Repositories\Genre\GenreRepository;


class ImageRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Registers the pokemonInterface with Laravels IoC Container
     *
     */
    public function register()
    {
        // Bind the returned class to the namespace 'Repositories\PokemonInterface
        $this->app->bind('Repositories\Image\ImageInterface', function ($app) {
            return new ImageRepository(new Entities\Image());
        });
    }
}