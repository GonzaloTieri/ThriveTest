<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    private $user;

    public function __construct()
    {
        $this->user = User::find(1);
    }

    public function index(){
        return view('index.index', ['user'=> $this->user, 'products' => Product::simplePaginate(50) ] );
    }

    public function showProduct(Request $request, Product $product){
        return view('index.showProduct', ['user'=> $this->user, 'product' => $product ] );
    }

}
