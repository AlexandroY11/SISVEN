<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    public $timestamps = false;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'number',
        'customer_id',
        'date',
        'paymode_id',
    ];

    /**
     * Get the customer that owns the invoice.
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * Get the paymode that owns the invoice.
     */
    public function paymode()
    {
        return $this->belongsTo(Paymode::class);
    }

    /**
     * Get the details for the invoice.
     */
    public function details()
    {
        return $this->hasMany(Detail::class);
    }
}
