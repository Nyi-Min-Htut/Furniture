<?php 

namespace App\Repositories\Admin;

use App\Actions\Auth\APILoginAction;
use Illuminate\Http\Request;

use App\Models\Admin;

class AdminRepository implements AdminRepositoryInterface{

    public function index(){
        $admins = Admin::all();
        return response()->json($admins);
    }

    public function signin(Request $request){
        $loginAction = new APILoginAction('username',$request->username,$request->password,'App\Models\Admin');
        
        $loginResponse = $loginAction->run('admin_token');
        return response()->json($loginResponse);
    }

    public function createOrUpdate(Request $request){
        $data = $request->all();
        if($request->id)
        {
            $admin = Admin::find($request->id);
            $admin->update($data);
            
        }else
        {
            if($request->password == $request->confirm_password){
                $admin = Admin::create($data);
            }else{
                return response()->json(['message' => "Your password not match"]);
            }
        }

        return response()->json($admin);
    }

    public function delete($admin){
        $admin = Admin::find($admin);
        if(!$admin || $admin == null)
        {
            return response()->json(['message' => 'No data found']);
        }else{
           $admin->delete();
           return response()->json(['message' => ' Admin Deleted']);
        }
    }
}