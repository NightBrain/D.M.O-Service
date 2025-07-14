<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@extends('admin.layout')
@section('title', 'Dashboard | Admin')
@section('head')
    Welcome Admin : {{ $nickname }} : To D.M.O Service
@endsection
@section('content')
 <style>
        .text {
            width: 500px;
            word-wrap: break-word;
            padding: 5px;
        }
    </style>
    <table id="myTable" class="display">
        <thead>
            <tr>
                <th class="d-none">id</th>
                <th class="text-center">No.</th>
                <th class="text-center">Owner Name</th>
                <th class="text-center">Phonenumber</th>
                <th class="text-center">Devices</th>
                <th class="text-center">Problem</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($mrepair as $item)
                <tr>
                    <form method="POST" action="{{ route('admin.upacce', ['user' => $item]) }}" id="myForm">
                        @csrf
                        <td class="d-none"><input type="text" name="id" value="{{ $item->id }}"></td>
                        <td class="text-center">{{ $no }}</td>
                        <td class="text-center">{{ $item->nickname_c }}</td>
                        <td class="text-center">+66 {{ $item->phonenumber_c }}</td>
                        <td class="text-center">{{ $item->devices_c }}</td>
                        <td>
                            <div class="text">
                                {{ $item->problem_c }}
                            </div>
                        </td>
                        <td class="text-center">
                            <a type="submit" class="button-33" onclick="clicked(event)">Accept</a>
                        </td>
                    </form>
                </tr>
                @php
                    $no++;
                @endphp
            @endforeach
        </tbody>
    </table>
    <script>
        function clicked(e) {
            Swal.fire({
                title: "Are you sure?",
                text: "you will accept this job or not?",
                icon: "question",
                showCancelButton: true,
                confirmButtonColor: "#00e673",
                cancelButtonColor: "#bebebe",
                confirmButtonText: "I Accept The Job!",
                timer: 10000,
                timerProgressBar: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById("myForm").submit();
                }
            });
        }
    </script>
@endsection
