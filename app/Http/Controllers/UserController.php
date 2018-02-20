<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class UserController extends Controller
{

    use RegistersUsers;


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    public function index(){
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function create(){

        return view('users.create');
    }

    public function store(Request $request){
        $input = $request->all();

        User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => bcrypt($input['password']),
        ]);
        return redirect(route('users.index'));
    }

    public function show($id){
        dd('show');
    }

    public function edit(User $user){

        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id){

        $input = $request->all();

        $user = User::find($id);

        $input['password'] = isset($input['password']) ? bcrypt($input['password']) : $user->password;

        if($user){
            $user->update($input);
        }

        return redirect(route('users.index'));
    }

    public function destroy($id){
        $user = User::find($id);
        if ($user){
            $user->delete();
        }
        return redirect(route('users.index'));


    }
}
