<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvoiceExtras extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'invoice_extras';

    protected $primarykey = "id";
    protected $foreignkey = [
        "invoice_id",
    ];

    protected $fillable = [
        'invoice_id',
        'key',
        'value',
    ];
}
