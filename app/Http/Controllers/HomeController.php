<?php

namespace App\Http\Controllers;

use App\Models\OrderModel;

/**
 *
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('home');
    }
}
