<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class productsController extends Controller
{
    public function index()
    {
        $data = products::all();
        return view('products',['products'=>$data]);
    }
    public function detail($id)
    {
        $data= products::find($id);
        return view('detail',['product'=>$data]);
    }
    public function search(Request $request)
    {
        $data= Products::where('name','like', '%'.$request->input('search').'%')->get();
        return view('search',['products'=>$data]);
    }
}
