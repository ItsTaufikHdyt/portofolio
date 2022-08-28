<?php

namespace App\Repositories\Admin\Portfolio;

use App\Repositories\Admin\Core\Portfolio\PortfolioRepositoryInterface;
use App\Models\portfolio;
use App\Models\images;
use Illuminate\Support\Facades\Storage;

class PortfolioRepository implements PortfolioRepositoryInterface
{
    protected $portfolio;

    public function __contruct(
        portfolio $portfolio
    ) {
        $this->portfolio = $portfolio;
    }

    public function storePortfolio($request)
    {
        $portfolio = new portfolio();
        $portfolio->portfolio_title = $request->portfolio_title;
        $portfolio->portfolio_desc = $request->portfolio_desc;
        $portfolio->project_date = $request->project_date;
        $portfolio->project_url = $request->project_url;
        $portfolio->client = $request->client;
        $portfolio->type = $request->type;
        $portfolio->save();

        foreach ($request->images as $key => $image) {
            $name = str_replace(' ', '', $image->getClientOriginalName());
            $image->storeAs('public/portfolios/images', $name);
            $data_images = new images();
            $data_images->filename = $name;
            $portfolio->images()->save($data_images);
        }
        $portfolio->tags()->attach($request->tags);
    }

    public function updatePortfolio($request, $id)
    {
        $portfolio = portfolio::find($id);

        if ($request->hasFile('images')) {
            $portfolio->portfolio_title = $request->portfolio_title;
            $portfolio->portfolio_desc = $request->portfolio_desc;
            $portfolio->project_date = $request->project_date;
            $portfolio->project_url = $request->project_url;
            $portfolio->client = $request->client;
            $portfolio->type = $request->type;
            $portfolio->save();

            foreach ($request->images as $key => $image) {
                $name = str_replace(' ', '', $image->getClientOriginalName());
                $image->storeAs('public/portfolios/images', $name);
                $data_images = new images();
                $data_images->filename = $name;
                $portfolio->images()->save($data_images);
            }
        } else {
            $portfolio->portfolio_title = $request->portfolio_title;
            $portfolio->portfolio_desc = $request->portfolio_desc;
            $portfolio->project_date = $request->project_date;
            $portfolio->project_url = $request->project_url;
            $portfolio->client = $request->client;
            $portfolio->type = $request->type;
            $portfolio->save();
        }


        //$portfolio->tags()->attach($request->tags);
    }
    public function destroyImagePortfolio($id)
    {
        $images = images::find($id);
        Storage::delete('public/portfolios/images/' . $images->filename);
        $images->delete();
    }

    public function destroyPortfolio($id)
    {
        $portfolio = portfolio::find($id);
        if ($portfolio) {
            $portfolio = portfolio::find($id);
            foreach ($portfolio->images as $key => $image) {
                Storage::delete('public/portfolios/images/' . $image->filename);
            }
            $portfolio->delete();
        }
    }
}
