<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function shop()
    {
        return view('shop');
    }

    public function about()
    {
        return view('about');
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function orders()
    {
        return view('orders');
    }


}
?>