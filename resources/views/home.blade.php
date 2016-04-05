@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                @if (session('home_message'))
                  <div class="panel-body">
                        <div class="alert alert-success">
                            {{ session('home_message') }}
                        </div>
                  </div>      
                @endif
                <div id="exTab1" class="container">
                  <ul class="nav nav-pills">
                    <!-- <li class="active">
                      <a href="#1a" data-toggle="tab">Home</a>
                    </li> -->
                    <li class="active">
                        <a href="#2a" data-toggle="tab">Analytics</a>
                    </li>
                    <li>
                        <a href="#3a" data-toggle="tab">Garbage Manager</a>
                    </li>
                    <li>
                        <a href="#4a" data-toggle="tab">My Garbage History</a>
                    </li>
                  </ul>

                    <div class="tab-content clearfix">
                         <!-- <div class="tab-pane active" id="1a">
                            <h3>Content's background color is the same for the tab</h3>
                          </div> -->
                         <div class="tab-pane active" id="2a">
                                <h3>Garbage Analytics goes here!</h3>
                          </div>
                         <div class="tab-pane" id="3a">
                                <h3>Garbage CRUD goes here!</h3>
                                <br><br>
                                <a href="/garbage/createGarbage/">Create Garbage</a>
                                <br><br>
                                <a href="/garbage/editGarbage/">Edit Garbage</a>
                                <br><br>
                                <a href="/garbage/deleteGarbage/">Delete Garbage</a>
                         </div>

                         <div class="tab-pane" id="4a">
                                
                                <h3>Garbage History goes here!</h3>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
