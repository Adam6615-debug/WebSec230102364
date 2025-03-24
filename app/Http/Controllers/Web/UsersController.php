<?php
namespace App\Http\Controllers\Web;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class UsersController extends Controller {
 public function register(Request $request) {
 return view('users.register');
 }
 public function login(Request $request) {
    return view('users.login');
    }
    public function doLogin(Request $request) {
        if(!Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        return redirect()->back()->withInput($request->input())->withErrors('Invalid login information.');
        $user = User::where('email', $request->email)->first();
        Auth::setUser($user);
        return redirect("/");
        }
    public function doLogout(Request $request) {
        Auth::logout();
        return redirect("/");
    }
    public function doRegister(Request $request) {
        // Debugging: See request data before processing
        Log::info('Received request data:', $request->all());
    
        if ($request->password !== $request->confirm_password) {
            return redirect()->route('register', ['error' => 'Confirm password not matched.']);
        }
    
        if (!$request->email || !$request->name || !$request->password) {
            return redirect()->route('register', ['error' => 'Missing registration info.']);
        }
    
        // Ensure role is set (default to 'user' if missing)
        $role = $request->role ?? 'user';
    
        if (User::where('email', $request->email)->first()) {
            return redirect()->route('register', ['error' => 'User already exists.']);
        }
    
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = $role;
        $user->save();
    
        return redirect("/");
    }
    public function edit(Request $request, Product $product = null) {
        if(!auth()->check()) return redirect()->route('login');
        $product = $product??new Product();
        return view('products.edit', compact('product'));
        }
    
}

 ?>