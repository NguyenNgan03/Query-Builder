<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function update(Request $request){
        $data = [
            'name' => $request->name,
            'age' => $request->age,
            'location' => $request->location,
        ];
        $student = Student::first();
        $student->update($data);
        $student->save();
        return response()->json(['message' => 'Thành công', 'data' => $data], 200);
    }

    public function delete() {
        $student = Student::skip(25)->first();
        $student->delete();
        return response()->json(['message' => 'Thành công'], 200);
    }

    public function getAll() {
        $students = DB::table('students')
        ->where('location', 'Phnom-Penh')
        ->where('age', '>', 20)
        ->get();
        return response()->json(['message' => 'Thành công', 'data' => $students], 200);
    }
}
