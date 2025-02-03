<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Reporting') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-3xl font-bold mb-6 text-center">Create Reporting</h1> <!-- Added the title here -->

                    @if (session()->has('error'))
                        <div class="bg-red-500 text-white p-3 rounded mb-4">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{ route('admin/tikets/save') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="space-y-4">
                            <!-- Group -->
                            <div class="mb-4">
                                <input type="text" name="group_name" class="form-control w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Group Name">
                                @error('group_name')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Category ID -->
                            <div class="mb-4">
                                <input type="text" name="category_id" class="form-control w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Category ID">
                                @error('category_id')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Status -->
                            <div class="mb-4">
                                <label for="status" class="block text-sm font-medium text-gray-700"></label>
                                <select class="form-control w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" id="status" name="status" required>
                                    <option value="" disabled selected>Select Status</option>
                                    <option value="OPEN">OPEN</option>
                                    <option value="CLOSE">CLOSE</option>
                                </select>
                                @error('status')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Details -->
                            <div class="mb-4">
                                <input type="text" name="details" class="form-control w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Details">
                                @error('details')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Handle -->
                            <div class="mb-4">
                                <input type="text" name="handled_by" class="form-control w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Handled By">
                                @error('handled_by')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Sender -->
                            <div class="mb-4">
                                <input type="text" name="sender" class="form-control w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Sender">
                                @error('sender')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center">
                                <button type="submit"
                                    class="w-full bg-blue-500 text-white p-4 text-lg rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                                    Create Reporting
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Custom Styling for the Form */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }

        .text-3xl {
            font-size: 2rem;
        }

        button {

            background-color: #157BFF;
        }

        button:hover {
            transition:  0.3s ease;
            background-color: #2c6abd

        }
    </style>
</x-app-layout>
