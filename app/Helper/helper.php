<?php
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;


if (!function_exists('FileUploadOnServer')) {
    function FileUploadOnServer($file, $imageFolder)
    {
        try {
                $path = '';
                if($file){
                $filename = $file->getClientOriginalName();
                $nameWithoutExtension = pathinfo($filename, PATHINFO_FILENAME);
                $extension = $file->getClientOriginalExtension();
                $newFilename = $nameWithoutExtension . '.' . $extension;
                $dir = public_path("storage/{$imageFolder}");
                $file->move($dir, $newFilename);
                $path = url('/') . '/storage/' . $imageFolder . '/' . $newFilename;
            }

            return $path;
        } catch (\Throwable $th) {
            return 'Error: ' . $th->getMessage();
        }
    }
}

/* For Test */
if (!function_exists('custom_debug')) {
    function custom_debug($data, $method = 'print_r') {
        try {
            switch ($method) {
                case 'print_r':
                    echo '<pre>';
                    print_r($data);
                    echo '</pre>';
                    break;
                case 'dd':
                    dd($data);
                    break;
                case 'log':
                    \Log::info($data);
                    break;
                default:
                    echo '<pre>';
                    print_r($data);
                    echo '</pre>';
                    break;
            }
        } catch (\Exception $e) {
            \Log::error($e->getMessage()." ".$e->getFile()." ".$e->getLine());
        }
    }
}

if (!function_exists('getCurrentDate')) {
    function getCurrentDate()
    {
        $currentDateTime = Carbon::now();
        $currentDateTimeFormatted = $currentDateTime->format('d/m/Y');
        return $currentDateTimeFormatted;
    }
}
