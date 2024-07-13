<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slide;
use App\Services\CartService;

class MainController extends Controller
{
    public function index(Request $request)
    {
        return view('index', [
            'products' => Product::all(),
            'categories' => Category::all(),
            'slides' => Slide::all()
        ]);
    }

    public function contacto()
    {
        return view('landing.contacto');
    }

    public function productos(Request $request)
    {
        if ($request->isMethod('post') && $request->has('categories')) {
            if ($request->collect('categories')->contains(0)) {
                $products = Product::all();
            } else {
                $products = Product::whereHas('categories', function($query) use ($request) {
                    $query->whereIn('category_id', $request->collect('categories'));
                })->get();
            }

            return $products->map(function($product) {
                return view('landing._product', [
                    'product' => $product
                ])->render();
            })->implode('');
        } else {
            $products = Product::all();
        }
    
        return view('landing.productos', [
            'categories' => Category::all(),
            'products' => Product::all()
        ]);
    }

    public function producto(Product $product)
    {
        return view('landing.producto', [
            'product' => $product
        ]);
    }

    public function nosotros()
    {
        return view('landing.nosotros');
    }

    public function carrito(CartService $cartService)
    {
        if (CartService::getCount() === 0) {
            return redirect('/');
        }

        return view('landing.carrito', [
            'products' => $cartService->getProducts()
        ]);
    }

    public function informacion(CartService $cartService)
    {
        if (CartService::getCount() === 0) {
            return redirect('/');
        }
        
        return view('landing.informacion');
    }

    public function pago()
    {
        return view('landing.pago');
    }

    public function confirmacionPago()
    {
        return view('landing.confirmacion-pago');
    }

    public function envio()
    {
        return view('landing.envio');
    }
}
