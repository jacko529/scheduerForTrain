<?php

namespace App\Http\Controllers;

use App\Driver;
use App\Route;
use App\timetables;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class DriverRouteController extends Controller
{


    public function triggerMerge($route)
    {
        $type = Route::with('driver')->find($route);
        $drivers = $type->driver;
        $driverId = $drivers->pluck('surname');
        $duplicateDriver = $drivers->pluck('surname');
        $merge = $driverId->merge($duplicateDriver);
        $shuffled = $merge->shuffle();

        $arr[] = array('6a');

        $weekNumber1 = '0';

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

        for ($i = 0; $i < count($merge); $i += 2) {

            is_numeric($driverId);
            $weekNumber1++;

            $output .= '<tr>';
            $output .= '<td>day ';
            $output .= '' . $weekNumber1 . '';
            $output .= ' </td>';
            $output .= '<td>';
            $output .= $shuffled[$i];
            $output .= '</td>';
            $output .= '<td>';
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
     * Make an array with all that have 5 drivers and pass this to the trigger method
     */
    public function lop()
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
