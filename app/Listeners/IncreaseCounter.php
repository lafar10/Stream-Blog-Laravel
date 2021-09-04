<?php

namespace App\Listeners;

use App\Events\PostViewer;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class IncreaseCounter
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(PostViewer $event)
    {
        if (!session()->has('postViews')) {
            $this->updateviewer($event->news);
        } else {
            return false;
        }
    }


    function updateviewer($news)
    {
        $news->views = $news->views + 1;
        $news->save();

        session()->put('postViews', $news->id);
    }
}
