@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Customers</h1>
    <a href="{{ route('customers.create') }}" class="btn btn-primary">Create New Customer</a>

    <!-- Table with new design -->
    <div
        class="overflow-hidden w-full overflow-x-auto rounded-radius border border-outline dark:border-outline-dark mt-4">
        <table class="w-full text-left text-sm text-on-surface dark:text-on-surface-dark">
            <thead
                class="border-b border-outline bg-surface-alt text-sm text-on-surface-strong dark:border-outline-dark dark:bg-surface-dark-alt dark:text-on-surface-dark-strong">
                <tr>
                    <th scope="col" class="p-4">CustomerID</th>
                    <th scope="col" class="p-4">Name</th>
                    <th scope="col" class="p-4">Email</th>
                    <th scope="col" class="p-4">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-outline dark:divide-outline-dark">
                @foreach($customers as $customer)
                    <tr>
                        <td class="p-4">{{ $customer->id }}</td>
                        <td class="p-4">{{ $customer->name }}</td>
                        <td class="p-4">{{ $customer->email }}</td>
                        <td class="p-4">
                            <a href="{{ route('customers.show', $customer->id) }}"
                                class="whitespace-nowrap rounded-radius bg-transparent p-0.5 font-semibold text-primary outline-primary hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0 dark:text-primary-dark dark:outline-primary-dark">
                                View
                            </a>
                            <a href="{{ route('customers.edit', $customer->id) }}"
                                class="whitespace-nowrap rounded-radius bg-transparent p-0.5 font-semibold text-primary outline-primary hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0 dark:text-primary-dark dark:outline-primary-dark">
                                Edit
                            </a>
                            <form action="{{ route('customers.destroy', $customer->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="whitespace-nowrap rounded-radius bg-transparent p-0.5 font-semibold text-danger outline-danger hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0 dark:text-danger-dark dark:outline-danger-dark">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection