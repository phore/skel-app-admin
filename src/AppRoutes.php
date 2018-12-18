<?php
/**
 * Created by PhpStorm.
 * User: matthias
 * Date: 28.11.18
 * Time: 13:11
 */

namespace App;


use Phore\MicroApp\App;
use Phore\MicroApp\AppModule;

class AppRoutes implements AppModule
{

    /**
     * Called just after adding this to a app by calling
     * `$app->addModule(new SomeModule());`
     *
     * Here is the right place to add Routes, etc.
     *
     * @param App $app
     *
     * @return mixed
     */
    public function register(App $app)
    {
        $app->router->get("/", function () {
            return "Hello World!";
        });
    }
}
