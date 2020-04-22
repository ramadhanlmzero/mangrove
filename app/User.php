<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Model\Kecamatan;
use App\Model\Mangrove;
use App\Model\Sampel;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'nama', 'email', 'password', 'hak_akses'
    ];

    public $incrementing = false;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'id', 'created_by');
    }

    public function mangrove()
    {
        return $this->belongsTo(Mangrove::class, 'id', 'created_by');
    }

    public function sampel()
    {
        return $this->belongsTo(Sampel::class, 'id', 'created_by');
    }
}
