<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
    $posts = Articles::all();
    return response()->json($posts);
    }
}