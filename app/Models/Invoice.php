<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'invoices';

    protected $primarykey = "id";
    protected $foreignkey = [
        "user_id",
    ];

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'invoice_number',
        'invoice_date',
        'due_date',
        'after_chalan_days',
        'logo',
        'total',
        'in_draft'
    ];
}
