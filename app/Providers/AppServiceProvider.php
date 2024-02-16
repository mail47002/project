<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Testimonial;
use App\Models\Article;
use App\Models\Faq;

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
        View::share([
            'testimonials' => Testimonial::all(),
            'articles' => Article::all(),
            'faqs' => Faq::all()
        ]);
      
    }
}
