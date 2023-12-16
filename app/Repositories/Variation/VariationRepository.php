<?php 

namespace App\Repositories\Variation;

use Illuminate\Http\Request;

use App\Models\Variation;

class VariationRepository extends VariationRepositoryInterface
{
    public function getData(){
        $variation = Variation::all();
        return $variation;
    }

    public function createOrUpdateData(Request $request){
        $data = $request->all();
        if(!$request->id){
            $variation = Variation::create($data);
        }else{
            $variation = Variation::find($request->id);
            $variation->update($data);
        }
    }

    public function deleteData(Variation $variation){
        if($variation){
            $variation->delete();
            return true;
        }else{
            return false;
        }
    }
}