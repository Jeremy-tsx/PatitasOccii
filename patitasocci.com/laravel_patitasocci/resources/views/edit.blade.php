<x-app-layout>
    <x-slot name="header">
    <h1>Assign Role to {{ $user->name }}</h1>
    <form action="{{ route('users.update', $user) }}" method="POST">
        @csrf
        <label for="role">Role:</label>
        <select name="role_id" id="role">
             @foreach ($roles as $role)
                 <option value="{{ $role->id }}">{{ $role->name }}</option> 
            @endforeach 
        </select>
        <button type="submit">Assign Role</button>
    </form>
    </x-app-layout>
