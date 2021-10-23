<?php

namespace App\Repositories\Admin\Education;

use App\Repositories\Admin\Core\Education\EducationRepositoryInterface;
use App\Models\education;

class EducationRepository implements EducationRepositoryInterface
{
    protected $education;

    public function __contruct(
        education $education
    ) {
        $this->education = $education;
    }

    public function storeEducation($request)
    {
        $education= education::create([
            'title' => $request->title,
            'period' => $request->period,
            'location' => $request->location,
        ]);
    }

    public function updateEducation($request, $id)
    {
        $education = education::find($id);
        $education->update([
            'title' => $request->title,
            'period' => $request->period,
            'location' => $request->location,

        ]);
    }

    public function destroyEducation($id)
    {
        $education = education::find($id);
        $education->delete();
    }
}
