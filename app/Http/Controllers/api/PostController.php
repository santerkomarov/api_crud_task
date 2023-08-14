<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\User;

use App\Http\Requests\PostRequest;
use App\Http\Resources\PostResource;
use App\Http\Resources\PostCollection;

class PostController extends Controller
{
    /**
     * Display a listing of the collection.
     *
     * @return PostCollection
     */
    public function index(Request $request)
    {
        // способ сортировки по id (в данном случае) определяется из запроса ?orderBy=...
        $orderBy = $request->get('orderBy') ? $request->get('orderBy') : 'ASC';

        $posts = Post::orderBy('id', $orderBy)->get();

        // формируем данные категорий этого поста
        $categories = [];
        foreach ($posts as $post) {
            $post = $post->categories; 
        }

        return new PostCollection($posts);
    }

    /**
     * Store a newly created resource in DB.
     *
     * @param  PostRequest  $request
     * @return Response
     */
    public function store(PostRequest $request)
    {
        $post = Post::create([
            'title' => $request['title'],
            'content' => $request['content'],
            'user_id' => auth()->user()->id,
        ]);

        // Прикрепляем категории
        $post->categories()->attach($request->categories);

        return response()->json([
            'success' => 'Post was created.',
            'post' => $post->categories,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return PostResource
     */
    public function show($id)
    {
        $post = Post::find($id);

        if ( $post ) {
            return new PostResource( $post );
        }
        return response()->json(['Upps, nothing found']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  PostRequest  $request
     * @param  int  $id
     * @return Response
     */
    public function update(PostRequest $request)
    {

        $post = Post::where('id', $request['id'])->first();

        if ( !$post ) {
            return response()->json(['Post does not exist']);
        }

        $post->update([
            'title' => $request['title'],
            'content' => $request['content'],
            'categories' => $request['categories'],
        ]);

        return response()->json([
            'post' => $post,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function delete($id)
    {
        // удаление Поста только залогиненным пользователем
        $post = Post::where('user_id', auth()->user()->id)
                ->where('id', $id)
                ->first();

        if ( $post ) {
            $post->delete();
            return response()->json(['Post was deleted']);
        }

        return response()->json(['Post does not exist']);
    }
}
