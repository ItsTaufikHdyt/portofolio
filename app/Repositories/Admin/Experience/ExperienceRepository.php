<?php

namespace App\Repositories\Admin\Experience;

use App\Repositories\Admin\Core\Experience\ExperienceRepositoryInterface;
use App\Models\experience;

class ExperienceRepository implements ExperienceRepositoryInterface
{
    protected $experience;

    public function __contruct(
        experience $experience
    ) {
        $this->experience = $experience;
    }

    public function storeExperience($request)
    {
        $experience = experience::create([
            'title' => $request->title,
            'period' => $request->period,
            'location' => $request->location,
            'desc' => $request->desc,
        ]);
    }

    public function updateExperience($request, $id)
    {
        $experience = experience::find($id);
        $experience->update([
            'title' => $request->title,
            'period' => $request->period,
            'location' => $request->location,
            'desc' => $request->desc,
        ]);
    }

    public function destroyExperience($id)
    {
        $experience = experience::find($id);
        $experience->delete();
    }
}
