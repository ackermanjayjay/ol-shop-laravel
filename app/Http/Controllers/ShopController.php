<?php

namespace App\Http\Controllers;

use Http;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $response = Http::get("https://dummyjson.com/products")['products'];
        $search = request('search');
       
        $responsesearch = Http::get("https://dummyjson.com/products/search?q={$search}")['products'];
            
    
        
        return view("Pages.homepages",[
            "judul"=> "Ol-Shop",
            "kontent" =>"Toko",
            "result" =>$response,
            "hasil" => $responsesearch
            ]);
    }
   

    /**
     * Show the form for creating a new resource.
     */
     public function create()
     {
         //
        }
        
        /**
        * Store a newly created resource in storage.
        */
        public function cari(Request $request)
        {
        $search = request('search');
        $responsesearch = Http::get("https://dummyjson.com/products/search?q={$search}")['products'];
        return view('Pages.homepages',[
            "judul"=> "Ol-Shop",
            "kontent" =>"Toko",
            'result'=>$responsesearch]);
            
        }
        
        /**
        * Display the specified resource.
        */
        public function show(string $id)
        {
            $responsesearch = Http::get("https://dummyjson.com/products/{$id}");
            return view('Pages.products',[
                "judul"=> "Ol-Shop",
                "kontent" =>"Toko",
                'result'=>$responsesearch]);
            
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
