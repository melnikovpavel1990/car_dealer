<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\News;
use App\Http\Requests\NewsRequest;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderBy('id', 'DESC')
            ->with('author')
            ->paginate(2);
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = Author::get();
        return view('admin.news.create', compact('authors'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        $path = $request->file('image')->store('public/news');
        $params = $request->all();
        $params['image'] = $path;
        News::create($params, $request->except('_token'));
        return redirect()->route('admin.news');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $new = News::findOrFail($id);
        $authors = Author::get();
        return view('admin.news.edit', compact('new', 'authors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, $id)
    {
        if ($request->file('image') != null) {
            $path = $request->file('image')->store('public/news');
            $params = $request->all();
            $params['image'] = $path;
        } else {
            $params = $request->all();
        }
        $new = News::findOrFail($id);
        $new->fill($params, $request->all());
        $new->save();
        return redirect()->route('admin.news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $new, $id)
    {
        $new = News::find($id);
        $new->delete();
        return redirect()->route('admin.news');
    }
}
