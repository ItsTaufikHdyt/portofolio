<?php

namespace App\Repositories\Admin\About;

use App\Repositories\Admin\Core\About\AboutRepositoryInterface;
use App\Models\about;

class AboutRepository implements AboutRepositoryInterface
{
    protected $about;

    public function __contruct(
        about $about
    ) {
        $this->about = $about;
    }

    public function storeAbout($request)
    {
        $age = date('Y') - 2001;
        $about = about::create([
            'desc' => $request->desc,
            'website' => $request->website,
            'phone' => $request->phone,
            'city' => $request->city,
            'age' => $age,
            'email' => $request->email,
            'freelance' => $request->freelance,
        ]);
    }

    public function updateAbout($request, $id)
    {
        $age = date('Y') - 2001;
        $about = about::find($id);
        $about->update([
            'desc' => $request->desc,
            'website' => $request->website,
            'phone' => $request->phone,
            'city' => $request->city,
            'age' => $age,
            'email' => $request->email,
            'freelance' => $request->freelance,
        ]);
    }

    public function destroyAbout($id)
    {
        $about = about::find($id);
        $about->delete();
    }
}
