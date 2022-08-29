<?php

namespace App\Repositories\Admin\Link;

use App\Repositories\Admin\Core\Link\LinkRepositoryInterface;
use App\Models\link;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class LinkRepository implements LinkRepositoryInterface
{
    protected $link;

    public function __contruct(
        link $link
    ) {
        $this->link = $link;
    }

    public function storeLink($request)
    {

        $filename = date('YmdHi') . $request->file('icon')->getClientOriginalName();
        $request->file('icon')->storeAs('public/icon', $filename);

        $query = DB::table('link')->max('id');
        $no = $query+1;

        $link = new Link();
        $link->id = $no;
        $link->type = $request->type;
        $link->title = $request->title;
        $link->subtitle = $request->subtitle;
        $link->url = $request->url;
        $link->icon = $filename;
        $link->save();
    }

    public function updateLink($request, $id)
    {
        $link = link::find($id);
        if ($request->hasFile('icon')) {
            Storage::delete('public/icon/' . $link->icon);
            $filename = date('YmdHi') . $request->file('icon')->getClientOriginalName();
            $request->file('icon')->storeAs('public/icon', $filename);
            $link->type = $request->type;
            $link->title = $request->title;
            $link->subtitle = $request->subtitle;
            $link->url = $request->url;
            $link->icon = $filename;
            $link->save();
        } else {
            $link->type = $request->type;
            $link->title = $request->title;
            $link->subtitle = $request->subtitle;
            $link->url = $request->url;
            $link->save();
        }
    }

    public function destroyLink($id)
    {
        $link = link::find($id);
        Storage::delete('public/icon/' . $link->icon);
        $link->delete();
    }
}
