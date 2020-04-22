<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Model\Kecamatan;

class Sampel extends Model
{
    protected $table = 'sampel';
    protected $guarded = [];

    public $incrementing = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'kecamatan_id', 'id');
    }
}
