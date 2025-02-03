<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Client Reporting') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div style="text-align: right; margin-bottom: -50px;">
                        <form action="{{ route('tiket.search') }}" method="GET">
                            <label for="group_name" style="font-weight: bold; font-family: 'Poppins', sans-serif;"></label>
                            <input type="text" id="group_name" name="group_name" value="{{ request('group_name') }}"
                                style="padding: 10px; width: 250px; border: 2px solid #157BFF; border-radius: 10px; font-family: 'Poppins', sans-serif;"
                                placeholder="Enter group name...">

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

                    <div class="mb-4">
                        <a href="{{ route('user.profile') }}" class="btn-profile">My Profile</a>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover table-bordered text-sm custom-table">
                            <thead style="background-color: #007bff; color: white;">
                                <tr>
                                    <th>ID</th>
                                    <th>Group_Name</th>
                                    <th>Status</th>
                                    <th>Details</th>
                                    <th>Handle_By</th>
                                    <th>Created_at</th>
                                    <th>Update_at</th>
                                    <th>Sender</th>
                                    <th>Category ID</th>
                                    <th></th>
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
                                        <td class="align-middle">{{ $tiket->created_at }}</td>
                                        <td class="align-middle">
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
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        .custom-table {
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            font-size: 1.25rem; /* Larger font size for better readability */
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
            padding: 18px; /* Increase padding for better spacing */
        }

        .btn-profile {
            font-family: 'Poppins', sans-serif;
            display: inline-block;
            background-color: #157BFF;
            color: white;
            padding: 10px 15px;
            text-align: center;
            text-decoration: none;
            border-radius: 10px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-profile:hover {
            background-color: #157BFF;
            transform: scale(1.05);
        }

        .mb-4 {
            margin-bottom: 1rem;
        }
    </style>
</x-app-layout>
