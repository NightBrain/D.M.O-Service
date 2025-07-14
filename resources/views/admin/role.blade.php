<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@extends('admin.layout')
@section('title', 'Role')
@section('head', 'Role')
@section('button')
    <a href="/admin/comment" class="button-33">Comment</a>&nbsp; &nbsp; &nbsp;
    <a href="/admin/working" class="button-55">Working</a>
@endsection
@section('content')

    @if (session()->has('del'))
        <script>
            Swal.fire({
                title: "Deleted!",
                text: "Your file has been deleted.",
                icon: "success",
                timer: 10000,
                timerProgressBar: true,
            });
        </script>
    @endif
    @if (session()->has('success'))
        <script>
            Swal.fire({
                title: "Succeed!",
                text: "Successfully Changed Roles",
                icon: "success",
                timer: 10000,
                timerProgressBar: true,
            });
        </script>
    @endif
    <table id="myTable" class="display">
        <thead>
            <tr>
                <th class="text-center">No.</th>
                <th class="text-center">Image</th>
                <th class="text-center">First Name</th>
                <th class="text-center">Last Name</th>
                <th class="text-center">Phone Number</th>
                <th class="text-center">usertype</th>
                <th class="text-center">Admin</th>
                <th class="text-center">User</th>
                <th class="text-center">Deleted</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($users as $item)
                <tr>


                    <td class="text-center">{{ $no }}</td>
                    <td class="text-center"><img src="{{ asset($item->image) }}" alt=""
                            class="rounded-circle float-center" style="max-width: 50px" height="50px"></td>
                    <td class="text-center">{{ $item->firstname }}</td>
                    <td class="text-center">{{ $item->lastname }}</td>
                    <td class="text-center">{{ $item->phonenumber }}</td>
                    <td class="text-center">{{ $item->usertype }}</td>
                    <td class="text-center">
                        <form method="POST" action="{{ route('role.updateadmin', ['user' => $item]) }}">
                            @csrf
                            <a class="d-none"><input type="text" name="id" value="{{ $item->id }}"></a>
                            <button type="submit" class="button-55 mt-2">Admin</button> &nbsp;&nbsp;
                        </form>
                    </td>
                    <td class="text-center">
                        <form method="POST" action="{{ route('role.updateuser', ['user' => $item]) }}">
                            @csrf
                            <a class="d-none"><input type="text" name="id" value="{{ $item->id }}"></a>
                            <button type="submit" class="button-33 mt-2">User</button> &nbsp;&nbsp;
                        </form>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('admin.destroy', ['user' => $item]) }}" class="button-44"
                            onclick="confirmation(event)">Delete</a>
                    </td>
                </tr>
                @php
                    $no++;
                @endphp
            @endforeach
        </tbody>
    </table>
    <script>
        function confirmation(ev) {
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href');
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!",
                timer: 10000,
                timerProgressBar: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = urlToRedirect;
                }
            });
        }
    </script>


@endsection
