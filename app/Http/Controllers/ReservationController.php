<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;

class ReservationController extends Controller
{
    public function index(Request $request)
    {
        $param =[
            'userid'=>$request->innid,
            'innid'=>$request->userid
        ];
        return view('reservation.add',$param);
    }
    public function add(Request $request)
    {
         $reservation = new Reservation($request->all());
         $request->session()->put('reservation', $reservation);
         return view('reservation.add_confirm', compact('reservation'));
    }
    public function create(Request $request)
    {
        $inn = $request->session()->get('reservation');
        $inn->save();
        return view('reservation.add_done');
    }
}
