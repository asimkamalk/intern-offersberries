<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function list()
    {
        $allAccounts = Account::all();
        return view('account.index', compact('allAccounts'));
    }

    public function index()
    {
        return view('account.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:accounts',
            'phone' => 'required|numeric|unique:accounts',
            'password' => 'required|min:6',
            'role' => 'required|in:customer,vendor',
            'terms' => 'required|accepted',
        ]);
        Account::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'terms' => $request->has('terms'),

        ]);
        return redirect()->back()->with('success', 'Account created successfully!');
    }
    public function show($id)
    {
        $account = Account::findOrFail($id); // Find the account or return 404
        return view('account.show', compact('account'));
    }
}
