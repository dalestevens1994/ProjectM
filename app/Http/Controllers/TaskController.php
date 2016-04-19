<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Task;
use View;
use Session;
use App\Project;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $task = Task::all();
        return view('tasks.index')->with('task', $task);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $project = Project::find($id);
        return view::make('projects.tasks.create')->with('project', $project);
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
            'task_name' => 'required',
            'task_desc' => 'required',
            'expected_start_date' => 'required|date',
            'expected_end_date' => 'required|date'
        ));

        // Store the project/objectives in the database
        $task = new Task;
        $task->task_name = $request->task_name;
        $task->task_desc = $request->task_desc;
        $task->expected_start_date = $request->expected_start_date;
        $task->expected_end_date = $request->expected_end_date;
        $task->project_id = $request->project_id;
        $task->save();

//        foreach($request->user_id as $user){
//            $link_project_user = new link_project_user;
//            $link_project_user->user_id = $user;
//            $link_project_user->project_id = $project->id;
//            $link_project_user->save();
//        }

        // Session that exists for a single request, flash means exist for one request.
        Session::flash('success', 'Task created successfully!');


        // Redirect the user
        return redirect()->route('tasks.show', $task->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::find($id);
        $project = Project::find($id);
        return view('tasks.show')->with('task', $task)->with('project', $project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.edit')->with('task', $task);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
