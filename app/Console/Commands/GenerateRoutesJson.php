<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Routing\Router;

class GenerateRoutesJson extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'route:json';
    protected $router;

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Router $router)
    {
        $this->router = $router;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $routes = [];
        foreach ($this->router->getRoutes() as $route) {
            if(strripos($route->getName(),'debugbar') !== false)
                continue;
            $routes[$route->getName()] = $route->uri();
        }

        $status = \File::put('resources/js/routes.json', json_encode($routes, JSON_PRETTY_PRINT));
        return ($status) ? true : false;
    }
}
