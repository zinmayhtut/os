<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Subcategory;

class FrontendController extends Controller
{
    public function home($value='')
    {
    	$items = Item::orderBy('id','desc')
    					->take(6)
    					->get();
    	// dd($items);
    	return view('frontend.home', compact('items'));
    }
    public function item($value='')
    {
        $subcategories = Subcategory::take(3)->get();
    	$items = Item::all();
    	// dd($items);
    	return view('frontend.item', compact('items','subcategories'));
    }

    public function detail($id)
    {
    	$items = Item::find($id);
    	// dd($items);
    	return view('frontend.detail', compact('items'));
    }

    public function profile($value='')
    {
    	
    	return view('frontend.profile');
    }
    public function checkout($value='')
    {
    	
    	return view('frontend.checkout');
    }

    public function getitem(Request $request)
    {
        $sid = $request->sid;
        if($sid==0){
             $items = Item::all();
        }

        else{
            $items =Subcategory::find($sid)->items;
        }
       
        return $items;
    }
    
}
