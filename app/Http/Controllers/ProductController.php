<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    private $products = [
        ['id' => 1, 'name' => 'vivo X200 Pro',
       'description' => 'High-performance smartphone with 16GB RAM',
       'price' => 39999,
       'image' => 'https://media-cdn.bnn.in.th/449154/vivo-smartphone-x200-pro-16512gb-titanium-grey-1-square_medium.jpg'],
        ['id' => 2, 'name' => 'Xiaomi 14T',
       'description' => 'Budget-friendly smartphone with 5G support',
       'price' => 15990,
       'image' => 'https://media-cdn.bnn.in.th/430203/Xiaomi-Smartphone-14T-Titan-Black-1-square_medium.jpg'],
        ['id' => 3, 'name' => 'Infinix Hot 50 Pro',
       'description' => '4G with 120Hz refresh rate',
       'price' => 5499,
       'image' => 'https://media-cdn.bnn.in.th/435249/Infinix-Hot50-Pro-Sleek-Black--2-square_medium.jpg'],
        ['id' => 4, 'name' => 'OPPO Find X8 Pro',
       'description' => 'High-performance smartphone with 16GB RAM',
       'price' => 39999,
       'image' => 'https://media-cdn.bnn.in.th/444947/oppo-smartphone-find-x8-pro-16512-pearl-white-1-square_medium.jpg'],
        ['id' => 5, 'name' => 'Samsung Galaxy S24 FE ',
       'description' => 'Budget-friendly smartphone with 5G support',
       'price' => 22900,
       'image' => 'https://media-cdn.bnn.in.th/429014/Samsung-Smartphone-Galaxy-S24-FE-Light-Blue--1-square_medium.jpg'],
        ['id' => 6, 'name' => 'Honor 200 Pro 5G',
       'description' => '5G with 120Hz refresh rate',
       'price' => 19990,
       'image' => 'https://media-cdn.bnn.in.th/403377/Honor-200-Ocean-Cyan-7-square_medium.jpg'],
        ['id' => 7, 'name' => 'nubia Flip',
       'description' => 'High-performance smartphone with 16GB RAM',
       'price' => 19990,
       'image' => 'https://media-cdn.bnn.in.th/406095/ZTE-Smartphone-Nubia-Flip-Black11-square_medium.jpg'],
        ['id' => 8, 'name' => 'Huawei Pura 70',
       'description' => 'Budget-friendly smartphone with 5G support',
       'price' => 29990,
       'image' => 'https://media-cdn.bnn.in.th/402473/Huawei-Smartphone-Pura-70-Ultra-Green--1-square_medium.jpg'],
        ['id' => 9, 'name' => 'nubia Red Magic 9S Pro',
       'description' => '5G with 120Hz refresh rate',
       'price' => 27900,
       'image' => 'https://s.alicdn.com/@sc04/kf/H015dd71708f746e19e3bf95d362b40ebx.jpg_720x720q50.jpg'],
        ['id' => 10, 'name' => ' Infinix Zero 40 5G ',
       'description' => '5G with 120Hz refresh rate',
       'price' => 21599,
       'image' => 'https://www.iphone-droid.net/spec/wp-content/uploads/2024/08/Infinix-Zero-40-5G.jpg'],
        ];


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Products/Index', ['products' => $this->products]);
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
    public function store(Request $request): RedirectResponse
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = collect($this->products)->firstWhere('id', $id);
        if (!$product) {
            abort(404, 'Product not found');
        }

        return Inertia::render('Products/Show', ['product' => $product]);
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
