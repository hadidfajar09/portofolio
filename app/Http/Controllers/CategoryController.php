<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function allCat()
    {
        // $categories = DB::table('categories')
        //     ->join('users', 'categories.user_id', 'users.id')
        //     ->select('categories.*', 'users.name')
        //     ->latest()->paginate(5);

        $categories = Category::latest()->paginate(5);
        $trash = Category::onlyTrashed()->latest()->paginate(3);
        // $categories = DB::table('categories')->latest()->paginate(5);

        return view('admin.allcat', compact('categories', 'trash'));
    }

    public function addCat(Request $request)
    {

        $validasi = $request->validate(
            [
                'name' => 'required|unique:categories|max:255'
            ],
            [
                'name.required' => 'Tolong isi nama kategori',
                'name.max' => 'Karakter Terlalu panjang'
            ]
        );

        Category::insert([
            'name' => $request->name,
            'user_id' => Auth::user()->id,
            'created_at' => Carbon::now()
        ]);

        // $category = new Category;
        // $category->name = $request->name;
        // $category->user_id = Auth::user()->id;
        // $category->save();

        // $data = array();
        // $data['name'] = $request->name;
        // $data['user_id'] = Auth::user()->id;

        // DB::table('categories')->insert($data);


        return redirect()->back()->with('success', 'Kategori Sukses Ditambahkan');
    }

    public function editCat($id)
    {
        // $categories = Category::find($id);

        $categories = DB::table('categories')->where('id', $id)->first();
        return view('admin.edit', compact('categories'));
    }

    public function updateCat(Request $request, $id)
    {
        // $update = Category::find($id)->update([
        //     'name' => $request->name,
        //     'user_id' => Auth::user()->id
        // ]);

        $data = array();
        $data['name'] = $request->name;
        $data['user_id'] = Auth::user()->id;

        DB::table('categories')->where('id', $id)->update($data);

        return redirect()->route('all.category')->with('success', 'Kategori Sukses Diupdate');
    }

    public function softCat($id)
    {
        $delete = Category::find($id)->delete();
        return redirect()->back()->with('success', 'Kategori Dipindahkan ke Trash');
    }

    public function restoreCat($id)
    {
        $delete = Category::withTrashed()->find($id)->restore();
        return redirect()->back()->with('success', 'Kategori Dipindahkan ke Kategori');
    }

    public function deleteCat($id)
    {
        $delete = Category::onlyTrashed()->find($id)->forceDelete();
        return redirect()->back()->with('success', 'Kategori Permanen Terhapus');
    }
}
