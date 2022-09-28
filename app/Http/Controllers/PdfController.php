<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\SaleReturn;
use Vsmoraes\Pdf\Pdf;

class PdfController extends Controller
{
    private $pdf;

    public function __construct(Pdf $pdf)
    {
        $this->pdf = $pdf;
    }

    public function helloWorld()
    {
        $html = view('pdfs.example')->render();

        return $this->pdf
            ->load($html)
            ->show();
    }

    public function test()
    {
        // dd('inside test');
        // event(new SaleReturn(7580));

        SaleReturn::dispatch(2500);
    }
}
