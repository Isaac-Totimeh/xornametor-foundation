<?php

declare (strict_types = 1);

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function View()
    {
        $article = Article::get();
        return view('backend.article.index', compact('article'));
    }

    public function Add()
    {
        return view('backend.article.create');
    }

    public function Store(Request $request)
    {
        $request->validate([
            'body' => 'required',
            'article_date' => 'required',
            'title' => 'required',
            'image' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $img = $manager->read($request->file('image'));
            // $img = $img->resize(5442, 3633);
            $img->save(public_path('upload/article' . $name_gen));
            $save_url = 'upload/article' . $name_gen;
            Article::create([
                'body' => $request->body,
                'article_date' => $request->article_date,
                'title' => $request->title,
                'image' => $save_url,
                'created_at' => now(),
            ]);
            $notification = [
                'message' => 'Article Inserted Successfully',
                'alert-type' => 'success',
            ];
            return redirect()->route('view-participant')->with($notification);
        }
        $notification = [
            'message' => 'No image uploaded.',
            'alert-type' => 'error',
        ];
        return redirect()->back()->with($notification);
    }

    public function Edit($uuid)
    {
        $article = Article::where('uuid', $uuid)->first();
        if (!$article) {
            abort(404);
        }
        return view('backend.article.edit', compact('article'));
    }

    public function Update(Request $request)
    {
        $uuid = $request->uuid;
        $article = Article::where('uuid', $uuid)->first();
        if (!$article) {
            abort(404);
        }
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image',
            ]);
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $img = $manager->read($request->file('image'));
            // $img->resize(5442, 3633);
            $img->save(public_path('upload/article/' . $name_gen));
            $save_url = 'upload/article/' . $name_gen;
            $article->image = $save_url;
        }
        $article->body = $request->body;
        $article->article_date = $request->article_date;
        $article->title = $request->title;
        $article->save();
        $notification = [
            'message' => 'Article Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('view-article')->with($notification);
    }

    public function Delete($uuid)
    {
        $article = Article::where('uuid', $uuid)->first();
        if (!$article) {
            abort(404);
        }
        $article->delete();
        $notification = [
            'message' => 'Staff Deleted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->back()->with($notification);
    }
   
}
