<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Admin\InvoiceService;
use App\Validators\Admin\InvoiceValidator;


class InvoiceController extends Controller
{
    protected $InvoiceService;

    public function __construct(InvoiceService $InvoiceService)
    {
        $this->InvoiceService = $InvoiceService;
    }

    public function index(Request $request){
        try {
            $data = $this->InvoiceService->InvoiceAll($request);
            return view('invoice.index');
            // return $data;
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function create(Request $request){
        try {
            return view('invoice.create-invoice');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    public function store(Request $request){
        try {
            $input = $request->all();
            $invoiceValidator = new InvoiceValidator('add');
            
            if (!$invoiceValidator->with($input)->passes()) {
                $customMessages = $invoiceValidator->getCustomMessages();
                $validationErrors = $invoiceValidator->getValidationErrors();
                foreach ($validationErrors as $message) {
                    toastr()->error($message);
                }
                foreach ($customMessages as $field => $message) {
                    toastr()->error($message);
                }
            
                return back()->withErrors($invoiceValidator->getValidator())->withInput();
            }            

            $store = $this->InvoiceService->invoiceStore($input);
            if($store){
                toastr()->success('Successfully, Invoice Created..!!');
                return redirect()->back();
            }
                toastr()->error('Sorry, Unable to create..!!');
                return redirect()->back();

        }  catch (\Exception $e) {
            \Log::error($e->getMessage()." ".$e->getFile()." ".$e->getLine());
        }
    }

    public function show($id){
        try {
            
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function update(Request $request){
        try {
            
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function delete($request){
        try {
            
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

}
