@extends('layouts.admin')
@section('content')
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Email</th>
            <th scope="col">Job Role</th>
            <th scope="col">Department</th>
            <th scope="col">Role On</th>
        </tr>
        </thead>
        @foreach($users as $user)
        <tbody>
            <tr>
                <td>
                    {{$user->id}}
                </td>
                <td>
                    {{$user->name}}
                </td>
                <td>
                    {{$user->lastName}}
                </td>
                <td>
                    {{$user->email}}
                </td>
                <td>
                    {{$user->jobroles->job_role}}
                </td>
                <td>
                    {{$user->deptroles->dept}}
                </td>
                <td>
                    {{$user->role_on}}
                </td>
            </tr>
        </tbody>
        @endforeach




@endsection