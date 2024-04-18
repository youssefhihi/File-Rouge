<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Client;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Mail\ReturnReminderEmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class EmpruntsController extends Controller
{
    public function emprunts(){
        $reservations = Reservation::where('is_returned', false)->where('is_taken', true)->get();

        return view('admin.emprunts',compact('reservations'));
    }


    public function TodaysReservation()
    {

        $currentDate = Carbon::today();
        $tomorrowDate = Carbon::tomorrow();      
        $reservations = Reservation::where('is_taken',false)->whereDate('startDate', $currentDate)->orWhereDate('startDate', $tomorrowDate)->get();
        $today = $currentDate->format('Y-m-d');
        return view("admin.TodaysReservation" ,compact("reservations","today"));
    }

    public function returnBook(Reservation $reservation){

         
        Mail::to(Auth::user()->email)->send(new ReturnReminderEmail($reservation->id));
        

    }
}