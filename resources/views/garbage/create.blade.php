@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <form class="form-horizontal">
                  <fieldset>

                  <!-- Form Name -->
                  <legend>Create Garbage:</legend>

                   <!-- Select Basic -->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">Garbage Categories</label>
                    <div class="col-md-4">
                      <select id="garbage-category" name="garbage_category" class="form-control">
                        <option value="0">Select categories</option>
                              @foreach($garbages as $cat)

                                <option value="{{ $cat['garbage_category_id'] }}"> {{ $cat['garbage_category_name'] }} </option>

                              @endforeach  
                      </select>
                    </div>
                  </div>  

                  <!-- Select Basic -->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">Garbage Types</label>
                    <div class="col-md-4">
                      <select id="garbage-category" name="garbage_type" class="form-control">
                         <option value="0">Select Types</option>
                      </select>
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Garbage Unit</label>  
                    <div class="col-md-4">
                    <input id="textinput" name="garbage_unit" type="text" placeholder="eg. 1 2 etc" class="form-control input-md" required="">
                      
                    </div>
                  </div>

                  <!-- Button -->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="singlebutton"></label>
                    <div class="col-md-4">
                      <button id="singlebutton" name="singlebutton" class="btn btn-primary">Create Garbage</button>
                    </div>
                  </div>

                  </fieldset>
                </form>

                
            </div>
        </div>
    </div>
</div>
@endsection
