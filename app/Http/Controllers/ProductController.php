<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();

        return view('welcome', ['products' => $products]);
    }

    public function show($id)
    {
        return view('show-product', ['id' => $id]);
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
            }

            ProductUser::create([
                'product_id' => $request->id,
                'user_id' => Auth::user()->id,
                'quantity' => $request->quantity,
                'address' => $request->address
            ]);

            $discountProduct = Product::where('id', $request->id)->first();

            $quantityActual = $discountProduct->quantity;

            $result = $quantityActual - $request->quantity;

            $discountProduct->update([
                'quantity' => $result
            ]);

            $products = Product::get();
            DB::commit();
            return view('welcome', ['products' => $products]);
        } catch (\Throwable $th) {
            DB::rollBack();
            return $th->getMessage();
        }
    }

    public function storeProduct(Request $request)
    {
        DB::beginTransaction();
        try {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('Image'), $filename);
            $data['image'] = $filename;

            Product::create([
                'name' => $request->name,
                'image' => 'http://prueba-alexander.test/Image/'.$filename,
                'price' => $request->price,
                'description' => $request->description,
                'quantity' => $request->quantity,
            ]);
            DB::commit();
            $products = Product::get();
            return view('welcome', ['products' => $products]);
        } catch (\Throwable $th) {
            DB::rollBack();
            return $th->getMessage();
        }
    }
}
