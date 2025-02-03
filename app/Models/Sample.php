<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sample extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'customer_id',
        'factory_id',
        'cabinet_id',
    ];

    // A sample belongs to a customer
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // A sample belongs to a factory
    public function factory()
    {
        return $this->belongsTo(Factory::class);
    }

    // A sample belongs to a cabinet
    public function cabinet()
    {
        return $this->belongsTo(Cabinet::class);
    }
}