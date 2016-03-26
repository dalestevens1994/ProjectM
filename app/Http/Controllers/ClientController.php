<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Session;
use App\Http\Requests;

// CRUD resource controller, Create Read Update Destroy

class ClientController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Store all the client records in the 'cilent' variable
        $client = Client::all();
        // Return the view containing all the client information from the database
        return view('clients.index')->with('client', $client);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the data - automatically generate a flash message and return to previous page - create method
        $this->validate($request, array(
            'name' => 'required|max:255',
            'primary_contact' => 'required|integer',
            'secondary_contact' => 'required|integer',
            'company_number' => 'required|integer',
            'vat_no' => 'required|integer'
        ));

        // Store the client in the database
        $client = new Client;

        $client->name = $request->name;
        $client->primary_contact = $request->primary_contact;
        $client->secondary_contact = $request->secondary_contact;
        $client->company_number = $request->company_number;
        $client->vat_no = $request->vat_no;

        $client->save();

        // Session that exists for a single request, flash means exist for one request.
        Session::flash('success', 'Client created successfully!');

        // Redirect the user
        return redirect()->route('clients.show', $client->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // store client information from database in the client variable by id
        $client = Client::find($id);
        // Return the 'show' view with the variable from above
        return view('clients.show')->with('client', $client);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Find the client in the database by id and store it in a variable
        $client = Client::find($id);
        // Return the 'edit' view passing the stored variable from above
        return view('clients.edit')->with('client', $client);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate the data
        $this->validate($request, array(
            'name' => 'required|max:255',
            'primary_contact' => 'required|integer',
            'secondary_contact' => 'required|integer',
            'company_number' => 'required|integer',
            'vat_no' => 'required|integer'
        ));

        // Save the data to the database
        $client = Client::find($id);

        $client->name = $request->input('name');
        $client->primary_contact = $request->input('primary_contact');
        $client->secondary_contact = $request->input('secondary_contact');
        $client->company_number = $request->input('company_number');
        $client->vat_no = $request->input('vat_no');

        $client->save();

        // Set flash data with success message
        Session::flash('success', 'Client updated successfully!');

        // Redirect the user back to the view page
        return redirect()->route('clients.show', $client->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();

        Session::flash('success', 'Client successfully deleted!');
        return redirect()->route('clients.index');
    }
}
