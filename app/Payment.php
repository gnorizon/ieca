<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $fillable = ['email', 'transaction_ref', 'amount', 'status_id', 'user_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function order() {

        return $this->hasOne(Order::class);
    }

    public function status() {
        return $this->belongsTo(Status::class);
    }
}
