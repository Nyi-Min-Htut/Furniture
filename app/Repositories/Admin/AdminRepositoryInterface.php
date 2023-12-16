<?php 

namespace App\Repositories\Admin;

use Illuminate\Http\Request;

use App\Models\Admin;

interface AdminRepositoryInterface{

    

    public function index();

    public function signin(Request $request);

    public function createOrUpdate(Request $request);

    public function delete($admin);

}
