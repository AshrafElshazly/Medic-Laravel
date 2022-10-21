<?php 

namespace App\Http\Repositories\Api;

use App\Http\Interfaces\Api\AuthInterface;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Traits\ApiResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthRepository implements AuthInterface
{
    use ApiResponseTrait;

    public function register(Request $request)
    {
        $validatior = Validator::make($request->only('name','email','password'),[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6'
        ]);

        if($validatior->fails()){
            return $this->apiResponse(403,null,$validatior->errors());
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $token = $user->createToken('ApiMedicProject')->accessToken;
        $data = $this->respond($user, $token);

        return $this->apiResponse(200, 'User created successfully', null, $data);
    }

    public function login(Request $request)
    {
        
        $validatior = Validator::make($request->all(),[
            'email' => 'required|string|email|max:255|exists:users',
            'password' => 'required|string|min:6'
        ]);
        
        if($validatior->fails()){
            return $this->apiResponse(403,null,$validatior->errors());
        }

        $credentials = $request->only('email', 'password');
        
        if (! Auth::attempt($credentials)) {
            return $this->apiResponse(400,'not found');
        }
        $user = Auth::user();
        $token = $user->createToken('ApiMedicProject')->accessToken;
        $data = $this->respond($user, $token);

        return $this->apiResponse(200, 'login', null, $data);
    }

    public function logout(Request $request)
    {
        $token = $request->user()->token();
        $token->revoke();
        return $this->apiResponse(200, 'You have successfully logged out');
    }

    protected function respond($log, $token)
    {
        $data = [
            'user' => $log,
            'authorisation' => [
                'token' => $token,
                'token_type' => 'bearer',
            ]
            ];
        return $data;
    }

}