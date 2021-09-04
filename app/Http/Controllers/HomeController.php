<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Like;
use App\Models\News;
use App\Models\Match;
use App\Models\Comment;
use App\Events\PostViewer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $matches = Match::whereDate('created_at',Carbon::today())->get();
        $news = News::orderBy('id','desc')->paginate(9);
        return view('home',compact('matches','news'));
    }

    public function details(Request $request)
    {
        $news_id = $request->input('news_id');

        $comments = Comment::orderBy('created_at','desc')->where('news_id',$news_id)->get();
        $posts = News::orderBy('id','desc')->paginate(9);
        $news = News::find($request->input('news_id'));
        event(new PostViewer($news));

        if(!$news)
        return back();


        return view('ndetails',compact('news','comments','posts'));
    }

    public function news()
    {
        $news = News::orderBy('id','desc')->paginate(9);

        return view('news',compact('news'));
    }

    public function get_today_news()
    {
        $news = News::whereDate('date',Carbon::today())->paginate(9);

        return view('news',compact('news'));
    }

    public function get_yesterday_news()
    {
        $news = News::whereDate('date',Carbon::yesterday())->paginate(9);

        return view('news',compact('news'));
    }

    public function like() : JsonResponse
    {
        $news = News::find(request()->id);

        if($news->isLikedByLoggedInUser())
        {
            $res = Like::where([
                'user_id' => auth()->user()->id,
                'news_id' => request()->id,
            ])->delete();

            if($res){
                return response()->json([
                    'count' => News::find(request()->id)->likes->count(),
                    'status' => 'success',
                ]);
            }
        }
        else
        {
            $like = new Like();

            $like->user_id = auth()->user()->id;
            $like->news_id = request()->id;

            $like->save();

            return response()->json([
                'count' => News::find(request()->id)->likes->count(),
                'status' => 'success',
            ]);
        }

    }

    ########### Matches ##################

    public function yesterday_match()
    {
        $matches = Match::whereDate('created_at',Carbon::yesterday())->paginate(9);

        return view('matches',compact('matches'));
    }

    public function tomorrow_match()
    {
        $matches = Match::whereDate('created_at',Carbon::tomorrow())->paginate(9);

        return view('matches',compact('matches'));
    }

    public function get_match_details(Request $request)
    {
        $matches = Match::find($request->input('match_id'));

        if (!$matches)
            return back();

        return view('watch',compact('matches'));
    }
}
