<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;

class PostIndex extends Component
{
    use WithPagination;
   public $search;

   public function updatingSearch()
   {
       $this->resetPage();
       # code...
   }
    protected $paginationTheme = "bootstrap";
    public function render()
    {
        $post = Post::where('title', 'LIKE', '%'. $this->search. '%')->latest('id')->paginate(5);
        return view('livewire.admin.post-index', compact('post'));
        //return view('livewire.admin.post-index');
    }
}
