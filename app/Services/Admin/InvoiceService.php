<?php

namespace App\Services\Admin;

use App\Services\Service;
use Illuminate\Support\Facades\DB;
use App\Models\Invoice;
use App\Models\InvoiceDetails;
use App\Models\InvoiceExtras;
use Auth;

class InvoiceService extends Service
{
    public function InvoiceAll($request){
        try {
            $invoice = Invoice::orderBy('id', 'desc')->get();
            return $invoice;
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}