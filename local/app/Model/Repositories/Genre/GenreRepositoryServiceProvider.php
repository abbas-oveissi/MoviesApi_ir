<?php
/**
 * Created by IntelliJ IDEA.
 * User: abbas
 * Date: 11/6/16
 * Time: 1:02 AM
 */

namespace Repositories\Genre;
use Illuminate\Support\ServiceProvider;
use Entities;
use Repositories\Genre\GenreRepository;


class GenreRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Registers the pokemonInterface with Laravels IoC Container
     *
     */
    public function register()
    {
        // Bind the returned class to the namespace 'Repositories\PokemonInterface
        $this->app->bind('Repositories\Genre\GenreInterface', function ($app) {
            return new GenreRepository(new Entities\Genre());
        });
    }
}