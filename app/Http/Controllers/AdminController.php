<?php

namespace App\Http\Controllers;

use App\Repositories\Admin\About\AboutRepository;
use App\Http\Requests\Admin\About\storeAboutRequest;
use App\Models\about;

use App\Repositories\Admin\Education\EducationRepository;
use App\Http\Requests\Admin\Education\storeEducationRequest;
use App\Models\education;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class AdminController extends Controller
{
    protected $aboutRepository, $educationRepository;

    public function __construct(
        AboutRepository $aboutRepository,
        EducationRepository $educationRepository
    ) {
        $this->middleware('auth');
        $this->aboutRepository = $aboutRepository;
        $this->educationRepository = $educationRepository;
    }

    public function index()
    {
        return view('admin.index');
    }

    //================================ABOUT===========================
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
    //================================EDUCATION===========================
    public function education()
    {
        $education = education::all();
        return view('admin.education.index',compact('education'));
    }

    public function storeEducation(storeEducationRequest $request)
    {
        try{
            $about = $this->educationRepository->storeEducation($request);
            Alert::success('Store Education', 'Success');
            return redirect()->route('admin.education',compact('about'));
        }catch(Throwable $e){
            Alert::error('Error', $e);
            return redirect()->route('admin.education');
        }
    }
    public function updateEducation(storeEducationRequest $request,$id)
    {
        try{
            $about = $this->educationRepository->updateEducation($request,$id);
            Alert::success('Update Education', 'Success');
            return redirect()->route('admin.education',compact('about'));
        }catch(Throwable $e){
            Alert::error('Error', $e);
            return redirect()->route('admin.education');
        }
    }
    public function destroyEducation($id)
    {
        try{
            $about = $this->educationRepository->destroyEducation($id);
            Alert::success('Destroy Education', 'Success');
            return redirect()->route('admin.education');
        }catch(Throwable $e){
            Alert::error('Error', $e);
            return redirect()->route('admin.education');
        }
    }
}
