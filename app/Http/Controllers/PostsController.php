<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    //
    public function index()
    {
        // Query builders
        // $post = DB::select('select * from posts where id = :id;',[
        //      'id'=> 3,
        // ]);
        // dd($post);
        $post = DB::table("posts")
            // ->find(3);
            // ->count();
            // -> max('id');
            // ->sum('id');
            // ->avg('id');
            // ->insert([
            //     'title'=>'Haha',
            //     'body'=> 'hahahahahahahahahhahahahahahaha'

            // ]);
            // -> where('id',9)
            // ->update(
            //     ['title'=>'huhuhu']
            // );
            // ->whereBetween('id',[1,3])
            ->select('*')
            // ->orderBy('id','desc')
            // ->latest()
            // ->oldest()
            // ->first();
            ->get();
        dd($post);
        return view('posts.index');
    }
}
