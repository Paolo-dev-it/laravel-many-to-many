<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $userId = Auth::id();
        // $user = Auth::user();

        // $data = [
        //     'userId' => $userId,
        //     'user' => $user
        // ];
        $data = [
            'posts' => Post::with('category')->paginate(10)
        ];

        return view('admin.post.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'categories' => Category::All()
        ];

        return view('admin.post.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        //dd($data);

        $newPost = new Post();
        $newPost->fill($data);
        $newPost->save();
        //dd($data);

        return redirect()->route('admin.posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $elem = Post::findOrFail($id);
        // dd($elem);
        return view('admin.post.show', compact('elem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $elem = Post::findOrFail($id);
        $categories = Category::All();

        return view('admin.post.edit', compact('elem', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $post = Post::findOrFail($id);
        // $category = Category::findOrFail($id);
        // $request->validate(
        // [
        //     'name' => 'required|max:50'
        // ],
        // [
        //     'name.required' => 'Attenzione il campo name è obbligatorio',
        //     'name.max' => 'Attenzione il campo non deve superare i 50 caratteri'
        // ]
        // );
        $post->update($data);
        // $category->update($data);

        return redirect()->route('admin.posts.show', $post->id)->with('success', "Hai modificato con successo: $post->name");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $singlePost = Post::findOrFail($id);
        $singlePost->delete();
        return redirect()->route('admin.posts.index');
    }
}
