<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
 protected $fillable = ['nama','kategori_id'];

 public $timestamps = true;

 public function Kategori()
 {
     return $this->BelongsTo('App/Kategori','kategori_id');
 }
}
