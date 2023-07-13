<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\student;
use Illuminate\Http\Request;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = "DAFTAR DATA MAHASISWA 2023";
        $datas = student::all();
        return response()->json(["data"=>$datas]);
    }

    public function andex()
    {
        //
        $title = "DAFTAR DATA MAHASISWA 2023";
        $datas = student::paginate(10);
        return view('dstudent.studentImport',["title"=>$title,'datas'=>$datas]);
    }

    public function endex()
    {
        //
        $title = "DAFTAR DATA MAHASISWA 2023";
        $datas = student::paginate(10);
        return view('dstudent.studentImported',["title"=>$title,'datas'=>$datas]);
    }
    

    public function import() 
    {
        Excel::import(new UsersImport, 'users.xlsx');
        
        return redirect('/')->with('success', 'All good!');
    }

    public function storeimport(Request $request){
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
        $file = $request->file('file');
        $nama_file = rand().$file->getClientOriginalName();
        $file->move('file_siswa',$nama_file);
        Excel::import(new UsersImport, public_path('/file_siswa/'.$nama_file));
        return redirect('/student');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $valid = $request->validate([
            'nama' => 'required|unique:students|max:100',
            'student_nim ' => 'min:10',
            'student_JenisKelamin ' => 'min:5',
            'student_Semester ' => 'min:1',
            'student_Status ' => 'min:5',
            'student_IPK ' => 'min:2'
        ]);

        // return $request;

        $studentShow = student::create([
            'nama' => $request->nama,
            'nim' => $request->student_nim,
            'JenisKelamin' => $request->student_JenisKelamin,
            'Semester' => $request->student_Semester,
            'Status' => $request->student_Status,
            'IPK' => $request->student_IPK,
            'user_id' => auth()->user()->id
        ]);

        return response()->json(["data"=>$studentShow]);;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = student::find($id);
        $titlesingle = "View Data";
        return view('dstudent.single',['titlesingle'=>$titlesingle,'post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $route = "/student/update/$id";
        $flag = "modify";
        $post = student::find($id);
        return view('dstudent.studentForm',['route'=>$route,'flag'=>$flag,'post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = student::find($id);
        $post->nama = $request->nama;
        $post->nim = $request->student_nim;
        $post->JenisKelamin = $request->student_JenisKelamin;
        $post->Semester = $request->student_Semester;
        $post->Status = $request->student_Status;
        $post->IPK = $request->student_IPK;
        $post->update();
        return redirect('/student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = student::find($id);
        $post -> delete();
        return redirect('student');
    }
}
