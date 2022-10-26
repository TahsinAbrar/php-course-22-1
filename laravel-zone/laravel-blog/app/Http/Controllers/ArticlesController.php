<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
//        $userID = $request->input('user_id');
//        app('log')->info('User hits on Article index page.');
//
//        Log::debug('User ID: ' . $userID); // log it only in local or dev server, not in production server

        // business logic
        $data = [
            'pageTitle' => 'Xplorer | Article List',
//            'articles' => Article::simplePaginate(3)
            'articles' => Article::latest()->paginate(3)
        ];

//        dd($data);

        return view('articles.index', $data);
    }

    public function manage()
    {
        $data = [
            'articles' => Article::orderBy('id', 'desc')->paginate(10),
        ];

        return view('articles.manage', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['pageName'] = 'Create blog';
        $data['categories'] = Category::get(['id', 'name']);

        return view('articles.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticleRequest $request)
    {
        Article::create($request->validated());

        return redirect()->route('manage.articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'pageTitle' => 'Edit Article',
            'article' => Article::findOrFail($id)
        ];

        return view('articles.edit', $data);
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
        $formRequest = $request->only([
            'title',
            'description',
            'category',
            'author_name'
        ]);

        Article::where('id', $id)->update($formRequest);

        return redirect()->route('manage.articles.index')->with('message', 'Articles updated successfully!');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::where('id', $id)->delete();

        return redirect()->route('manage.articles.index')->with('message', 'Article has been deleted!');
//        dd('it will destroy everything.. do not try this at home');
    }
}
