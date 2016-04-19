<?php

namespace App\Http\Controllers;

use App\link_project_user;
use Illuminate\Http\Request;
use App\Project;
use App\Client;
use App\Objective;
use App\User;
use App\Task;
use Session;
use App\Http\Requests;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project = Project::all();
        return view('projects.index')->with('project', $project);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = Client::lists('name', 'id');
        $user = User::lists('name', 'id');

        $project['clients'] = $client;
        $project['users'] = $user;

        return view('projects.create')->with('project', $project);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the data
        $this->validate($request, array(
            'project_name' => 'required|max:255',
            'expected_start_date' => 'required|date',
            'expected_end_date' => 'required|date',
            'project_desc' => 'required|max:255',
            'client_id' => 'required'
        ));

        // Store the project/objectives in the database
        $project = new Project;
        $project->project_name = $request->project_name;
        $project->expected_start_date = $request->expected_start_date;
        $project->expected_end_date = $request->expected_end_date;
        $project->project_desc = $request->project_desc;
        $project->client_id = $request->client_id;
        $project->save();

        foreach($request->user_id as $user){
            $link_project_user = new link_project_user;
            $link_project_user->user_id = $user;
            $link_project_user->project_id = $project->id;
            $link_project_user->save();
        }


        // Session that exists for a single request, flash means exist for one request.
        Session::flash('success', 'Project created successfully!');

        // Redirect the user
        return redirect()->route('projects.show', $project->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);

        // completed_tasks / total_tasks  * 100
        $project['progress'] = 80;

        return view('projects.show')->with('project', $project);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        return view('projects.edit')->with('project', $project);
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
            'project_name' => 'required|max:255',
            'project_desc' => 'required|max:255',
            'expected_start_date' => 'required|date',
            'expected_end_date' => 'required|date',
            'actual_start_date' => 'required|date',
            'actual_end_date' => 'required|date',
            'client_id' => 'required',
            'user_id' => 'required'
        ));

        // Save the data to the database
        $project = Client::find($id);

        $project->project_name = $request->input('project_name');
        $project->project_desc = $request->input('project_desc');
        $project->expected_start_date = $request->input('expected_start_date');
        $project->expected_end_date = $request->input('expected_end_date');
        $project->actual_start_date = $request->input('actual_start_date');
        $project->actual_end_date = $request->input('actual_end_date');
        $project->client_id = $request->input('client_id');
        $project->user_id = $request->input('user_id');

        $project->save();

        // Set flash data with success message
        Session::flash('success', 'Project updated successfully!');

        // Redirect the user back to the view page
        return redirect()->route('projects.show', $project->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();

        Session::flash('success', 'Project successfully deleted!');
        return redirect()->route('projects.index');
    }
}
