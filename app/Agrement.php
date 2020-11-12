<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agrement extends Model
{
    protected $table = 'agrements';
    protected $fillable=[
        'date',
        'active_date',
        'owner_name',
        'owner_address',
        'owner_nid',
        'guest_name',
        'gurdian_name',
        'guest_nid',
        'permanent_address',
        'seat_no',
        'validity_date',
        'bank_name',
        'bank_branch',
        'bank_account_name',
        'bank_account_no',
        'admission_fee',
        'security_deposit',
        'seat_rent',
        'roo_no',
        'floor',
        'hostel_address'
    ];
}
