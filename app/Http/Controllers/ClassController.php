<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassController extends Controller
{
    public $classes;
    public $name = "Juan dela Cruz";
    public $enrolled = true;

    public function __construct()
    {
        $this->classes = [
            (object) ["id" => 1, "subject" => "Advanced Database Systems", "professor" => "Mel Miranda", "units" => 3],
            (object) ["id" => 2, "subject" => "Human Computer Interaction", "professor" => "Mel Miranda", "units" => 3],
            (object) ["id" => 3, "subject" => "System Analysis and Design", "professor" => "Noreen Miranda", "units" => 3]
        ];
    }

    public function index()
    {
        return view('classes', [
            'name' => $this->name, 
            'enrolled' => $this->enrolled, 
            'classes' => $this->classes 
        ]);
    }

    public function show($id)
{
    $result = null;
    foreach ($this->classes as $class) {
        if ($id == $class->id) {
            $result = $class;
            break;
        }
    }

    if (!$result) {
        abort(404, 'Class not found');
    }

    return view('class', [
        'class' => $result,
        'name' => $this->name, // Add name
        'enrolled' => $this->enrolled, // Add enrolled status
        'classes' => $this->classes // Add list of classes (if needed)
    ]);
}

}
