<?php

namespace App\Observers;
use Illuminate\Support\Str;
use App\Models\Post;

class PostObserver
{

    public function retrieved(Post $post): void   // retrieved is a event in that place we can't take another name
    {
        // it will show no. of viewers
        $post->increment('counter');
    }

    /**
     * Handle the Post "created" event.
     */
    public function created(Post $post): void
    {
        //
    }

    public function saving(Post $post): void
    {
        //when data will savein db this function called auto 
        $post->slug = str::slug($post->title,"-");   // **this file RUN/execute when call by AppServiceProvider file
    }

    /**
     * Handle the Post "updated" event.
     */
    public function updated(Post $post): void
    {
        //
    }

    /**
     * Handle the Post "deleted" event.
     */
    public function deleted(Post $post): void
    {
        //
    }

    /**
     * Handle the Post "restored" event.
     */
    public function restored(Post $post): void
    {
        //
    }

    /**
     * Handle the Post "force deleted" event.
     */
    public function forceDeleted(Post $post): void
    {
        //
    }
}
