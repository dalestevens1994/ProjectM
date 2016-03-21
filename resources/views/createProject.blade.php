@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 panels">
            <div class="panel panel-default projdets">
                <H2>Project Details</H2>
                <label>Project Name</label>
                <input type="text">
                <label>Expected Start Date</label>
                <input type="text" class="datepicker">
                <label>Expected Completion Date</label>
                <input type="text" class="datepicker">
                <label>Project Specification</label>
                <textarea name="Specification"></textarea>

                <hr>

                <h2>Client</h2>
                <select id="selectClient">
                    <option selected>Select your client</option>
                    <option>Client 1</option>
                    <option>Client 2</option>
                    <option>Client 3</option>
                    <option>Client 4</option>
                </select>

                <form id="form" role="form" action="{{ url('clients.store') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <label>Client Name</label>
                <input type="text" name="name">
                <label>Primary Contact</label>
                <input type="text" name="primary_contact">
                <label>Secondary Contact</label>
                <input type="text" name="secondary_contact">
                <label>Company Number</label>
                <input type="text" name="company_number">
                <label>VAT No.</label>
                <input type="text" name="vat_no">
                    <input href="#" class="submitClient" type="submit" value="+ Add Client">
                </form>
                <input href="#" class="createClient" type="submit" value="+ Create Client">

                <hr>

                <H2>Objectives</H2>
                <label>Objective</label>
                <input type="text">
                <label>Description</label>
                <input type="text">
                <label>Expected Start Date</label>
                <input type="text" class="datepicker">
                <label>Expected Completion Date</label>
                <input type="text" class="datepicker">
                <input href="#" class="submit" type="submit" value="+ Objective">

                <hr>

                <input type="submit">

            </div>
        </div>
    </div>
</div>


@endsection