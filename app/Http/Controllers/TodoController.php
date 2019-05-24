<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class TodoController extends Controller
{
    public function index() {
        $items = Item::where("status", 0)->orderBy("id", "DESC")->get();
        return view("todo.home", compact("items"));
    }

    public function create(Request $request) {
        $task_name = $request->input("task");
        $item = new Item;
        $item->name = $task_name;
        $item->status = false;
        $item->save();

        return redirect()->action('TodoController@index');
    }

    public function listo($id, Request $request) {
        $item = Item::find($id);
        $item->status = !$item->status;
        $item->save();
        return redirect()->action('TodoController@index');
    }

    public function borrar($id) {
        $item = Item::find($id);
        $item->delete();
        return redirect()->action('TodoController@index');
    }
}
