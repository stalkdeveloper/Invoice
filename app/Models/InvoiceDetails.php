<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvoiceDetails extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'invoice_details';

    protected $primarykey = "id";
    protected $foreignkey = [
        "invoice_id",
    ];

    protected $fillable = [
        'invoice_id',
        'item_name',
        'description',
        'gst',
        'quantity',
        'rate',
        'amount',
        'igst',
        'total',
        'thumbnail'
    ];
}
