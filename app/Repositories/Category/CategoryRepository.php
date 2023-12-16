<?php 

namespace App\Repositories\Category;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;



class CategoryRepository implements CategoryRepositoryInterface{
 
    public function index(){
        $categories = Category::all();
        return response()->json($categories);
    }

    public function createOrUpdate(Request $request){
        $data = $request->all();
        if(!$request->id){
            $category = Category::create($data);

           
        }else{
            $category = Category::find($request->id);
            $category->update($data);
        }

        return $category;
    }

    public function delete(Category $category){
        // if(!$category || $category==null){
        //     $category->delete();
        //     return true;
        // }else{
        //     return false;
        // }
    }

 
}