@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold text-blue-800 text-center mt-8">Account Opening</h1>

    <div class="flex justify-center mt-10">
        <div class="w-full max-w-3xl bg-white shadow-lg rounded-xl p-8 border border-amber-200">
            <form action="{{ route('account.store') }}" method="POST">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    {{-- Name --}}
                    <div class="flex flex-col">
                        <label for="name" class="text-gray-700 font-semibold mb-1">Name</label>
                        <input type="text" name="name" id="name"
                            class="rounded-xl border px-4 py-2 focus:outline-none focus:ring focus:border-blue-300 shadow-sm">
                    </div>

                    {{-- Email --}}
                    <div class="flex flex-col">
                        <label for="email" class="text-gray-700 font-semibold mb-1">Email</label>
                        <input type="email" name="email" id="email"
                            class="rounded-xl border px-4 py-2 focus:outline-none focus:ring focus:border-blue-300 shadow-sm">
                    </div>

                    {{-- Phone --}}
                    <div class="flex flex-col">
                        <label for="phone" class="text-gray-700 font-semibold mb-1">Phone</label>
                        <input type="number" name="phone" id="phone"
                            class="rounded-xl border px-4 py-2 focus:outline-none focus:ring focus:border-blue-300 shadow-sm">
                    </div>

                    {{-- Password --}}
                    <div class="flex flex-col">
                        <label for="password" class="text-gray-700 font-semibold mb-1">Password</label>
                        <input type="password" name="password" id="password"
                            class="rounded-xl border px-4 py-2 focus:outline-none focus:ring focus:border-blue-300 shadow-sm">
                    </div>

                    {{-- Role Dropdown --}}
                    <div class="flex flex-col">
                        <label for="role" class="text-gray-700 font-semibold mb-1">Account Type</label>
                        <select name="role" id="role"
                            class="rounded-xl border px-4 py-2 focus:outline-none focus:ring focus:border-blue-300 shadow-sm">
                            <option value="">Select Type</option>
                            <option value="customer">Customer</option>
                            <option value="vendor">Vendor</option>

                        </select>
                    </div>

                    {{-- Business Name --}}
                    <div class="flex flex-col">
                        <label for="name" class="text-gray-700 font-semibold mb-1">Business Name</label>
                        <input type="text" name="business" id="Business"
                            class="rounded-xl border px-4 py-2 focus:outline-none focus:ring focus:border-blue-300 shadow-sm">
                    </div>

                    {{-- Terms and Conditions --}}
                    <div class="flex items-start mt-4">
                        <input type="checkbox" name="terms" id="terms"
                            class="mt-1 mr-2 w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring focus:ring-blue-300">

                        <label for="terms" class="text-gray-700 text-sm">
                            I agree to the <a href="#" class="text-blue-500 underline hover:text-blue-700">Terms and
                                Conditions</a>
                        </label>
                    </div>




                </div>

                {{-- Submit Button --}}
                <div class="mt-8 text-center">
                    <button type="submit"
                        class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-6 rounded-xl shadow-md transition-all">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection