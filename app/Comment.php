<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['nama','artikel_id','user_id'];

    public $timestamps = true;

    public function artikel()
    {
        return $this->belongsTo('App/Artikel','artikel_id');
    }

    public function user()
    {
        return $this->belongsTo('App/user','user_id');
    }
}
