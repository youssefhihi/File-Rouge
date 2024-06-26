<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Requests\ReviewRequest;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReviewRequest $request)
    {
        $data = $request->validated();
        $data['client_id'] = Auth::user()->client->id;
        $reservationExist = Reservation::where('client_id',$data['client_id'] )->where('book_id',$data['book_id'])->where('is_returned',true)->exists();
        $rateExist = Review::where('client_id',$data['client_id'] )->where('book_id',$data['book_id'])->exists();
        if(!$reservationExist )
        {
            return redirect()->back()->with('error','You should reserve and read this book to rate ');
        }
        elseif($rateExist){
            return redirect()->back()->with('error','already rate');
        }else{
            Review::create($data);
            return redirect()->back()->with('success','Your review has been submitted Successfully,');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReviewRequest $request, Review $review)
    {
        try{
        $review->update(['starsCount' => $request->starsCount]);
        return redirect()->back()->with('success','Your review has been submitted Successfully,');
        } catch (\Exception $e){
            dd($e->getMessage());
        return redirect()->back()->with("error", "Error: " . $e->getMessage());
        
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        //
    }
}
