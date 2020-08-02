<?php

use Illuminate\Support\Facades\Artisan;

class engine
{
    public function run()
    {
        echo 'vroom';
    }
}

class car
{
    protected $engine;

    public function __construct($engine)
    {
        $this->engine = $engine;
    }

    public function start()
    {
        return $this->engine->run();
    }
}

\Illuminate\Support\Facades\App::bind('car', function () {
    $car = new car(new  engine());
    return $car;
});

class CarFacade extends \Illuminate\Support\Facades\Facade
{
    public static function getFacadeAccessor()
    {
        return 'car';
    }
}

Artisan::command('drive', function () {
    CarFacade::start();

});
