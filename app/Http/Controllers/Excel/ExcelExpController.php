<?php

namespace App\Http\Controllers\Excel;

use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ExcelExpController extends Controller
{
    public function index(){
        return "Bismillah";
    }

    public function excel(){
        $excel = Excel::create('Filename', function($excel) {
            $excel->setTitle('Our new awesome title');
            $excel->setCreator('Maatwebsite')
                ->setCompany('Maatwebsite');
            $excel->setDescription('A demonstration to change the file properties');


            $excel->sheet('Sheet 1', function ($sheet) {
                $sheet->fromArray(array(
                    array('data1', 'data2'),
                    array('data3', 'data4')
                ));
            });

        });
        $excel->download('xlsx');
    }
}
