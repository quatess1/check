<?php

namespace App\Http\Controllers\Admin;

use App\Instructor;
use App\Room;
use Spatie\Searchable\Search;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;
use App\Student;
use App\Blog;
use Illuminate\Support\Facades\Gate;
use Session;
use Image;
use Storage;

class FrontendController extends Controller
{

    /**
     * Show the application dashboard.
     * Working on th search bar.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.index');
    }

}
