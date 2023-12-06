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
            return $data;
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
            echo "<pre>";
            print_r($request);
            die;
        } catch (\Throwable $th) {
            //throw $th;
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
