<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about;
use App\Models\skills;
use App\Models\education;
use App\Models\experience;
use App\Models\portfolio;

class PortfolioController extends Controller
{
    public function index()
    {
        $about = about::firstOrFail();
        $skills = skills::all();
        $education = education::all();
        $experience = experience::latest()->get();
        $portfolio = portfolio::all();
        $projects = portfolio::count();

        return view('Homepage.index', compact(['about','skills',
        'education','experience','portfolio','projects']));
    }
}
