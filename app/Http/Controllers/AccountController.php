<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function index()
    {
        $data = [
           'accounts' => User::all(),
            'user' => Auth::user(),
        ];

        return view('account.index', $data);
    }

    public function edit($id, Request $request)
    {
        $user = User::where('id',$id)->first();
        $user->role = $request->role;
        $user->save();
        return redirect()->back()->with('status', 'account-updated');
    }
    public function destroy(string $id,Request $request){
        $item = User::where('id',$id)->first();
        if ($request->selected == 'on') {
            $item->delete();
            return redirect()->back()->with('status', 'account-deleted');
        }
        return redirect()->back()->with('status', 'account-fail');

    }
}