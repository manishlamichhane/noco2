@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                </div> -->

                <!-- <ul class="nav nav-tabs">
                  <li class="active"><a href="#1a">Home</a></li>
                  <li><a href="#2a">My Garbage History</a></li>
                  <li><a href="#3a">Garbage Manager</a></li>
                  <!-- <li><a href="#">Menu 3</a></li> 
                </ul> -->

                <div id="exTab1" class="container">
                  <ul class="nav nav-pills">
                    <li class="active">
                      <a href="#1a" data-toggle="tab">Home</a>
                    </li>
                    <li><a href="#2a" data-toggle="tab">My Garbage History</a>
                    </li>
                    <li><a href="#3a" data-toggle="tab">Garbage Manager</a>
                    </li>
                  </ul>

                    <div class="tab-content clearfix">
                         <div class="tab-pane active" id="1a">
                            <h3>Content's background color is the same for the tab</h3>
                          </div>
                         <div class="tab-pane" id="2a">
                                <h3>Garbage History goes here!</h3>
                          </div>
                         <div class="tab-pane" id="3a">
                          <h3>Garbage CRUD goes here!</h3>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
