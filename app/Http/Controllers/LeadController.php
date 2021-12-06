<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller {

    public function index() {
        return view( 'leads.index', [
            'leads' => Lead::latest()->paginate( 10 ),
        ] );
    }

    public function store( Request $request ) {
        $request->validate( [
            'firstName'   => 'bail|required|max:255',
            'lastName'    => 'bail|required|max:255',
            'email'       => 'bail|required|email|unique:leads,email|max:255',
            'phoneNumber' => 'bail|required|string|min:8|max:11',
        ] );

        $lead               = new Lead();
        $lead->first_name   = $request['firstName'];
        $lead->last_name    = $request['lastName'];
        $lead->email        = $request['email'];
        $lead->phone_number = $request['phoneNumber'];
        $lead->save();

        return response()->json( [ 'success' => 'Lead added successfully!' ] );
    }
}
