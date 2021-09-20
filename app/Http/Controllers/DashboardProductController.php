<?php

namespace App\Http\Controllers;

use App\Models\DashboardProduct;
// use App\Models\product;
use App\Models\Product;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

use function Opis\Closure\serialize;

class DashboardProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.product.index',
        [
            'product' => product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // return $request;
        // dd($request->file('thumbnail'));

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:products',
            'desc' => 'required',
            'thumbnail' => '',
            'img-product' => ''
        ]);
        $validatedData['thumbnail'] = $request->file('thumbnail')->store('product-img/b');

        // $validatedData['img-product'] = 'dsvd';
        // ddd($validatedData);
        $validatedData['img-product'] = array();
        if ($files = $request->file('img-product')) {
            foreach ($files as $file){
                // dd($file);
                // $b = $file->store('product-img/c');
                $validatedData['img-product'][] = $file->store('product-img/c');
            }
            $validatedData['img-product'] = json_encode($validatedData['img-product']);
        }
        
        // dd($validatedData);
        // $validatedData['thumbnail'] =
        // $a = $request->file('thumbnail');
        // $request->file('image')->store('product-img');
        // dd($a);


        
        Product::create($validatedData);

        return redirect('/dashboard/product')->with('success', 'New Product has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DashboardProduct  $dashboardProduct
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        // return $product;
        return view('dashboard.product.show',[
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DashboardProduct  $dashboardProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        return view('dashboard.product.edit',[
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DashboardProduct  $dashboardProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:products',
            'desc' => 'required',
            'thumbnail' => '',
            'img-product' => ''
        ]);
        $validatedData['thumbnail'] = $request->file('thumbnail')->store('product-img/b');

        $validatedData['img-product'] = array();
        if ($files = $request->file('img-product')) {
            foreach ($files as $file){
                $validatedData['img-product'][] = $file->store('product-img/c');
            }
            $validatedData['img-product'] = json_encode($validatedData['img-product']);
        }
        

        Product::where('id', $product->id)
                ->update($validatedData);

        return redirect('/dashboard/product')->with('success', 'Product has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DashboardProduct  $dashboardProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        Product::destroy($product->id);

        return redirect('/dashboard/product')->with('success', 'Product has been deleted');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(product::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
