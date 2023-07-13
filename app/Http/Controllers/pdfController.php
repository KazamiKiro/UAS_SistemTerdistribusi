<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

use PDF;

class pdfController extends Controller
{
    public function downloadPDF()
    {
        $students = student::all();
        $data = [
            'title' => 'DATA MAHASISWA',
            'date' => date('d/m/Y'),
            'nama' => $students,
            'nim' => $students,
            'JenisKelamin' => $students,
            'Semester' => $students,
            'Status' => $students,
            'IPK' => $students,
            'students' => $students
        ];

        $pdf = PDF::loadview('postspdf',$data);
        return $pdf->download('posts.pdf');
    }
}
