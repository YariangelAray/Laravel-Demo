<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Image;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index() {
        $posts = Post::paginate(10);
        return view('posts.index', compact('posts'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store(StorePostRequest $request) {

        DB::beginTransaction();
        try {            
            $path = null;
            
            $request['user_id'] = User::all()->random()->id;
            $post = Post::create($request->all());
            
            if ($request->hasFile('image')) {    
                $path = Storage::disk('public')->putFile('images', $request->file('image'));
            }
            Image::create([
                    'path' => $path,
                    'imageable_id' => $post->id,
                    'imageable_type'=> Post::class
            ]);  

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            if(Storage::disk('public')->exists($path)){
                Storage::disk('public')->delete($path);
            }
            return $e->getMessage();
        }
        // dd($post);
    }
}
