<?php

namespace App\Http\Controllers\Management;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin;

use App\Repositories\Admin\AdminRepositoryInterface;

class AdminAuthController extends Controller
{
    private $adminRepo;
    public function __construct(AdminRepositoryInterface $adminRepo)
    {
        $this->adminRepo = $adminRepo;
    }
    public function login(Request $request){
        $admin = $this->adminRepo->signin($request);
        return $admin;
    }
    
    public function registerOrUpdate(Request $request){
        $admin = $this->adminRepo->createOrUpdate($request);
        return $admin;

    }

    public function adminDelete($admin){
        $admin = $this->adminRepo->delete( $admin);
        return $admin;
    }

    
}
