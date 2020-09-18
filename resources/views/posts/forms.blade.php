<!DOCTYPE html>
<html>
<head>
    <title>Laravel - Dynamically Add or Remove input fields using JQuery</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<h3>My Form</h3>
<hr class="line">
<div class="form-group">
   <a class="btn btn-primary" href="./" role="button">Back</a>
 </div>
<?php
if( $input_lists != "" ){
	foreach ($input_lists as $list) {
	if($list["type_name"] != 'select'){
      echo '
            <div class="col-md-3">
              <div class="form-group">
                <label>'.$list["input_name"].'</label>
                 <input type="'.$list["type_name"].'" name="'.$list["input_name"].'" class="form-control border-input" placeholder="" value="" >
              </div>
            </div>';
          }
    else{
    echo '
            <div class="col-md-3">
              <div class="form-group">
                 <label>'.$list["input_name"].'</label>
                 <select name="select[]" class="form-control name_list">
                              <option value="">choose type</option>
                              
                 </select>
              </div>
            </div>';
    }
    }
}
?>
</body>
</html>
