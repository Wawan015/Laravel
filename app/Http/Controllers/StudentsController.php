<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $nilaiMax = Student::max('nilai');
        $nilaiMin= Student::min('nilai');
        $avg = number_format(Student::average('nilai'),2);
        $students = Student::all();
        $frekuensi = Student::select('nilai', DB::raw('count(*) as frekuensi'))  
        ->groupBy('nilai')                              
        ->get();
        $totalskor = Student::sum('nilai');              
        $totalfrekuensi = Student::count('nilai');        

        return view('/students.index', ['students' => $students,
        'max' => $nilaiMax, 
        'min' => $nilaiMin, 
        'avgrg' => $avg,]);
        
        //return view('students.index', compact('students'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Student::create($request->all());
        return redirect('/students')->with('status', 'Data Berhasil Disimpan');
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
        $student=Student::find($id);
        return view('students.edit',compact('student'));

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
        //
        $student=Student::find($id);
        $student->nama = $request->nama;
        $student->nis = $request->nis;
        $student->nilai = $request->nilai;
        $student->save();
        //return $request;
        return redirect('/students')->with('status', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        //Student::destroy($id);
       // return view(Student);
    }
    public function delete($id)
    {
        $student=Student::find($id);
        $student->delete();
        return redirect('/students')->with('status', 'Data Berhasil Dihapus');
    }
    public function operations()
    {
       // return DB::table('students')->avg('nilai');
       // return DB::table('students')->min('nilai');
       // return DB::table('students')->max('nilai');
       $students =Student::all();
       $frekuensi = Student::select('nilai', DB::raw('count(*) as frekuensi'))  
       ->groupBy('nilai')                              
       ->get();
       $totalskor = Student::sum('nilai');              
       $totalfrekuensi = Student::count('nilai');        

       return view('/students.frekuensi', ['students' => $students,
       'frekuensi' => $frekuensi,
       'totalskor' => $totalskor,
       'totalfrekuensi' => $totalfrekuensi]);
    }

}
