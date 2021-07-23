<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Category;

class HomeComposer
{
    /**
     * Bind data to the view.
     * There is no artisan command to do this.
     * 
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with([
            'categories' => Category::has('posts')->get(),
        ]);
    }
}