<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderBy('id', 'desc')->get();
        return view('Backend/News/viewNews', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend/News/addNews');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'author' => 'required',
            'image' =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $news = new News;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $photo = time() . '.' . $image->getClientOriginalExtension();
            $resize = Image::make($image);
            $resize->resize('600', '600')->save('Backend/Newsimages/' . $photo);
            $news->image = $photo;
        }
        $news->title = $request->title;
        $news->description = $request->description;
        $news->author = $request->author;
        $news->save();

        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('Backend/News/editNews', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'author' => 'required',
            'image' =>  'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $news = News::find($id);

        if ($request->hasFile('image')) {
            if ($news->image != null) {
                unlink(public_path() . '/Backend/Newsimages/' . $news->image);
            }
            $featured = $request->file('image');
            $name = time() . '.' . $featured->getClientOriginalExtension();

            $resize = Image::make($featured);
            $resize->resize('600', '600')->save('Backend/Newsimages/' . $name);

            $news->image = $name;
        } else {
            $news->image = $news->image;
        }
        $news->title = $request->title;
        $news->description = $request->description;
        $news->author = $request->author;
        $update = $news->save();
        if ($update) {
            return redirect()->route('news.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $image_path = public_path() . '/Backend/Newsimages/' . $news->image;
        unlink($image_path);
        $news->delete();

        return redirect()->route('news.index');
    }
}
