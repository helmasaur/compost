<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Show;
use App\Models\Episode;

class ShowController extends Controller
{
    public function index($id)
    {
        $show = Show::find($id);
        $episodes = Episode::where('show_id', $id)
            ->orderBy('episode_no')
            ->get();

        return view('modules.shows.index')->with(['show' => $show, 'episodes' => $episodes]);
    }

    public function episode($showId, $episodeNo)
    {
        $episode = Episode::where([
                ['show_id', $showId],
                ['episode_no', $episodeNo]
            ])
            ->firstOrFail();
        
        return view('modules.episodes.index')->with(['episode' => $episode]);
    }
}
