<?php

namespace App\Livewire;

use Livewire\Component;

class LikePost extends Component
{
    public $post;

    public function like()
    {
        /*if( $this->post->checkLike(auth()->user())){
            $this->post->likes()->where('post_id', $this->post->id)->delete();
            //return back();
        } else {
            $this->post->likes()->create([
                'user_id' => auth()->user()->id
            ]);
        }*/
        //return "desde la fn de like";
    }
    public function render()
    {
        return view('livewire.like-post');
    }
}
