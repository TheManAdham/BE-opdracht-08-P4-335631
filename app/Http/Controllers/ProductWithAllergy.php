<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductWithAllergy extends Controller
{
    public function index(Request $request)
    {
        $query = DB::table('products')
        ->join('product_allergies', 'products.id', '=', 'product_allergies.product_id')
        ->join('allergies', 'product_allergies.allergy_id', '=', 'allergies.id')
        ->join('stores', 'products.id', '=', 'stores.product_id') // Join the stores table
        ->join('product_users', 'products.id', '=', 'product_users.product_id') // Join the product_users table
        ->select('products.name as name', DB::raw('GROUP_CONCAT(DISTINCT allergies.name) as allergy_names'), DB::raw('GROUP_CONCAT(DISTINCT allergies.description) as allergy_descriptions'), DB::raw('MAX(stores.amount_available) as amount_available'), DB::raw('MAX(product_users.user_id) as user_id'))
        ->groupBy('products.id');
        
        if ($request->filled('allergy_id')) {
            $query->where('product_allergies.allergy_id', $request->allergy_id);
        }
    
        $products = $query->get();
    
        $allergies = DB::table('allergies')->get();

        
        return view('allergies.index', ['products' => $products, 'allergies' => $allergies]);
    }


}
