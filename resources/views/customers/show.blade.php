@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-semibold mb-6">Customer Details</h1>
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h5 class="text-xl font-semibold mb-4">{{ $customer->name }}</h5>
        <p class="text-sm text-gray-700 mb-4">Email: {{ $customer->email }}</p>

        <div class="flex space-x-4">
            <!-- Edit Button -->
            <a href="{{ route('customers.edit', $customer->id) }}"
                class="inline-block bg-yellow-500 text-white py-2 px-4 rounded-lg hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                Edit
            </a>

            <!-- Delete Button -->
            <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="inline-block bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">
                    Delete
                </button>
            </form>
        </div>
    </div>
</div>
@endsection