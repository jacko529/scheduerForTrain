<?php

namespace App\Http\Controllers;

use App\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // check if there is more than 0 in the collection
        $countRoute = Route::all()->count();
        if($countRoute == 0){
            $routes = 'There are no routes';
        }
        else{
            $routes = Route::all();
        }
        return view('Routes.index', compact('routes')) ;  //   //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('routes.create');
        //
    }


    /**
     *
     * Function to store the route properties and validate them
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request,[

            'route_id' => 'required|max:50',

            'start_location' => 'required|min:2',

            'end_location' => 'required|max:50',


        ],[

            'route_id.required' => 'Please enter the route name ',

            'start_location.required' => 'Please enter the start location',

            'end_location.required' => 'Please enter the enter location ',

        ]);

        $crud = new Route([

            'route_id' => $request->get('route_id'),

            'start_location' => $request->get('start_location'),

            'end_location' => $request->get('end_location')

        ]);


        $crud->save();

        return redirect('/route'); //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $LessThanFive = Route::all();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  String  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $route = Route::find($id);

        return view('Routes.edit', compact('route','id')); //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  String  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $crud = Route::find($id);


            $crud->route_id = $request->get('route_id');
            $crud->start_location = $request->get('start_location');
            $crud->end_location = $request->get('end_location');



        $crud->save();

        return redirect('/route');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stud = Route::find($id);

        $stud->delete();

        return redirect('/route');

    }


    public function showSelectOfRoutes()
    {

    }
}
