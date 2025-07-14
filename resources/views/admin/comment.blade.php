<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@extends('admin.layout')
@section('title', 'Comment')
@section('head', 'Comment')
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
    <table class="table">
        <thead>
            <tr>
                <th class="text-center">No.</th>
                <th class="text-center">Imageuser</th>
                <th class="text-center">Nickname</th>
                <th class="text-center">Imagereview</th>
                <th class="text-center">Comment</th>
                <th class="text-center">Deleted</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($user as $item)
                <tr>


                    <td class="text-center">{{ $no }}</td>
                    <td class="text-center"><img src="{{ asset($item->imageuser) }}" alt=""
                            class="rounded-circle float-center" style="width: 50px; height: 50px; object-fit: cover;"></td>
                    <td class="text-center">{{ $item->nickname_c }}</td>
                    <td class="text-center"><img src="{{ asset($item->imagereview) }}" alt=""
                            class="rounded-circle float-center" style="width: 50px; height: 50px; object-fit: cover;"></td>
                    <td class="text-center">
                        <textarea class="rounded-4" type="text" rows="3">{{ $item->comment }}</textarea>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('comment.destroy', ['user' => $item]) }}" class="button-44"
                            onclick="confirm(event)">Delete</a>
                    </td>
                </tr>
                @php
                    $no++;
                @endphp
            @endforeach
        </tbody>
    </table>
    <script>
        function confirm(ev) {
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
