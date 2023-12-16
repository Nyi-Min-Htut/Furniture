<?php 

namespace App\Repositories\Category;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Category;

interface CategoryRepositoryInterface{

    public function index();

    public function createOrUpdate(Request $request);

    public function delete(Category $category);

}