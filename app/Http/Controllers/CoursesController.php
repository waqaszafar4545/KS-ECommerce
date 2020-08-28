<?php

namespace App\Http\Controllers;

use App\Classes;
use App\Course;
use App\Module;
use App\School;
use App\Subject;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Throwable;

class CoursesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the vidoes list.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function showCreate()
    {
        // $videos =  Video::where('module_id', null)
        //     ->where('status', true)
        //     ->get();

        // $schools = School::where('status', true)->get();
        // $subjects = Subject::where('status', true)->get();
        // $classes = Classes::where('status', true)->get();

        return view('createCourse', [
            // 'schools' => $schools,
            // 'classes' => $classes->groupBy('grade.name'),
            // 'subjects' => $subjects,
            // 'videos' => $videos
        ]);
    }
}
