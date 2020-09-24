<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    //
    public function index()
    {
        $items = Item::all();
        return view('items', compact('items'));
    }

    public function add(Request $request)
    {
        $item = new Item;

        $item->title = $request->input('title');
        $item->author = $request->input('author');
        $item->description = $request->input('description');
        $item->price = $request->input('price');

        $item->save();

        \Session::flash('action_status', 'Запись добавлена!');

        return redirect()->route('home');
    }

    public function delete($id)
    {
        $item = Item::find($id);

        Item::destroy($id);

        \Session::flash('action_status', "Запись \"{$item->title}\" удалена!");

        return redirect()->route('home');
    }

    public function getItems()
    {
        # return response()->json( Item::all()->toArray() );
        return json_encode( Item::all()->toArray(), JSON_UNESCAPED_UNICODE);
    }
}
