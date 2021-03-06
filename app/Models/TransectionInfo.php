<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransectionInfo extends Model
{
    use HasFactory;

    public function getCustomerName(){
        return $this->hasOne(Customer::class, 'id', 'cus_id');
    }
}
