<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    //
    protected $fillable = [
        'id_apply',
        'user_id',
        'event_id',
        'status',
        'alasan',
        'posisi',
    ];

    
    public function user()
{
    return $this->belongsTo(User::class);
}


}
