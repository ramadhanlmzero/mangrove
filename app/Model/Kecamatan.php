<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Kecamatan extends Model
{
    protected $table = 'kecamatan';
    protected $guarded = [];

    public $incrementing = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
