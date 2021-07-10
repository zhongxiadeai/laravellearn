<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBController extends Controller
{
    /**
     * 查询
     */
    public function select(){
        $books = DB::select('select * from book limit 10');
        dd($books);
    }

    /**
     * 事务
     */
    public function trans(){
        DB::transaction(function (){
            //
           /* $res1 = DB::update('update book_info set price=100 where id=1');
            $res2 = DB::update('update book_info set price=100 where id=2');
            if ($res1 && $res2){
                DB::commit();
            }else{
                DB::rollback();
            }*/

            try {
                $res2 = DB::update('update book sets b_price=100 where id=2');
            }catch (\Exception $e){
                //使用try catch获取异常的信息
                echo $e->getMessage();
            }

            echo 3333;
        });
    }

    /**
     * join
     */
    public function join(){
        $res = DB::table('book')
            ->leftjoin('booktype','book.typeid','=','booktype.id')
            ->skip(0)
            ->take(100)
            ->get();
        dd($res);

        /*$books = DB::table('book')->pluck('b_name');

        foreach ($books as $title) {
            echo $title.'-';
        }*/

        /*$user = DB::table('book')->where('id', 2)->value('b_author');
        dd($user);*/
    }

}
