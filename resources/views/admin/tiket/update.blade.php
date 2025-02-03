<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Update Reporting') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-3xl font-bold mb-6 text-center">Update Reporting</h1>
                    <form action="{{ route('admin/tikets/update', $tiket->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="space-y-4">
                            <!-- Group Name -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700">Group Name</label>
                                <input type="text" name="group_name"
                                    class="w-full p-3 border rounded-md border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                                    placeholder="Group Name" value="{{ $tiket->group_name }}">
                                @error('group_name')
                                    <span class="text-sm text-red-600">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Category ID -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700">Category ID</label>
                                <input type="text" name="category_id"
                                    class="w-full p-3 border rounded-md border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                                    placeholder="Category ID" value="{{ $tiket->category_id }}">
                            </div>

                            <!-- Status -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700">Status</label>
                                <input type="text" name="status"
                                    class="w-full p-3 border rounded-md border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                                    placeholder="Status" value="{{ $tiket->status }}">
                            </div>

                            <!-- Details -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700">Details</label>
                                <input type="text" name="details"
                                    class="w-full p-3 border rounded-md border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                                    placeholder="Details" value="{{ $tiket->details }}">
                            </div>

                            <!-- Handled By -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700">Handled By</label>
                                <input type="text" name="handled_by"
                                    class="w-full p-3 border rounded-md border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                                    placeholder="Handled By" value="{{ $tiket->handled_by }}">
                            </div>

                            <!-- Sender -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700">Sender</label>
                                <input type="text" name="sender"
                                    class="w-full p-3 border rounded-md border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                                    placeholder="Sender" value="{{ $tiket->sender }}">
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center">
                                <button type="submit"
                                    class="w-full bg-blue-500 text-white p-4 text-lg rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                                    Update Reporting
                                </button>
                            </div>
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

        input[type="text"],
        textarea {
            transition: all 0.3s ease-in-out;
        }

        input:focus,
        textarea:focus {
            border-color: #157BFF;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
        }

        button {
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #157BFF;
        }

        .text-sm {
            font-size: 0.875rem;
        }

        .text-center {
            text-align: center;
        }

        .space-y-4>*+* {
            margin-top: 1rem;
        }

        .text-3xl {
            font-size: 2rem;
        }
    </style>
</x-app-layout>
