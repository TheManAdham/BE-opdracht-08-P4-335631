<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\User;



class DeliveryController extends Controller
{
    public function index($productId)
    {
        $product = Product::findOrFail($productId);
    
        $productUser = DB::table('product_users')->where('product_id', $productId)->first();
        $user = User::where('id', $productUser->user_id)->first();
    
        $store = DB::table('stores')->where('product_id', $productId)->first();
        $nextDelivery = null;
    
        if ($store->amount_available == 0) {
            $nextDelivery = DB::table('product_users')
                ->where('product_id', $productId)
                ->where('datedelivery', '>', now())
                ->orderBy('datedelivery', 'asc')
                ->first();
        }
    
        $deliveries = DB::table('product_users')
            ->join('users', 'product_users.user_id', '=', 'users.id')
            ->join('products', 'product_users.product_id', '=', 'products.id')
            ->join('stores', 'products.id', '=', 'stores.product_id')
            ->where('product_users.product_id', $productId)
            ->select('product_users.*', 'users.name as user_name', 'users.contact_person', 'users.number', 'users.mobile', 'products.name as product_name', 'stores.amount_available as store_amount_available')
            ->orderBy('product_users.datedelivery', 'asc')
            ->get();
    
        return view('delivery.index', ['product' => $product, 'deliveries' => $deliveries, 'user' => $user, 'nextDelivery' => $nextDelivery]);
    }
}
