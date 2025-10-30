<x-app-layout>
    <x-slot name="header">
    <h1>Users List</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Roles</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @foreach ($user->roles as $role)
                            {{ $role->name }}<br>
                        @endforeach
                    </td>
                    <td><a href="{{ route('users.edit', $user) }}">Assign Role</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </x-app-layout>
