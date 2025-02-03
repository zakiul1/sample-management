@extends('layouts.app')
@section('content')
<div class="bg-gray-100 py-4 flex items-center justify-between ">
<div class="pl-2">
    <h2>Cabinets</h2>
</div>
<div class="pr-2">

    <div x-data="{ modalIsOpen: false }">
        <button x-on:click="modalIsOpen = true" type="button" class="whitespace-nowrap rounded-radius border border-primary dark:border-primary-dark bg-primary px-4 py-2 text-center text-sm font-medium tracking-wide text-on-primary transition hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 dark:bg-primary-dark dark:text-on-primary-dark dark:focus-visible:outline-primary-dark">
            Open Modal
        </button>
    
        <div x-cloak x-show="modalIsOpen" x-transition.opacity.duration.200ms x-trap.inert.noscroll="modalIsOpen" x-on:keydown.esc.window="modalIsOpen = false" x-on:click.self="modalIsOpen = false" class="fixed inset-0 z-30 flex items-end justify-center bg-black/20 p-4 pb-8 backdrop-blur-xs sm:items-center lg:p-8" role="dialog" aria-modal="true" aria-labelledby="defaultModalTitle">
            <!-- Modal Dialog -->
            <div x-show="modalIsOpen" x-transition:enter="transition ease-out duration-200 delay-100 motion-reduce:transition-opacity" x-transition:enter-start="scale-0" x-transition:enter-end="scale-100" class="flex max-w-lg w-lg flex-col gap-4 overflow-hidden rounded-radius border border-outline bg-surface text-on-surface dark:border-outline-dark dark:bg-surface-dark-alt dark:text-on-surface-dark">
                <!-- Dialog Header -->
                <div class="flex items-center justify-between border-b border-outline bg-surface-alt/60 p-4 dark:border-outline-dark dark:bg-surface-dark/20">
                    <h3 id="defaultModalTitle" class="font-semibold tracking-wide text-on-surface-strong dark:text-on-surface-dark-strong">Special Offer</h3>
                    <button x-on:click="modalIsOpen = false" aria-label="close modal">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" stroke="currentColor" fill="none" stroke-width="1.4" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
    
                <!-- Dialog Body -->
                <div class="px-4 py-8"> 
                    <form action="{{ route('cabinates.store') }}" method="POST" class="w-full mx-auto shadow-lg rounded-lg">
                        @csrf <!-- CSRF Token -->
    
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Cabinet Name</label>
                            <input type="text" id="name" name="name" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                        </div>
    
                        <div class="mb-4">
                            <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                            <textarea id="location" name="location" rows="3" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                        </div>
    
                        <button type="submit" class="whitespace-nowrap rounded-radius border border-primary dark:border-primary-dark bg-primary px-4 py-2 text-center text-sm font-medium tracking-wide text-on-primary transition hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 dark:bg-primary-dark dark:text-on-primary-dark dark:focus-visible:outline-primary-dark">Submit</button>
                    </form>
                </div>
    
                <!-- Dialog Footer -->
                <div class="flex flex-col-reverse justify-between gap-2 border-t border-outline bg-surface-alt/60 p-4 dark:border-outline-dark dark:bg-surface-dark/20 sm:flex-row sm:items-center md:justify-end">
                    <button x-on:click="modalIsOpen = false" type="button" class="whitespace-nowrap rounded-radius border border-primary dark:border-primary-dark bg-primary px-4 py-2 text-center text-sm font-medium tracking-wide text-on-primary transition hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 dark:bg-primary-dark dark:text-on-primary-dark dark:focus-visible:outline-primary-dark">Close</button>
                </div>
            </div>
        </div>
    </div>
    
</div>
</div>


<div class="mt-2 overflow-hidden w-full overflow-x-auto rounded-radius border border-outline dark:border-outline-dark">
    <table class="w-full text-left text-sm text-on-surface dark:text-on-surface-dark">
        <thead class="border-b border-outline bg-surface-alt text-sm text-on-surface-strong dark:border-outline-dark dark:bg-surface-dark-alt dark:text-on-surface-dark-strong">
            <tr>
                <th scope="col" class="p-4">Cabinet Name</th>
                <th scope="col" class="p-4">Location</th>
                <th scope="col" class="p-4">Action</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-outline dark:divide-outline-dark">
            <tr>
                <td class="p-4">Cabinet 1</td>
                <td class="p-4">New York</td>
                <td class="p-4">
                    <button type="button" class="whitespace-nowrap rounded-radius bg-transparent p-0.5 font-semibold text-primary outline-primary hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0 dark:text-primary-dark dark:outline-primary-dark">Edit</button>
                </td>
            </tr>
            <tr>
                <td class="p-4">Cabinet 2</td>
                <td class="p-4">Los Angeles</td>
                <td class="p-4">
                    <button type="button" class="whitespace-nowrap rounded-radius bg-transparent p-0.5 font-semibold text-primary outline-primary hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0 dark:text-primary-dark dark:outline-primary-dark">Edit</button>
                </td>
            </tr>
            <tr>
                <td class="p-4">Cabinet 3</td>
                <td class="p-4">Chicago</td>
                <td class="p-4">
                    <button type="button" class="whitespace-nowrap rounded-radius bg-transparent p-0.5 font-semibold text-primary outline-primary hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0 dark:text-primary-dark dark:outline-primary-dark">Edit</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection