@extends('layouts.app')

@section('content')

<h1>PPP</h3>

{!! Form::open(['action'=>'PostController@get_input_list','method' => 'post']) !!}
   <div class="row">
    <div class="col-lg-4 col-md-12  col-sm-12">
     <div class="form-group">
        <label>Input name *</label>
        <input type="text" name="input_name" class="form-control border-input" placeholder="Your name" value="" required>
      </div>
     
      <div class="row">
        <div class="col-md-7">
       
      <div class="form-group">
        <label>Type of Business *</label>
        <select name="type" class="form-control border-input" required>
          <option value="">choose type</option>
          <?php 
			foreach($type as $t){
				echo  '<option value="'.$t["id"].'">'.$t["type_name"].'</option>';
			}
		  ?>
        </select>
      </div>
      
      
    </div>
   <button type="submit" id="submit" class="btn btn-success btn-fill btn-wd">Save</button>
  </div>
  {!! Form::close() !!}
@endsection

