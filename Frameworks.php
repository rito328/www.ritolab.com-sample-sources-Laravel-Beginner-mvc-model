<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Frameworks extends Model
{
  protected $table = 'frameworks';

  protected $guarded = array('id');

  public $timestamps = false;

  public function getData($type=null)
  {
    $query = DB::table($this->table);

    if($type != null) $query->where('type', $type);

    $data = $query->get();

    return $data;
  }
}
