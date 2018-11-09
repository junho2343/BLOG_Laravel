<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;
use lib\lib;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorys = DB::select('
            SELECT c.*, IFNULL(p.count, 0) as count
            FROM category c
            LEFT JOIN (SELECT COUNT(*) as count, category FROM post GROUP BY category) as p
            ON c.idx = p.category
            ');


        return view('admin', ["categorys" => $categorys]);
    }

    public function login ()
    {
        extract($_POST);

        if ($password == "dnfkgkfk2343") {
            Session::put('admin', true);
        }else {
             Session::put('error', "비밀번호가 일치하지 않습니다.");
        }
        return redirect()->to('/admin');
    }

    public function post () {
        echo request('idx');   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        extract($_POST);

        if ($type == "category") {
            if (!trim($name)) {
                Session::put('error', '값이 비어있습니다.');
            }else {
                DB::table('category')->insert(
                    ['name' => $name]
                );
            }
        } else if ($type == "post") {
            if (!trim($title) || !trim($category) || !trim($content)) {
                Session::put('error', '값이 비어있습니다.');
            }else {
                DB::table('post')->insert(
                    ['title' => $title, 'category' => $category, 'content' => $content, 'date' => date('Y-m-d'), 'count' => 0]
                );
            }
        }
        


        

        return redirect('/admin');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
