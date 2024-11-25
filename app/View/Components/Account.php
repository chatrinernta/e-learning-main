<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Account extends Component
{
    public $username;

    public function __construct($username)
    {
        $this->username = $username;
    }

    public function render()
    {
        return view('components.account');
    }
}
