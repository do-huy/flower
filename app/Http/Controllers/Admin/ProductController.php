<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Product;
use App\Models\ProductImage;
use DataTables;
// use Toastr;
use Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $products = Product::orderBy('id' ,'DESC');
            return Datatables::of($products)
                ->addIndexColumn()
                ->editColumn('category_id', function($products) {
                    return $products->category->name;
                })
                ->addColumn('action', function($row){
                    $btn = '<a href="products/'.$row->id.'/edit" id="'.$row->id.'" class="edit btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                            <a href="products/'.$row->id.'" class="show btn btn-danger btn-sm"><i class="fas fa-eye"></i></a>
                            <button type="button" id="'.$row->id.'" class="delete btn btn-default btn-sm notificationDelete"><i class="far fa-trash-alt"></i></button>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product($request->all());
        $product->user_id = Auth::id();
        $product->slug = incrementSlug('products', str::slug($request->name));
        $product->save();

        if($request->hasFile('src')){
            foreach($request->src as $src)
            {
                $srcname = uniqid().'-'.$src->getClientOriginalName();
                $src->move('upload/product_images',$srcname);
                $product_images = new ProductImage();
                $product_images->product_id = $product->id;
                $product_images->src = $srcname;
                $product_images->save();
            }
        }

        return redirect()->route('products.index')->with('success','Thêm sản phẩm thành công');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
