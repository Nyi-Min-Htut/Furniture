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
       

        // $category = Category::find($id);
        // if(!$category || $category == null)
        // {
        //     return response()->json(['message' => 'No data found']);
        // }else
        // {
        //     $category->delete();

        //     return response()->json(['message' => 'Your Category Delete']);
        // }
    }
}