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
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function admin()
    {
        $company = Corp::count();
        $jobs = jobs::count();
        // $candidate = candidate::all()->count();
        return view('admin.dashboard', compact('company', 'jobs'));
    }

    public function company()
    {
        $i = 0;
        $i++;
        $corps = Corp::latest()->get();
        return view('admin.company', compact(['corps', 'i']));
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
