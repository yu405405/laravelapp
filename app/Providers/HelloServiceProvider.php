<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Validator;
use App\Http\Validators\Hellovalidator;

class HelloServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Validator::extend('hello', function($attribute, $value, $parameters, $validator) {
            return $value % 2 == 0;
        });

        // $validator = $this->app['validator'];
        // $validator->resolver(function($translator, $data, $rules, $messages) {
        //     return new HelloValidator($translator, $data, $rules, $messages);
        // });

        // View::composer(
        //     'hello.index', function($view) {
        //         $view->with('view_message', 'composer message!');
        //     }
        // );

        // View::composer(
        //     'hello.index', 'App\Http\Composers\HelloComposer'
        // );
    }
}
