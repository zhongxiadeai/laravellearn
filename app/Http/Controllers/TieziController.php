<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TieziController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo '帖子列表首页';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tiezi/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return '这里是数据插入操作！！！';
    }

    /**
     * Display the specified resource.
     * 查看某一条内容
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return '帖子的详情为 id:' . $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //echo '帖子的修改页面 id 为' . $id;
        return view('tiezi/edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //echo 'update' . $id;
        return '数据的更新页面!!!';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo 'destory' . $id;
        echo '数据的删除操作！！！';
    }

    public function request(Request $request)
    {
        $name = $request->get('name');
        $request->url();

        dd($name);//等于echo $name;die();
    }

    /**
     * 表单
    */
    public function form()
    {
        return view('tiezi/form');
    }

    /**
     * 上传
     */
    public function upload(Request $request)
    {
        $path = $request->img->store('images');
        var_dump($path);
    }

}
