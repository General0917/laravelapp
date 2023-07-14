<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Validator;
use App\Http\Validators\HelloValidator;

class HelloServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    // public function register(): void {
    //     //
    // }

    /**
     * Bootstrap services.
     */
    // public function boot(): void {
    //     // View::composer(
    //     //     'hello.index', function ($view) {
    //     //         $view->with('view_message', 'composer message!!');
    //     //     }
    //     // );
    //     View::composer(
    //         'hello.index', 'App\Http\Composers\HelloComposer'
    //     );
    // }

    // public function boot() : void {
    //     $validator = $this->app['validator'];

    //     $validator->resolver(function ($translator, $data, $rules, $messages) {
    //         return new HelloValidator($translator, $data, $rules, $messages);
    //     });
    // }

    public function boot() {
        Validator::extend('hello', function($attribute, $value, $parameters, $validator) {
            return $value % 2 == 0;
        });
    }
}
