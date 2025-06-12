@extends('layouts.app')

@section('content')
    <div class="p-5">
        <h2 class="text-2xl font-bold mb-4">Account Details</h2>

        <div class="bg-white p-4 rounded shadow w-96">
            <p><strong>Name:</strong> {{ $account->name }}</p>
            <p><strong>Email:</strong> {{ $account->email }}</p>
            <p><strong>Phone:</strong> {{ $account->phone }}</p>
            <p><strong>Role:</strong> {{ $account->role }}</p>
            <p><strong>Accepted Terms:</strong> {{ $account->terms ? 'Yes' : 'No' }}</p>
        </div>
    </div>
@endsection