<x-app-layout>
    @section('title', 'Client Reporting')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Client Reporting') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <!-- Search and Create Reporting Buttons -->
                    <div class="flex justify-between items-center mb-4">
                        <a href="{{ route('admin/tikets/create') }}" class="btn btn-primary text-white"
                            style="background-color: #007bff; border-color: #007bff; padding: 10px 20px; font-size: 1rem; border-radius: 10px; font-family: 'Poppins', sans-serif;">Create
                            Reporting</a>

                            <form action="{{ route('tiket.search') }}" method="GET">
                                <!-- Group Name Field -->
                                <label for="group_name" style="font-weight: bold; font-family: 'Poppins', sans-serif;"></label>
                                <input type="text" id="group_name" name="group_name" value="{{ request('group_name') }}"
                                    style="padding: 10px; width: 250px; border: 2px solid #157BFF; border-radius: 10px; font-family: 'Poppins', sans-serif;"
                                    placeholder="Enter group name...">

                                <!-- Category ID Field -->
                                <label for="category_id" style="font-weight: bold; font-family: 'Poppins', sans-serif; margin-left: 10px;"></label>
                                <input type="number" id="category_id" name="category_id" value="{{ request('category_id') }}"
                                    style="padding: 10px; width: 200px; border: 2px solid #157BFF; border-radius: 10px; font-family: 'Poppins', sans-serif;"
                                    placeholder="Enter category ID...">


                                <button type="submit"
                                    style="
                                        background-color: #007bff;
                                        color: white;
                                        padding: 10px 20px;
                                        border: none;
                                        border-radius: 10px;
                                        font-size: 17px;
                                        cursor: pointer;
                                        font-family: 'Poppins', sans-serif;
                                        transition: background-color 0.3s ease;"
                                    onmouseover="this.style.backgroundColor='#0056b3';"
                                    onmouseout="this.style.backgroundColor='#157BFF';">
                                    Find
                                </button>
                            </form>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover table-bordered text-sm custom-table">
                            <thead style="background-color: #007bff; color: white;">
                                <tr>
                                    <th>ID</th>
                                    <th>Group Name</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Details</th>
                                    <th>Handled_By</th>
                                    <th>Sender</th>
                                    <th>Created_At</th>
                                    <th>Updated_At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($tikets as $tiket)
                                    <tr>
                                        <td class="align-middle">{{ $loop->iteration }}</td>
                                        <td class="align-middle">{{ $tiket->group_name }}</td>
                                        <td class="align-middle">{{ $tiket->category->category_name ?? '-' }}</td>
                                        <td class="align-middle">{{ $tiket->status }}</td>
                                        <td class="align-middle">{{ $tiket->details }}</td>
                                        <td class="align-middle">{{ $tiket->handledBy->name ?? '-' }}</td>
                                        <td class="align-middle">{{ $tiket->sender }}</td>
                                        <td class="align-middle">{{ $tiket->created_at }}</td>
                                        <td class="align-middle">{{ $tiket->updated_at }}</td>
                                        <td class="align-middle">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="{{ route('admin/tikets/edit', ['id' => $tiket->id]) }}"
                                                    type="button" class="btn btn-secondary">Edit</a>
                                                <a href="{{ route('admin/tikets/delete', ['id' => $tiket->id]) }}"
                                                    type="button" class="btn btn-danger">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="10" class="text-center">Data not found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        .custom-table {
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .custom-table th:first-child {
            border-top-left-radius: 15px;
        }

        .custom-table th:last-child {
            border-top-right-radius: 15px;
        }

        .custom-table tr:last-child td:first-child {
            border-bottom-left-radius: 15px;
        }

        .custom-table tr:last-child td:last-child {
            border-bottom-right-radius: 15px;
        }

        .custom-table th,
        .custom-table td {
            font-size: 1rem;
            padding: 18px;
        }
    </style>
</x-app-layout>
