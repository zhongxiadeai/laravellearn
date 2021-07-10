<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * cookie设置
     */
    public function set()
    {
        //setcookie('name','guanhui',time() + 3600,'/');
        //设置
        //\Cookie::queue('name','guanhui',10);
        //return response('<p>我是响应体</p>')->withCookie('class','lamp201',10);

        //读取
        //GET / HTTP/1.1
        //Host:localhost
        //Cookie:name=haiyan;phone=chuizi
        //....

        $name = \Cookie::get('name');
        dd($name);
    }

    /**
     *
     */
    public function flash()
    {
        // \Session::flash('info','恭喜您，添加成功');
        return redirect('/get-flash')->with('info', '添加成功');
    }

    public function getFlash()
    {
        //echo \Session::get('info');
        return view('admin');
    }

    public function user()
    {
        return view('user');
    }

    public function insert()
    {
        //表单验证  检测用户    密码
        if (empty($_POST['username']) || strlen($_POST['username']) < 6 || strlen($_POST['username']) > 20) {
            \Session::flash('error', '用户名格式不正确！');
            return back()->withInput();
            //dd('fail');
        }
    }

    /**
     * 响应
     */
    public function response()
    {
        //普通字符串
        //return  'i love you??';
        //return  '<h4>我爱你吗？？</h4>';

        //返回json
        //return response()->json(['name'=>'xiaoming','age'=>18]);

        //返回  模板
        return view('view');

        //下载
        //return response()->download('./错位时空-艾辰.mp3');
    }

    public function views()
    {
        return view('user.add', [
            'title' => '第一次接触视图',
            'content' => '我爱你啊！！！',
            'pages'=>'<a href="">1</a><a href="">2</a>']);
    }

    /**
     * 创建页面1
     */
    public function page1()
    {
        return view('page1');
    }

    /**
     * 创建页面2
     */
    public function page2()
    {
        return view('page2');
    }

    /**
     * 控制
     */
    public function control()
    {
        return view('control',[
            'isVip'=>true,
            'classmates'=>['丁民鹏','王爽','李陈']]);
    }
}
