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

    public function productos()
    {
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
