@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                  <!-- Form Name -->
                  <legend>Delete Garbage:</legend>

                   <!-- Select Basic -->
                
                              

                              <table class="table table-bordered table-hover table-condensed table-responsive">
                                <thead>
                                  <tr>
                                    <th>
                                      S.N.
                                    </th>
                                    <th>
                                      Garbage Type
                                    </th>
                                    <th>
                                      Units
                                    </th>
                                    <th>
                                      Created At
                                    </th>
                                    <th>
                                      Action
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                  
                                @foreach($garbages as $key=>$val)

                                  <tr>
                                    <td>
                                      {{ $key+1 }}
                                    </td>
                                    <td>
                                      {{ $val->garbage_type_name }}
                                    </td>
                                    <td>
                                      {{ $val->garbage_unit }}
                                    </td>
                                    <td>
                                      {{ $val->created_at }}
                                    </td>
                                    <td>
                                      <a href="/garbage/removeGarbage/{{$val->user_garbage_id}}">Delete</a>
                                    </td>
                                  </tr>
                                

                                @endforeach  

                                  
                                
                                </tbody>
                              </table>
                      

                
            </div>
        </div>
    </div>
</div>

@endsection

