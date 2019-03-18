<?php

namespace App\Http\Controllers;

use App\Driver;
use App\Route;
use App\timetables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DriverRouteController extends Controller
{


    public function triggerMerge($route)
    {

        $routesWithDriverRelations = Route::with('driver')->find($route);
        $drivers = $routesWithDriverRelations->driver;
        // duplicate the same collection so that collection equals 10 items
        $driverId = $drivers->pluck('surname');
        // display the surname - this could be changed to any attribute
        $duplicateDriver = $drivers->pluck('surname');
        // add the two collections together
        $merge = $driverId->merge($duplicateDriver);
        // how you randomise the data
        $shuffled = $merge->shuffle();

        // number represents the day

        $dayNumber = '0';

        $output = '';
        $output .= '<h1>';
        $output .= $route;
        $output .= ' </h1>';

        $output .= '<table name="saveTable">';
        $output .= '<tr>';
        $output .= '<th>DAY</th>';
        $output .= '<th>Am</th>';
        $output .= '<th>PM</th>';
        $output .= '</tr>';
        // loop through the 10 items in chucks of 2
        // like 1 - 2 , 2 -3
        for ($i = 0; $i < count($merge); $i += 2) {
            // had some weird bug, thats the reason its here
            is_numeric($driverId);
            $dayNumber++;

            $output .= '<tr>';
            $output .= '<td>day ';
            $output .= '' . $dayNumber . '';
            $output .= ' </td>';
            $output .= '<td>';
            // the first item
            $output .= $shuffled[$i];
            $output .= '</td>';
            $output .= '<td>';
            // the the second item equals the first item more the index by 1
            if ($shuffled[$i] == $shuffled[$i + 1]) {
                $output .= $shuffled[$i + 2];
            } else {
                $output .= $shuffled[$i + 1];
            }
            $output .= '</td>';
            $output .= '  </tr>';


        }
        $output .= '</table>';
        is_numeric($output);


        return $output; //


    }//

    /**
     *
     * Method to loop through multiple routes
     */
    public function loopThroughMultipleRoots()
    {
        $driver = DB::table('drivers')
            ->select(DB::raw('count(driver_id) as count, route_id'))
            ->groupBy('route_id')
            ->get();
        $LessThanFive = array();
        foreach ($driver as $drivers)
        {
            if($drivers->count == 5)
            {
                array_push($LessThanFive, $drivers->route_id);
            }

        }
        $output='';
        foreach ($LessThanFive as $more  => $ok) {
            $output .= $this->triggerMerge($ok);
        }
        $saveToTime = new timetables();
        $saveToTime->timetable = $output;
        $saveToTime->save();
        return view('driverroute.driverroute', compact('output')); //

    }


    /**
     *
     * Check how many drivers are allocated to routes
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function driversToRoutes(Request $request)
    {
        $date =$request->get('date');
        $update = timetables::all()->last();;
        DB::table('timetables')
            ->where('id', $update->id)
            ->update(['date' => $date]);

        return redirect('/home'); //

    }

    public function timetable()
    {
        $timetable = timetables::all();

        return view('driverroute.previoustimetables', compact('timetable')); //

    }
}
