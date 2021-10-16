<?php

namespace App\Http\Controllers;

use App\Repositories\Admin\About\AboutRepository;
use App\Models\about;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $aboutRepository;

    public function __construct(
        AboutRepository $aboutRepository
    ) {
        $this->middleware('auth');
        $this->aboutRepository = $aboutRepository;
    }

    public function index()
    {
        return view('admin.index');
    }
}
