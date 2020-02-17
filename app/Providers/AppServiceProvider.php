<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\TypeProduct;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('partials.header', function ($view) {
            // $category = Category::all();
            $typeproduct = TypeProduct::all();

            $category= DB::table('category')
                     ->select('*')
                     ->where('id', '<>', 6)
                     ->get();
            $category1= DB::table('category')
                    ->select('*')
                    ->where('id', '=', 6)
                    ->get();
            $view->with(['typeproduct'=>$typeproduct,'category'=>$category,'category1'=>$category1]);
        });
    }
}