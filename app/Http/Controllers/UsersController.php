<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Database\QueryException;
use Symfony\Component\HttpFoundation\Response;

class UsersController extends Controller
{
    //

    public function index()
    {
        // Méthode pour afficher tous les utilisateurs
        $users = User::all();
        return view('admin/Users/users', compact('users'));
    }



    // ... (previous code)

    public function store(Request $request)
    {
        // Validation rules for the user input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            // 'password' => 'required|string|min:8',
            'birthDay' => 'required|date',
            // 'isAdmin' => 'boolean', 
        ]);
        $users=new User();
        $users->name=$request->name;
        $users->email=$request->email;
        // $users->password=$request->Hash::make($request->input('password'));
        $users->birthDay=$request->birthDay;
        // $users->$request->input('isAdmin', 0);
        $users->save();
        return redirect()->back()->with('success', 'users added successfully');

    }


    public function edit($id){
        $users=User::find($id);
        return view("admin/Users/editusers",compact("users"));
    }
    public function update(Request $request,$id){
        $users=User::find($id);
        $users->name=$request->name;
        $users->email=$request->email;
        $users->birthDay=$request->birthDay;
        $users->update();
        return redirect("/users")->with("status","Data updated successfully");
    
    }  

    public function removusers($id){
        $users = User::find($id);
        if($users){
            $users->delete() ;
            return redirect()->back()->with('success', 'users added successfully');
        }
        else{
            echo 'you dont have the permission';
        }      
}

  public function ViewsUsers($id){
    $ViewsUsers=User::find($id);
    return view("admin/Users/viewsusers",compact("ViewsUsers"));
}
public function register(Request $request)
{
    try {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'birthDay' => 'required|date',
        ]);
        

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'birthDay' => $request->input('birthDay'),
        ]);


        return response()->json(['message' => 'User registered successfully', 'user' => $user]);
    } catch (QueryException $exception) {
      
        if ($exception->errorInfo[1] == 1062) {
            return response()->json(['message' => 'The email has already been taken.'], 400);
        }

        throw $exception;
    }
}


public function Login(Request $req)
{
$credentials = $req->only('email', 'password');

$user = User::where('email', $credentials['email'])->first();

if (!$user || !Hash::check($credentials['password'], $user->password)) {
    return response()->json([
        
        'message' => 'Invalid credentials',
    ], Response::HTTP_UNAUTHORIZED);
}


$token = $user->createToken('token')->plainTextToken;
$cookie = cookie('jwt', $token, 60 * 24);

return response([
    'user'=>$user,
    'message' => $token,

])->withCookie($cookie);
}
public function checkEmail(Request $request)
    {
        $email = $request->input('email');

        $user = User::where('email', $email)->first();

        if ($user) {
            return response()->json([
                'message' => 'Email found in the database',
            ]);
        } else {
            return response()->json([
                'message' => 'Email not found in the database',
            ]);
        }
    }
}
