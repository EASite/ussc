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
    }

    public function save(Request $request) {
        $item = Item::find($request->input('id'));

        $item->title = $request->input('title');
        $item->author = $request->input('author');
        $item->description = $request->input('description');
        $item->price = $request->input('price');

        $item->save();
    }

    public function delete($id)
    {
        Item::destroy($id);
    }

    public function getItems(Request $request)
    {
        $where = [];

        if ($request->input('beginPrice')) {
            array_push($where, ['price', '>=', $request->input('beginPrice')]);
        }

        if ($request->input('endPrice')) {
            array_push($where, ['price', '<', $request->input('endPrice')]);
        }


        $items = Item::/*orderByRaw('LENGTH('.$request->input('sortBy').')', $request->input('sortDir'))
            ->*/orderBy($request->input('sortBy'), $request->input('sortDir'))
            ->select('id', 'title', 'author', 'description', 'price')
            ->where($where)
            ->get();

        return json_encode( $items, JSON_UNESCAPED_UNICODE);
    }
}
