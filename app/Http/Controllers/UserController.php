<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $user;

    public function __construct()
    {
        $this->user = User::find(1);
    }

    public function showUsers(){
        return view('user.showUsers', ['user'=> $this->user, 'users'=> User::simplePaginate(50) ] );
    }

    public function recentlyViewedProductsByUser(Request $request, User $user){

        $products = $user->recentlyViewedProducts()->withPivot('viewed_at')->orderBy('viewed_at','desc')->get();

        if( count($products) == 0 ){
            $products = Product::inRandomOrder()->limit(100)->get();
        }
        
        return view('user.recentlyViewedProductsByUser', ['user'=> $this->user, 'products'=> $products ] );
    }

}
