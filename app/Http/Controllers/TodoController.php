<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\TodoRequest;



class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Todo一覧の表示
        $todos = Todo::all();
        // $query = "SELECT * from todos;";
        $query = DB::table('todos')->get();
        // table全ての中で、さらに絞ったものだけ表示している
        $scopeWords = Todo::title($query)->get();
        // echo($scopeWords);
        // echo ($query); 
        $resultCalc = new Todo;
        $resultCalc = $resultCalc->calc(10);
        return view("todos/index")->with([
            "todos" => $todos, "scopes" => $scopeWords, "calc" => $resultCalc
        ]);
        // return view("layouts/footer")->with([
        //     "todos" => $todos
        // ]);
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
    public function store(TodoRequest $request) // 送信した中身が入っているわけではない？
    {
        $todo = new Todo;
        // messageという名前で送っているからバージョン かからないのでは？
        $todo->title = $request->message;
        $todo->context = "test";
        $todo->save();
        // なんかjsonが帰ってくる
        return redirect('/');
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
