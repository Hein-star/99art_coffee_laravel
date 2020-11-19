<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Category;
Use App\Subcategory;

class FrontendController extends Controller
{
    public function index()
    {
        $items = Item::limit(6)->get();
        $categories = Category::all();
    	return view('frontend.mainpage',compact('items','categories'));
    }

    public function signin($value='')
    {
        return view('frontend.signin');
    }

    public function signup($value='')
    {
        return view('frontend.signup');
    }

    public function itemdetail($id)
    {
        $item = Item::find($id);
        return view('frontend.itemdetail', compact('item'));
    }

    public function itemsbysubcategory($id)
    {
        $subcategory = Subcategory::find($id);
        $categories = Category::all();
        return view('frontend.itemsbysubcategory', compact('subcategory','categories'));
    }

    public function cart($value='')
    {
        return view('frontend.cartpage');
        return redirect()->back()->with('success', 'Your Order Successfully!'); 
    }
}
