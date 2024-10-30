<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kehadiran extends Model
{
    protected $guarded = ['id'];
    protected $table = 'kehadiran';
    protected $fillable = ['user_id', 'tanggal', 'keterangan', 'waktu_datang', 'waktu_pulang'];
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}