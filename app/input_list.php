<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class input_list extends Model
{
   protected $table = 'input_lists';
   protected $primaryKey = 'id';
   protected $input_name = 'input_name';
   protected $type_name = 'type_name';
   public $timestamps = true;
}

