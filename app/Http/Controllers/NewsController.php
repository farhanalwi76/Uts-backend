<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // Mendapatkan semua berita
    public function index()
    {
        return News::all();
    }

    // Menyimpan berita baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'author' => 'required'
        ]);

        return News::create($request->all());
    }

    // Mendapatkan berita berdasarkan ID
    public function show($id)
    {
        return News::find($id);
    }

    // Memperbarui berita
    public function update(Request $request, $id)
    {
        $news = News::find($id);
        $news->update($request->all());

        return $news;
    }

    // Menghapus berita
    public function destroy($id)
    {
        return News::destroy($id);
    }
}
