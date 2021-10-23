<?php

namespace App\Repositories\Admin\Skills;

use App\Repositories\Admin\Core\Skills\SkillsRepositoryInterface;
use App\Models\skills;

class SkillsRepository implements SkillsRepositoryInterface
{
    protected $skills;

    public function __contruct(
        skills $skills
    ) {
        $this->skills = $skills;
    }

    public function storeSkills($request)
    {
        $skills = skills::create([
            'name' => $request->name,
            'icon' => $request->icon,
            'level' => $request->level,
        ]);
    }

    public function updateSkills($request, $id)
    {
        $skills = skills::find($id);
        $skills->update([
            'name' => $request->name,
            'icon' => $request->icon,
            'level' => $request->level,
        ]);
    }

    public function destroySkills($id)
    {
        $skills = skills::find($id);
        $skills->delete();
    }
}
