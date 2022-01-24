<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){

        // con ::all() ottendo un array di tutta la tabella
        //$students = Student::all();

        // se voglio filtrare i dati devo mettere prima le condizioni e poi alla fine ->get()
        // ::where gestisce di defautl l'uguaglianza. Nel caso di un filtro differente insrirlo come secondo parametro
        //$students = Student::limit(10)->get();
        $students = Student::select('id','name','surname','registration_number')
            ->where('name', 'LIKE' ,'%mar%')
            ->limit(1)
            ->orderBy('surname','desc')
            ->get();

       // dump($students);

       // ->first() restituice un oggetto e non un array (collection di oggetti)
        $student = Student::select('id','name','surname','registration_number')
            ->where('name', 'LIKE' ,'%mar%')
            ->limit(10)
            ->orderBy('surname','desc')
            ->first();

       // dump($student);

       // ->find() restituice un oggetto e non un array ed è l'quivalente di:
       // SELECT * FORM students WHERE id = 794
        $student_find = Student::find(794);
       // dump($student_find);

        return view('students', compact('students','student', 'student_find'));

    }
}
