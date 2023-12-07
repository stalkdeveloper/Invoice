<?php
namespace App\Validators\Admin;

use App\Validators\Validator;

class InvoiceValidator extends Validator
{
    /**
     * Rules for User registration
     *
     * @var array
     */

    public function __construct($validationFor = 'add')
    {
        $commonRules = [
            'invoice' =>'required',
            'subtitle' => 'nullable|string',
            'invoice_number'=> 'required',
            'invoice_date' => 'required',
            'invoice_due_date' => 'required',
            'after_chalan_days' => 'nullable|numeric',
            'logo' => 'required',
            'item_name' => 'required|array',
            'item_name.*.item_name' => 'required|string',
            'item_name.*.gst_rate' => 'required|numeric',
            'item_name.*.quantity' => 'required|numeric',
            'item_name.*.rate' => 'required',
            'item_name.*.amount' => 'required',
            'item_name.*.igst_rate' => 'required|numeric',
            'item_name.*.total_amount_items' => 'required',
            'item_name.*.description' => 'nullable|string',
            'item_name.*.thumbnail' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
             /*  */
             'extra_column.*.extra_column_name' => 'nullable',
             'extra_column.*.extra_column_value' => 'nullable',
        ];
    
        if ($validationFor === 'update') {
            $commonRules = [
                'invoice' =>'required',
                'subtitle' => 'required',
                'invoice_number'=> 'required',
                'invoice_date' => 'required|',
                'invoice_due_date' => 'required',
                'after_chalan_days' => 'nullable|numeric',
                'logo' => 'nullable',
                'item_name' => 'required|array',
                'item_name.*.item_name' => 'required|string',
                'item_name.*.gst_rate' => 'required|numeric',
                'item_name.*.quantity' => 'required|numeric',
                'item_name.*.rate' => 'required',
                'item_name.*.amount' => 'required',
                'item_name.*.igst_rate' => 'required|numeric',
                'item_name.*.total_amount_items' => 'required',
                'item_name.*.description' => 'nullable|string',
                'item_name.*.thumbnail' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',

                /*  */
                'extra_column.*.extra_column_name' => 'nullable',
                'extra_column.*.extra_column_value' => 'nullable',
            ];
        }

        $customMessages = [
            'item_name.*.item_name.required' => 'The item name for an item is required.',
            'item_name.*.gst_rate.required' => 'The gst rate for an item is required.',
            'item_name.*.quantity.required' => 'The quantity for an item is required.',
            'item_name.*.rate.required' => 'The rate for an item is required.',
            'item_name.*.amount.required' => 'The amount for an item is required.',
            'item_name.*.igst_rate.required' => 'The IGST rate for an item is required.',
            'item_name.*.total_amount_items.required' => 'The total amount for an item is required.',
            // 'item_name.*.thumbnail.image' => 'The item thumbnail should be an image.',

            /* For Extras Column name */
            'extra_column.*.extra_column_name' => 'If the extra column name use then name should be as per value.',
            'extra_column.*.extra_column_value' => 'If the extra column value use then value should be as per name.',
        ];
    
        $this->rules = $commonRules;
        $this->customMessages = $customMessages;

    }
    public function getCustomMessages()
    {
        return $this->customMessages ?? [];
    }

    public function getValidationErrors()
    {
        return $this->validationErrors ?? [];
    }


} 