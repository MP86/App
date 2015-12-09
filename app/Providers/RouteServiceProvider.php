<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
       // $router->model('amministratori', \App\Amministratore::class);                         /* versione semplice */
	   
	   
	   
    	
    	$router->bind('amministratori', function($id) {                             /*versione con opzioni specifiche*/
    		return \App\Amministratore::where('id', $id)->FirstOrFail();
    		 
    	});
		
		$router->bind('utenti', function($id) {                             /*versione con opzioni specifiche*/
    		return \App\Utente::where('id', $id)->FirstOrFail();
    		 
    	});

    	$router->bind('aziende', function($id) {                             /*versione con opzioni specifiche*/
    		return \App\Azienda::where('id', $id)->FirstOrFail();
    		 
    	});
		
    	$router->bind('problemi', function($id) {                             /*versione con opzioni specifiche*/
    		return \App\Problema::where('id', $id)->FirstOrFail();
    		 
    	});
		
        parent::boot($router);
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function ($router) {
            require app_path('Http/routes.php');
        });
    }
}
