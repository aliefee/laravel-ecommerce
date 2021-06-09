<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $searchTerm = $request->query('search', '');
        return view('pages.show-search', [
            'searchTerm' => $searchTerm,
        ]);
        // return view('posts.show', compact('post'));
        // to make it shorter (passing the value to the model)
    }

}
