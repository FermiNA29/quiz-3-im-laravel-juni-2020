<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticleModel;

class ArticlesController extends Controller
{
    //
    public function index() {
        $articles = ArticleModel::get_all();
        return view('articles.articles', compact('articles'));
    }

    public function form() {
        return view('articles.form');
    }

    public function save(Request $request) {
        $data = $request->all();
        unset($data['_token']);
        $save_article = ArticleModel::save($data);
        return redirect('/artikel');
    }

    public function show($id) {
        $show = ArticleModel::get_by_id($id);
        return view('articles.show', compact('show'));
    }

    public function edit($id) {
        $edit = ArticleModel::get_by_id($id);
        return view('articles.edit', compact('edit'));
    }

    public function update($id, Request $request) {
        $update = ArticleModel::update($id, $request);
        return redirect('/artikel');
    }

    public function delete($id) {
        $update = ArticleModel::delete($id);
        return redirect('/artikel');
    }
}
