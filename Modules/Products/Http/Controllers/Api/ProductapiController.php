<?php
namespace Modules\Products\Http\Controllers\API;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\User; 
use Illuminate\Support\Facades\Auth; 
use Validator;
use Modules\Products\Entities\Product;

class ProductapiController extends Controller 
{
public $successStatus = 200;
/** 
     * login api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function login(){ 
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('MyApp')-> accessToken; 
            return response()->json(['success' => $success], $this-> successStatus); 
        } 
        else{ 
            return response()->json(['error'=>'Unauthorised'], 401); 
        } 
    }

/** 
     * getlist api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function getlist() 
    { 
        // $user = Auth::user(); 
        // return response()->json(['success' => $user], $this-> successStatus); 
        $product = Product::paginate();
        return response()->json($product, 404);
    } 
}