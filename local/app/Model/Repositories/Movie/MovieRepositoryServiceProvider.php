<?php
/**
 * Created by IntelliJ IDEA.
 * User: abbas
 * Date: 11/6/16
 * Time: 1:02 AM
 */

namespace Repositories\Movie;
use Illuminate\Support\ServiceProvider;
use Entities;


class MovieRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Registers the pokemonInterface with Laravels IoC Container
     *
     */
    public function register()
    {
        // Bind the returned class to the namespace 'Repositories\PokemonInterface
        $this->app->bind('Repositories\Movie\MovieInterface', function ($app) {
            return new MovieRepository(new Entities\Movie());
        });
    }
}