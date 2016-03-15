@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 panels">
            <div class="panel panel-default projects">
                <div class="panel-heading">Create a New Project</div>

                <div class="panel-body">
                    <div class="project">
                        <label>Project Name</label>
                        <input type="text">
                        <label>Project Description</label>
                        <input type="textbox">
                    </div>
                    <div class="client">
                        <select id="blue">
                            <option selected="selected">Selection List</option>
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                            <option>Option 4</option>
                            <option>Option 5</option>
                        </select>
                    </div>
                    <div class="accounts">

                    </div>
                    <div class="users">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection