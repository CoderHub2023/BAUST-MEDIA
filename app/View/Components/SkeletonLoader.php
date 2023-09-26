<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SkeletonLoader extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    // app/View/Components/SkeletonLoader.php

    public function render()
    {
        return view('components.skeleton-loader');
    }

}
