@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                @if (session('home_message'))
                  
                        <div class="alert alert-success">
                            {{ session('home_message') }}
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
                                                             
                            <!--Load the AJAX API-->
                          <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                          <script type="text/javascript">

                            // Load the Visualization API and the corechart package.
                            google.charts.load('current', {'packages':['corechart']});

                            // Set a callback to run when the Google Visualization API is loaded.
                            google.charts.setOnLoadCallback(drawChart);

                            // Callback that creates and populates a data table,
                            // instantiates the pie chart, passes in the data and
                            // draws it.
                            function drawChart() {

                              // Create the data table.
                              var data = new google.visualization.DataTable();
                              data.addColumn('string', 'Garbage');
                              data.addColumn('number', 'Unit');
                              data.addRows([
                                
                                <?php foreach($defaultGarbageHistory as $history):

                                  echo "['$history->garbage_type_name',$history->garbage_unit],";

                                endforeach; ?>
                              ]);

                              // Set chart options
                              var options = {'title':'My Garbage History: 7 days',
                                             'width':400,
                                             'height':300};

                              // Instantiate and draw our chart, passing in some options.
                              var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
                              chart.draw(data, options);
                            }
                          </script>
                           <div id="chart_div"></div>

                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
