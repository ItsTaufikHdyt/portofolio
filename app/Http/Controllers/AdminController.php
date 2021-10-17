<?php

namespace App\Http\Controllers;

use App\Repositories\Admin\About\AboutRepository;
use App\Http\Requests\Admin\About\storeAboutRequest;
use App\Models\about;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


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

    //-----------------------About-------------------
    public function about()
    {
        $about = About::all();
        return view('admin.about.index',compact('about'));
    }

    public function storeAbout(storeAboutRequest $request)
    {
        try{
            $about = $this->aboutRepository->storeAbout($request);
            Alert::success('Store About', 'Success');
            return redirect()->route('admin.about',compact('about'));
        }catch(Throwable $e){
            Alert::error('Error', $e);
            return redirect()->route('admin.about');
        }
    }
    public function updateAbout(storeAboutRequest $request,$id)
    {
        try{
            $about = $this->aboutRepository->updateAbout($request,$id);
            Alert::success('Update About', 'Success');
            return redirect()->route('admin.about',compact('about'));
        }catch(Throwable $e){
            Alert::error('Error', $e);
            return redirect()->route('admin.about');
        }
    }
    public function destroyAbout($id)
    {
        try{
            $about = $this->aboutRepository->destroyAbout($id);
            Alert::success('Destroy About', 'Success');
            return redirect()->route('admin.about');
        }catch(Throwable $e){
            Alert::error('Error', $e);
            return redirect()->route('admin.about');
        }
    }
}
