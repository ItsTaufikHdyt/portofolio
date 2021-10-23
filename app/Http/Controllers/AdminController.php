<?php

namespace App\Http\Controllers;

use App\Repositories\Admin\About\AboutRepository;
use App\Http\Requests\Admin\About\storeAboutRequest;
use App\Models\about;

use App\Repositories\Admin\Education\EducationRepository;
use App\Http\Requests\Admin\Education\storeEducationRequest;
use App\Models\education;

use App\Repositories\Admin\Experience\ExperienceRepository;
use App\Http\Requests\Admin\Experience\storeExperienceRequest;
use App\Models\experience;

use App\Repositories\Admin\Tags\TagsRepository;
use App\Http\Requests\Admin\Tags\storeTagsRequest;
use App\Models\tags;

use App\Repositories\Admin\Skills\SkillsRepository;
use App\Http\Requests\Admin\Skills\storeSkillsRequest;
use App\Models\skills;

use App\Repositories\Admin\Portfolio\PortfolioRepository;
use App\Http\Requests\Admin\Portfolio\storePortfolioRequest;
use App\Models\portfolio;
use App\Models\portfolio_tags;

use RealRashid\SweetAlert\Facades\Alert;


class AdminController extends Controller
{
    protected $aboutRepository, $educationRepository, 
    $experienceRepository, $tagsRepository, $skillsRepository, $portfolio;

    public function __construct(
        AboutRepository $aboutRepository,
        EducationRepository $educationRepository,
        ExperienceRepository $experienceRepository,
        TagsRepository $tagsRepository,
        SkillsRepository $skillsRepository,
        PortfolioRepository $portfolioRepository
    ) {
        $this->middleware('auth');
        $this->aboutRepository = $aboutRepository;
        $this->educationRepository = $educationRepository;
        $this->experienceRepository = $experienceRepository;
        $this->tagsRepository = $tagsRepository;
        $this->skillsRepository = $skillsRepository;
        $this->portfolioRepository = $portfolioRepository;
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

    //================================EXPERIENCE===========================
    public function experience()
    {
        $experience = experience::all();
        return view('admin.experience.index',compact('experience'));
    }

    public function storeExperience(storeExperienceRequest $request)
    {
        try{
            $about = $this->experienceRepository->storeExperience($request);
            Alert::success('Store Experience', 'Success');
            return redirect()->route('admin.experience',compact('about'));
        }catch(Throwable $e){
            Alert::error('Error', $e);
            return redirect()->route('admin.experience');
        }
    }
    public function updateExperience(storeExperienceRequest $request,$id)
    {
        try{
            $about = $this->experienceRepository->updateExperience($request,$id);
            Alert::success('Update Experience', 'Success');
            return redirect()->route('admin.experience',compact('about'));
        }catch(Throwable $e){
            Alert::error('Error', $e);
            return redirect()->route('admin.experience');
        }
    }
    public function destroyExperience($id)
    {
        try{
            $about = $this->experienceRepository->destroyExperience($id);
            Alert::success('Destroy Experience', 'Success');
            return redirect()->route('admin.experience');
        }catch(Throwable $e){
            Alert::error('Error', $e);
            return redirect()->route('admin.experience');
        }
    }
    //================================TAGS===========================
    public function tags()
    {
        $tags = tags::paginate(5);
        return view('admin.tags.index',compact('tags'));
    }

    public function storeTags(storeTagsRequest $request)
    {
        try{
            $about = $this->tagsRepository->storeTags($request);
            Alert::success('Store Tags', 'Success');
            return redirect()->route('admin.tags',compact('about'));
        }catch(Throwable $e){
            Alert::error('Error', $e);
            return redirect()->route('admin.tags');
        }
    }
    public function updateTags(storeTagsRequest $request,$id)
    {
        try{
            $about = $this->tagsRepository->updateTags($request,$id);
            Alert::success('Update Tags', 'Success');
            return redirect()->route('admin.tags',compact('about'));
        }catch(Throwable $e){
            Alert::error('Error', $e);
            return redirect()->route('admin.tags');
        }
    }
    public function destroyTags($id)
    {
        try{
            $about = $this->tagsRepository->destroyTags($id);
            Alert::success('Destroy Tags', 'Success');
            return redirect()->route('admin.tags');
        }catch(Throwable $e){
            Alert::error('Error', $e);
            return redirect()->route('admin.tags');
        }
    }
    //================================Skills===========================
    public function skills()
    {
        $skills = skills::paginate(5);
        return view('admin.skills.index',compact('skills'));
    }

    public function storeSkills(storeSkillsRequest $request)
    {
        try{
            $about = $this->skillsRepository->storeSkills($request);
            Alert::success('Store Skills', 'Success');
            return redirect()->route('admin.skills',compact('about'));
        }catch(Throwable $e){
            Alert::error('Error', $e);
            return redirect()->route('admin.skills');
        }
    }
    public function updateSkills(storeSkillsRequest $request,$id)
    {
        try{
            $about = $this->skillsRepository->updateSkills($request,$id);
            Alert::success('Update Skills', 'Success');
            return redirect()->route('admin.skills',compact('about'));
        }catch(Throwable $e){
            Alert::error('Error', $e);
            return redirect()->route('admin.skills');
        }
    }
    public function destroySkills($id)
    {
        try{
            $about = $this->skillsRepository->destroySkills($id);
            Alert::success('Destroy Skills', 'Success');
            return redirect()->route('admin.skills');
        }catch(Throwable $e){
            Alert::error('Error', $e);
            return redirect()->route('admin.skills');
        }
    }
     //================================PORTFOLIO===========================
     public function portfolio()
     {
         $portfolio = portfolio::paginate(5);
         $data_tags = tags::all();
         $portfolio_tags = portfolio_tags::all();
         return view('admin.portfolio.index',compact(['portfolio','data_tags','portfolio_tags']));
     }
 
     public function storePortfolio(storePortfolioRequest $request)
     {
         try{
             $about = $this->portfolioRepository->storePortfolio($request);
             Alert::success('Store Portfolio', 'Success');
             return redirect()->route('admin.portfolio',compact('about'));
         }catch(Throwable $e){
             Alert::error('Error', $e);
             return redirect()->route('admin.portfolio');
         }
     }
     public function updatePortfolio(storePortfolioRequest $request,$id)
     {
         try{
             $about = $this->portfolioRepository->updatePortfolio($request,$id);
             Alert::success('Update Portfolio', 'Success');
             return redirect()->route('admin.portfolio',compact('about'));
         }catch(Throwable $e){
             Alert::error('Error', $e);
             return redirect()->route('admin.portfolio');
         }
     }
     public function destroyImagePortfolio($id)
     {
         try{
             $about = $this->portfolioRepository->destroyImagePortfolio($id);
             Alert::success('Destroy Image Portfolio', 'Success');
             return redirect()->route('admin.portfolio');
         }catch(Throwable $e){
             Alert::error('Error', $e);
             return redirect()->route('admin.portfolio');
         }
     }
     public function destroyPortfolio($id)
     {
         try{
             $about = $this->portfolioRepository->destroyPortfolio($id);
             Alert::success('Destroy Portfolio', 'Success');
             return redirect()->route('admin.portfolio');
         }catch(Throwable $e){
             Alert::error('Error', $e);
             return redirect()->route('admin.portfolio');
         }
     }
}
