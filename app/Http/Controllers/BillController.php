<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LocationVelo;
use App\Models\Bill;
use App\Models\Bike;



class BillController extends Controller
{
    public function show(Bill $bill)
    {
        $bill = Bill::find($bill->id);
        $location = LocationVelo::find($bill->location_id);
        return view('FrontEnd.locationvelo.stripe',compact("bill","location"));
    }
    //
    public function store(LocationVelo $location)
    {
        $bike = Bike::find($location->bike_id);
        $bill= Bill::create([
            "location_id"  => $location->id,
            "amount"  => $bike->prix * $location->duration,
            "Status"  => "unpaid",
        ]);
        return redirect()->route('bill.show',['bill' => $bill->id]);
    }
}