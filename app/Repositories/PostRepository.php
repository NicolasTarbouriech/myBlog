<?php
namespace App\Repositories;
use App\Models\Post;

class PostRepository

{
    protected function queryActive()
    {
        // make a select to avoid to load post too big & useless for the homepage
        return Post::select(
            'id',
            'slug',
            'image',
            'title',
            'excerpt',
            'user_id')
            ->with('user:id,name')
            ->whereActive(true);
        
    }
    
    protected function queryActiveOrderByDate()
    {
        return $this->queryActive()->latest();
    }

    // Get the number of page & return post for this page
    public function getActiveOrderByDate($nbrPages)
    {
        return $this->queryActiveOrderByDate()->paginate($nbrPages);
    }

    // The 5 latest post update or create
    // We also load categories because we need to display them
    public function getHeros()
    {
        return $this->queryActive()->with('categories')->latest('updated_at')->take(5)->get();
    }

    public function getPostBySlug($slug)
{
    // Post for slug with user, tags and categories
    $post = Post::with(
                'user:id,name,email',
                'tags:id,tag,slug',
                'categories:title,slug'
            )
            ->withCount('validComments')
            ->whereSlug($slug)
            ->firstOrFail();
    // Previous post
    $post->previous = $this->getPreviousPost($post->id);
    // Next post
    $post->next = $this->getNextPost($post->id);
    return $post;
}
protected function getPreviousPost($id)
{
    return Post::select('title', 'slug')
                ->whereActive(true)
                ->latest('id')
                ->firstWhere('id', '<', $id);
}
protected function getNextPost($id)
{
    return Post::select('title', 'slug')
                ->whereActive(true)
                ->oldest('id')
                ->firstWhere('id', '>', $id);
    }

}