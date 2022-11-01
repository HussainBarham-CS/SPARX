<?php

namespace App\Http\Controllers\Auth;

use App\Models\Shop;
use App\Models\User;
use App\Models\UserType;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'shopName' => ['required','string','max:50'],
            'cityName' => ['required','string','max:20'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $data = DB::table('users')->where('email',$request->email)->first();

        $shop = Shop::create([
            'shopName' => $request->shopName,
            'city' => $request->cityName,
            'user_id' => $data->id,
        ]);

        $type = UserType::create([
            'type' => 'manager',
            'user_id' => $data->id,
        ]);



        //event(new Registered($user));

        Auth::login($user);

        $shop = User::find($data->id)->shop;

        $products = DB::table('products')->where('shop_id',$data->id)->get();

        $productNum = count($products);

        $orders = DB::table('orders')->where('shop_id',$data->id)->get();

        $orderNum = count($orders);

        return view('adminDash',compact('shop','productNum','orderNum','orders'));
    }



}
