<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Resources\ItemResource;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $orderBy = $request->input('orderBy') ?? 'created_at';
        $order = $request->input('order') ?? 'desc';
        $items = Item::orderBy($orderBy, $order)->paginate(6);

        return ItemResource::collection($items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($request)
    {
        $item = new Item;
        $item->name = $request->input('name');
        $item->discription = $request->input('discription');
        if ($item->save()) {
            $item->categories()->attach($request->input('categories'));
            return new ItemResource($item);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item $item
     * @return \Illuminate\Http\Response
     */
    public function showItem(Item $item)
    {
        return response()->json($item);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Item $item
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $item = Item::findOrFail($request->input('id'));

        $item->categories()->detach($item->categories);

        $item->name = $request->input('name');
        $item->discription = $request->input('discription');
        if ($item->save()) {
            $item->categories()->attach($request->input('categories'));
            return new ItemResource($item);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item $item
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::findOrFail($id);

        if ($item->delete()) {
            return new ItemResource($item);
        }
    }

//    public function showItem(Request $request, $item)
//    {
//        $results = DB::table('items')
//            ->join('categories', 'categories.id', '=', 'items.id')
//            ->select('items.id', 'items.name','items.price', 'items.color', 'items.discription')
//            ->where('items.id', '=', $item)
//            ->get();
//
//        return response()->json($results);
//    }

    public function show(){
        return response()->json(Item::all());
    }
}

