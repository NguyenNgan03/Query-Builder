<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function getPost(){
        $post = DB::table('posts')
            ->select('id', 'title', 'description', DB::raw("IF(status = 1, 'True', 'False') as status"), DB::raw("DATE_FORMAT(created_at, '%d, %W %M %Y') as formatted_created_at"))
            ->where('id', 4)
            ->first();
        return $post;
    }
}
