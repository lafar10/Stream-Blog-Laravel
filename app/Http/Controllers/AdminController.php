<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Match;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    ############## Matches #############

    public function matches()
    {
        $matches = Match::orderBy('id','desc')->paginate(10);
        return view('admin.matches', compact('matches'));
    }

    public function create_match()
    {
        return view('admin.add_match');
    }

    public function store_match(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'club_hote' => ['required'],
            'club_guest' => ['required'],
            'club_hote_pic' => ['required'],
            'club_guest_pic' => ['required'],
            'club_hote_but' => ['required'],
            'club_guest_but' => ['required'],
            'heure' => ['required'],
            'etat' => ['required'],
            'title' => ['required'],
            'mic' => ['required'],
            'cup' => ['required'],
            'channel' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }

        $match = new Match();

        $match->club_hote = $request->input('club_hote');
        $match->club_guest = $request->input('club_guest');
        $match->club_hote_but = $request->input('club_hote_but');
        $match->club_guest_but = $request->input('club_guest_but');
        $match->heure = $request->input('heure');
        $match->etat = $request->input('etat');
        $match->title = $request->input('title');
        $match->mic = $request->input('mic');
        $match->cup = $request->input('cup');
        $match->channel = $request->input('channel');
        $match->url = $request->input('url');

        if ($request->hasFile('club_hote_pic')) {
            $file = $request->file('club_hote_pic');
            $extension = $file->getClientOriginalName();
            $file_name  = time() . '.' . $extension;
            $file->move('pics/', $file_name);
            $match->club_hote_pic =  $file_name;
        }

        if ($request->hasFile('club_guest_pic')) {
            $file_a = $request->file('club_guest_pic');
            $extension_a = $file_a->getClientOriginalName();
            $file_name_a  = time() . '.' . $extension_a;
            $file_a->move('pictures/', $file_name_a);
            $match->club_guest_pic =  $file_name_a;
        }

        $match->save();

        return redirect()->route('matches');
    }

    public function edit_match(Request $request)
    {
        $matches = Match::find($request->input('match_id'));

        if (!$matches)
            return back();

        return view('admin.update_match',compact('matches'));
    }

    public function update_match(Request $request)
    {

        $match = Match::find($request->input('match_id'));

        if (!$match)
        return back();

            $match->club_hote = $request->input('club_hote');
            $match->club_guest = $request->input('club_guest');
            $match->club_hote_but = $request->input('club_hote_but');
            $match->club_guest_but = $request->input('club_guest_but');
            $match->heure = $request->input('heure');
            $match->etat = $request->input('etat');
            $match->title = $request->input('title');
            $match->mic = $request->input('mic');
            $match->cup = $request->input('cup');
            $match->channel = $request->input('channel');

            if ($request->hasFile('club_hote_pic')) {
                $file = $request->file('club_hote_pic');
                $extension = $file->getClientOriginalName();
                $file_name  = time() . '.' . $extension;
                $file->move('pics/', $file_name);
                $match->club_hote_pic =  $file_name;
            }

            if ($request->hasFile('club_guest_pic')) {
                $file_a = $request->file('club_guest_pic');
                $extension_a = $file_a->getClientOriginalName();
                $file_name_a  = time() . '.' . $extension_a;
                $file_a->move('pictures/', $file_name_a);
                $match->club_guest_pic =  $file_name_a;
            }

            $match->update();

        return redirect()->route('matches');

    }

    public function delete_match(Request $request)
    {
        $matches = Match::find($request->input('match_id'));

        if (!$matches)
            return back();


        $matches->delete();

        return redirect()->back();
    }

    public function match_search(Request $request)
    {
        $search = $request->input('search_match');

        $matches = Match::where('id', 'like', "%$search%")
            ->orWhere('club_hote', 'like', "%$search%")
            ->orWhere('title', 'like', "%$search%")
            ->orWhere('club_guest', 'like', "%$search%")
            ->orWhere('etat', 'like', "%$search%")
            ->get();

        return view('admin.matches')->with('matches', $matches);
    }



    ############## news #############

    public function news()
    {
        $news = News::paginate(10);
        return view('admin.news', compact('news'));
    }



    public function create()
    {
        return view('admin.add_news');
    }

    public function store_news(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'title' => ['required'],
            'subtitle' => ['required'],
            'date' => ['required'],
            'intro' => ['required'],
            'show' => ['required'],
            'conclusion' => ['required'],
            'source' => ['required'],
            'author' => ['required'],
            'pic' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }

        $news = new News();

        $news->title = $request->input('title');
        $news->subtitle = $request->input('subtitle');
        $news->date = $request->input('date');
        $news->intro = $request->input('intro');
        $news->show = $request->input('show');
        $news->conclusion = $request->input('conclusion');
        $news->source = $request->input('source');
        $news->author = $request->input('author');

        if ($request->hasFile('pic')) {
            $file = $request->file('pic');
            $extension = $file->getClientOriginalName();
            $file_name  = time() . '.' . $extension;
            $file->move('public/images/', $file_name);
            $news->pic =  $file_name;
        }

        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $extension = $file->getClientOriginalName();
            $file_name_a  = time() . '.' . $extension;
            $file->move('public/videos/', $file_name_a);
            $news->video =  $file_name_a;
        }

        $news->save();

        return redirect()->route('news');
    }

    public function edit_news(Request $request)
    {
        $news = News::find($request->input('news_id'));

        if (!$news)
            return back();

        return view('admin.update_news',compact('news'));
    }

    public function update_news(Request $request)
    {

        $news = News::find($request->input('news_id'));

        if (!$news)
        return back();

        $news->title = $request->input('title');
        $news->subtitle = $request->input('subtitle');
        $news->date = $request->input('date');
        $news->intro = $request->input('intro');
        $news->show = $request->input('show');
        $news->conclusion = $request->input('conclusion');
        $news->source = $request->input('source');
        $news->author = $request->input('author');

        if ($request->hasFile('pic')) {
            $file = $request->file('pic');
            $extension = $file->getClientOriginalName();
            $file_name  = time() . '.' . $extension;
            $file->move('public/images/', $file_name);
            $news->pic =  $file_name;
        }

        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $extension = $file->getClientOriginalName();
            $file_name_a  = time() . '.' . $extension;
            $file->move('public/videos/', $file_name_a);
            $news->video =  $file_name_a;
        }

        $news->update();

        return redirect()->route('news');

    }

    public function delete_news(Request $request)
    {
        $news = News::find($request->input('news_id'));

        if (!$news)
        return back();


        $news->delete();

        return redirect()->back();
    }

    public function news_search(Request $request)
    {
        $search = $request->input('search_news');

        $news = News::where('id', 'like', "%$search%")
            ->orWhere('subtitle', 'like', "%$search%")
            ->orWhere('title', 'like', "%$search%")
            ->orWhere('author', 'like', "%$search%")
            ->orWhere('source', 'like', "%$search%")
            ->get();

        return view('admin.news')->with('news', $news);
    }
}
