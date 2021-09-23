<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use illuminate\Support\Str;
use App\Models\Corp;
use App\Models\Jobs;
use App\Models\Candidate;
use Alert;

class AdminController extends Controller
{
    public function admin()
    {
        $corp = Corp::count();
        $jobs = Jobs::count();
        return view('admin.dashboard',compact('corp', 'jobs'));
    }

    public function dashbiard()
    {
        $corp = Corp::count();
        $jobs = Jobs::count();
        return view('admin.dashboard',compact('corp', 'jobs'));
    }

    public function company()
    {
        $i = 0;
        $i++;
        $corp = Corp::latest()->get();
        return view('admin.company', compact(['corp', 'i']));
    }

    public function jobs()
    {
        $i = 0;
        $i++;
        $jobs = Jobs::latest()->get();
        return view('admin.jobs', compact(['jobs', 'i']));
    }

    public function candidate()
    {
        $i = 0;
        $i++;
        $candidate = candidate::latest()->get();
        return view('admin.candidate', compact(['candidate', 'i']));
    }

}
