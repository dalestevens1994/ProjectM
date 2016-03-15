@extends('layouts.base')

@section('content')

    <div class="container">
        <div class="row">
                <div class="col-md-1 col-md-offset-1 elements">
                    <input href="#" class="submit" type="submit" value="Button">
                </div>
                <div class="col-md-1 col-md-offset-1 inputs">
                    <input type="text" placeholder="Type some text">
                </div>
                <div class="col-md-1 col-md-offset-1">
                    <progress value="25" max="100"></progress>
                    <progress value="50" max="100"></progress>
                    <progress value="75" max="100"></progress>
                </div>
            </div>
            <div class="row">
            <div class="col-md-2 col-md-offset-1">
                <div class="square">
                    <input type="checkbox" value="None" id="square" name="check" checked />
                    <label for="square"></label>
                </div>
            </div>
            <div class="col-md-1 col-md-offset-1">
                <select id="blue">
                        <option selected="selected">Selection List</option>
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                        <option>Option 4</option>
                        <option>Option 5</option>
                </select>
            </div>
            <div class="col-md-5 col-md-offset-2">
                <ul class="pagination">
                    <li><a href="#">1</a></li>
                    <li><a class="active" href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                </ul>
            </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="scrollbar" id="style-5">
                            <div class="force-overflow"></div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

