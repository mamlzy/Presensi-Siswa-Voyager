<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Presensi;
use App\Exports\PresensiExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class PresensiController extends Controller
{
    public function exportXls()
    {
        return Excel::download(new PresensiExport, 'presensi.xlsx');
    }

    public function exportPdf()
    {
        $presensis = Presensi::all();
        $pdf = PDF::loadView('export.presensipdf', ['presensis' => $presensis]);
        return $pdf->download('presensi.pdf');
    }

    public function preview()
    {
        $presensis = Presensi::all();
        return view('export.presensipdf', compact('presensis'));
    }

}
