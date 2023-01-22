<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index(Request $request) {
        $items = DB::table('people')->orderBy('Field4', 'asc')->get();
        return view('hello.index', ['items' => $items]);

        // $items = DB::select('select * from people');
        // return view('hello.index', ['items' => $items]);
    }

    public function post(Request $request) {
        $items = DB::select('select * from people');
        return view('hello.index', ['items' => $items]);
    }

    // public function add(Request $request) {
    //     return view('hello.add');
    // }

    // public function create(Request $request) {
    //     $param = [
    //         'name' => $request->name,
    //         'mail' => $request->mail,
    //         'age' => $request->Field4,
    //     ];
    //     DB::insert('insert into people (name, mail, Field4) values (:name, :mail, :Field4)', $param);
    //     return redirect('/hello');
    // }

    public function edit(Request $request) {
        $item = DB::table('people')->where('id', $request->id)->first();
        return view('hello.edit', ['form' => $item]);

        // $param = ['id' => $request->id];
        // $item = DB::select('select * from people where id = :id', $param);
        // return view('hello.edit', ['form' => $item[0]]);
    }

    public function update(Request $request) {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'Field4' => $request->Field4,
        ];
        DB::table('people')->where('id', $request->id)->update($param);
        return redirect('/hello');

        // $param = [
        //     'id' => $request->id,
        //     'name' => $request->name,
        //     'mail' => $request->mail,
        //     'age' => $request->age,
        // ];
        // DB::update('update people set name = :name, mail = :mail, age = :age where id = :id', $param);
        // return redirect('/hello');
    }

    public function del(Request $request) {
        $item = DB::table('people')->where('id', $request->id)->first();
        return view('hello.del', ['form' => $item]);
        // $param = ['id' => $request->id];
        // $item = DB::select('select * from people where id = :id', $param);
        // return view('hello.del', ['form' => $item[0]]);
    }

    public function remove(Request $request) {
        DB::table('people')->where('id', $request->id)->delete();
        return redirect('/hello');
        // $param = ['id' => $request->id];
        // DB::delete('delete from people where id = :id', $param);
        // return redirect('/hello');
    }

    public function show(Request $request) {
        $page = $request->page;
        $items = DB::table('people')->offset($page * 3)->limit(3)->get();
        return view('hello.show', ['items' => $items]);
    }

    public function add(Request $request) {
        return view('hello.add');
    }

    public function create(Request $request) {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'Field4' => $request->Field4,
        ];
        DB::table('people')->insert($param);
        return redirect('/hello');
    }
}
