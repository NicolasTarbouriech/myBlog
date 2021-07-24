<?php

namespace App\Http\ViewComposers;

use App\Models\Page;
use App\Models\Follow;
use App\Models\Category;
use Illuminate\View\View;

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
            'pages'      => Page::select('slug', 'title')->get(),
            'follows'    => Follow::all(),
        ]);
    }
}