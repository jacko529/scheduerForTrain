<?php

namespace App\Http\Controllers;

use App\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $countRoute = Route::all()->count();
        if ($countRoute == 0) {
            $drivers = 'There are no routes';
        } else {
            $drivers = DB::table('drivers')
                ->select(DB::raw('count(driver_id) as count, route_id'))
                ->groupBy('route_id')
                ->get();
            $drivers->shift();

        }


        return view('home',compact('drivers'));
    }
}
