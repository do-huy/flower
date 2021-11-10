<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Category;
use DataTables;
use Toastr;
use App\Http\Requests\admin\category\StoreCategoryRequest;
use App\Http\Requests\admin\category\UpdateCategoryRequest;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $categories = Category::orderBy('id' ,'DESC');
            return DataTables::of($categories)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '<a href="categories/'.$row->id.'/edit" id="'.$row->id.'" class="edit btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="categories/'.$row->id.'" class="show btn btn-danger btn-sm"><i class="fas fa-eye"></i></a>
                        <button type="button" id="'.$row->id.'" class="delete btn btn-default btn-sm notificationDelete"><i class="far fa-trash-alt"></i></button>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('admin.category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {


            $category = new Category($request->all());
            $category->slug = incrementSlug('categories', str::slug($request->name));
            $category->save();
            Toastr::success('Thêm danh mục thành công','Success');
            return redirect()->route('categories.index');


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
        $category = Category::find($id);
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, $id)
    {
        try{

            $category = Category::find($id)->fill($request->all());
            $category->slug = incrementSlug('categories', str::slug($request->name));
            $category->save();
            Toastr::success('Cập nhập danh mục thành công','Success');
            return redirect()->route('categories.index');

        }catch(\Exception $e){

            Toastr::error('Cập nhập danh mục thất bại','Error');
            return redirect()->back();

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return response()->json([
            'status' => 'Bạn đã xóa danh mục thành công',
        ], 200);
    }
}
