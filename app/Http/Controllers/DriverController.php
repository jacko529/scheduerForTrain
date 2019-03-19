<?php

namespace App\Http\Controllers;

use App\Route;
use Illuminate\Http\Request;
use App\Driver;
use Illuminate\Support\Facades\DB;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // check if there is more than 0 in the collection
        $countDriver = Driver::all()->count();
        if ($countDriver == 0) {
            $drivers = 'There are no drivers';
        } else {
            $drivers = Driver::all();
        }
        return view('drivers.index', compact('drivers'));  //
    }

    /**
     * Show the form for creating a new resource.
     *
     * counting to see if there is less than 5 drivers attached to a route
     *
     * this function only displays routes if there is less than 5 attached
     *
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $driver = DB::table('drivers')
            ->select(DB::raw('count(driver_id) as count, route_id'))
            ->groupBy('route_id')
            ->get();
        $LessThanFive = array();
        foreach ($driver as $drivers) {
            if ($drivers->count < 5) {
                array_push($LessThanFive, $drivers->route_id);
            }

        }

        return view('drivers.create', compact('LessThanFive'));
        //
    }


    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        $this->validate($request, [

            'title' => 'required|max:50',

            'first_name' => 'required|min:2',

            'surname' => 'required|max:50',

            'property_number' => 'required|min:1',

            'first_line_address' => 'required|max:50',

            'post_code' => 'required|max:9',

            'phone_number' => 'required|min:12',

        ], [

            'title.required' => 'Please enter the drivers\'s title ',

            'first_name.required' => 'First name should be minimum of 2 characters',

            'surname.required' => 'Please enter the drivers\'s title ',

            'property_number.min' => 'The property number should be minimum of 1 characters',

            'first_line_address.required' => 'Please enter the first line of address ',

            'post_code.required' => 'Please enter the post code ',

            'phone_number.min' => 'Phone number should be minimum of 12 characters',

        ]);

        $crud = new Driver([

            'title' => $request->get('title'),

            'first_name' => $request->get('first_name'),

            'surname' => $request->get('surname'),

            'property_number' => $request->get('property_number'),

            'first_line_address' => $request->get('first_line_address'),

            'post_code' => $request->get('post_code'),

            'phone_number' => $request->get('phone_number'),

            'route_id' => $request->get('route_id'),

        ]);


        $crud->save();

        return redirect('/driver'); //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $driver = Driver::find($id);

        $drivers = DB::table('drivers')
            ->select(DB::raw('count(driver_id) as count, route_id'))
            ->groupBy('route_id')
            ->get();
        $LessThanFive = array();
        foreach ($drivers as $Drivers) {
            if ($Drivers->count < 5) {
                array_push($LessThanFive, $Drivers->route_id);
            }

        }

        return view('drivers.edit', compact('driver', 'id', 'LessThanFive'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $crud = Driver::find($id);

        $crud->title = $request->get('title');

        $crud->first_name = $request->get('first_name');

        $crud->surname = $request->get('surname');

        $crud->property_number = $request->get('property_number');

        $crud->first_line_address = $request->get('first_line_address');

        $crud->post_code = $request->get('post_code');

        $crud->phone_number = $request->get('phone_number');

        $crud->route_id = $request->get('route_id');

        $crud->save();

        return redirect('/driver');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stud = Driver::find($id);

        $stud->delete();

        return redirect('/driver');


    }
}
