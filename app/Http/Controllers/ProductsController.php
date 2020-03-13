<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $products = Product::get();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $categories = Category::get();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'product_name'=>'required',
            'product_description'=>'required',
            'product_prize'=>'required',
            'category_id'=>'required',
            'product_image' => 'image|nullable'
        ]);

        // Handle File Upload
        if($request->hasFile('product_image')) {

            // Get filename with extension
            $filenameWithExt = $request->file('product_image')->getClientOriginalName();

            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // Get just ext
            $extension = $request->file('product_image')->getClientOriginalExtension();

            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            // Upload Image
            $path = $request->file('product_image')->storeAs('public/products_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'image.png';
        }

        // create Product
        $product = new Product();
        $product->product_name = $request->input('product_name');
        $product->product_description = $request->input('product_description');
        $product->product_prize = $request->input('product_prize');
        $product->category_id = $request->input('category_id');
        $product->product_image = $fileNameToStore;
        $product->save();

        return redirect(route('prod.edit', $product));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show(int $id)
    {
        $products = Product::join('categories', 'products.category_id', '=', 'categories.category_id')
            ->select('products.*', 'categories.*')
            ->where('products.category_id', $id)
            ->get();
//        $products = DB::table('products')->where('category_id', $id)->get();
        return view('products.show', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(int $id)
    {
        $product = Product::join('categories', 'products.category_id', '=', 'categories.category_id')
            ->select('products.*', 'categories.*')
            ->where('product_id', $id)
            ->firstOrFail();
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
//        dd($test['product_description']);
        $product = Product::where('product_id', '=', $id)->firstOrFail()->update($request->all());
        return redirect(route('prod.edit', [$id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
