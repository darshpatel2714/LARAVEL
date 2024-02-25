<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;
use App\Models\donate;

class pdfcontroller extends Controller
{
    public function pdf_fun()

    {
        $allImages=donate::all();
        $myData=compact('allImages');
        $pdf = PDF::loadView('pdf',['myData'=>$myData]);
        return  $pdf->stream();
        
    }
}
