<?php

namespace App\Repositories\Admin\Tags;

use App\Repositories\Admin\Core\Tags\TagsRepositoryInterface;
use Illuminate\Http\Request;
use App\Models\tags;

class TagsRepository implements TagsRepositoryInterface
{
    protected $tags;

    public function __contruct(
        tags $tags
    ) {
        $this->tags = $tags;
    }

    public function storeTags($request)
    {
        $tags= tags::create([
            'tags_name' => $request->tags_name,
        ]);
    }

    public function updateTags($request, $id)
    {
        $tags = tags::find($id);
        $tags->update([
            'tags_name' => $request->tags_name,
        ]);
    }

    public function destroyTags($id)
    {
        $tags = tags::find($id);
        $tags->delete();
    }
}
