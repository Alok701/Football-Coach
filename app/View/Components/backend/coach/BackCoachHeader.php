<?php

namespace App\View\Components\backend\coach;

use App\Models\Users;
use Illuminate\View\Component;

class BackCoachHeader extends Component
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
        $userData = Users::join('user_details', 'user_details.user_id', '=', 'users.id')
            ->where('users.id', session('USER_ID'))
            ->first();
        dd($userData->full_name);
        return view('components.backend.coach.back-coach-header',["userData" => $userData]);
    }
}
