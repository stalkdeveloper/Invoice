<?php

namespace App\Services\Admin;

use App\Services\Service;
use Illuminate\Support\Facades\DB;
use App\Models\Invoice;
use App\Models\InvoiceDetails;
use App\Models\InvoiceExtras;
use Carbon\Carbon;
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

    public function invoiceStore($request){
        try {

            $invoiceDate = Carbon::createFromFormat('d/m/Y', $request['invoice_date'])->format('Y-m-d');
            $dueDate = Carbon::createFromFormat('d/m/Y', $request['invoice_due_date'])->format('Y-m-d');

            $logo;
            if($request['logo']){
                $imageFolder = 'Logo';
                $logo = FileUploadOnServer($request['logo'], $imageFolder);
            }

            $in_draft = '';
            if($request['invoiceFormSubmit'] == 'Save & Continue'){
                $in_draft = '1';
            }else{
                $in_draft = '0';
            }
            $invoice = new Invoice();
            $invoice->name = $request['invoice'];
            $invoice->description = $request['subtitle'];
            $invoice->invoice_number = $request['invoice_number'];
            $invoice->invoice_date = $invoiceDate;
            $invoice->due_date = $dueDate;
            $invoice->after_chalan_days = $request['after_chalan_days'] ?? null;
            $invoice->logo = $logo;
            $invoice->in_draft = $in_draft;
            $invoice->total  =  $request['total-item-value'];

            if($invoice->save()){
                if($request['item_name']){
                    foreach($request['item_name'] as $value){

                        $thumbnail = '';
                        if(isset($value['thumbnail'])){
                            $imageFolder = 'Thumbnail';
                            $thumbnail = FileUploadOnServer($request['thumbnail'], $imageFolder);
                        }

                        $invoiceDetails = new InvoiceDetails();
                        $invoiceDetails->invoice_id  =  $invoice->id;
                        $invoiceDetails->item_name  =  $value['item_name'];
                        $invoiceDetails->description  =  $value['description'];
                        $invoiceDetails->gst  =  $value['gst_rate'];
                        $invoiceDetails->quantity  =  $value['quantity'];
                        $invoiceDetails->rate  =  $value['rate'];
                        $invoiceDetails->amount  =  $value['amount'];
                        $invoiceDetails->igst  =  $value['igst_rate'];
                        $invoiceDetails->total  =  $value['total_amount_items'];
                        $invoiceDetails->thumbnail =  $thumbnail;

                        $invoiceDetails->save();
                    }
                }

                if(isset($request['extra_column'])){
                    foreach($request['extra_column'] as $value){
                        $invoiceExtras = new InvoiceExtras();
                        $invoiceExtras->invoice_id = $invoice->id;
                        $invoiceExtras->key = $value['extra_column_name'];
                        $invoiceExtras->value = $value['extra_column_value'];

                        $invoiceExtras->save();
                    }
                }
                return true;
            }
                return false;
        } catch (\Exception $e) {
            \Log::error($e->getMessage()." ".$e->getFile()." ".$e->getLine());
        }
    }
}