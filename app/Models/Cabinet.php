<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabinet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
    ];

    // A cabinet can have many samples
    public function samples()
    {
        return $this->hasMany(Sample::class);
    }
}