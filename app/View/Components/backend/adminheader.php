<?php

namespace App\View\Components\backend;

use App\Models\Users;
use Illuminate\View\Component;

class adminheader extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // echo "hi";
        // exit();
        return view('components.backend.adminheader');
    }
}
