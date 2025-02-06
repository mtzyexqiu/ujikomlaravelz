<x-app-layout>
    @section('title', 'User List')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('User List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="table-responsive flex justify-center">
                        <table class="table table-hover table-bordered text-sm custom-table w-full">
                            <thead style="background-color: #007bff; color: white;">
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Nickname</th>
                                    <th class="text-center">Email Address</th>
                                    <th class="text-center">Usertype</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td class="align-middle text-center">{{ $loop->iteration }}</td>
                                        <td class="align-middle text-center">{{ $user->name }}</td>
                                        <td class="align-middle text-center">{{ $user->email }}</td>
                                        <td class="align-middle text-center">{{ $user->usertype }}</td>
                                    </tr>
                                @endforeach
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

        .custom-table a {
            text-decoration: none;
        }
    </style>
</x-app-layout>
