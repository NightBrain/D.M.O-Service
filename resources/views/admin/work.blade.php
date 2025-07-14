<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@extends('admin.layout')
@section('title', 'Yourwork')
@section('head', 'YOUR WORK')
@section('content')
    <style>
        .text {
            width: 330px;
            word-wrap: break-word;
            padding: 5px;
        }
    </style>
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
    @if (session()->has('update'))
        <script>
            Swal.fire({
                title: "Successed!",
                text: "Data updated successfully.",
                icon: "success",
                timer: 10000,
                timerProgressBar: true,
            });
        </script>
    @endif
    @if (session()->has('success'))
    <script>
        Swal.fire({
            title: "Successfully",
            text: "Successfully received work",
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
                <th class="text-center">Owner Name</th>
                <th class="text-center">phone number</th>
                <th class="text-center">Devices</th>
                <th class="text-center">Problem</th>
                <th class="text-center">Status</th>
                <th class="text-center">Time receive </th>
                <th class="text-center">Time Return</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($mrepair as $item)
                <tr>
                    <form method="POST" action="{{ route('repair.show', ['user' => $item]) }}">
                        @csrf
                        <td class="text-center">{{ $no }}</td>
                        <td class="text-center">{{ $item->nickname_c }}</td>
                        <td class="text-center">+66 {{ $item->phonenumber_c }} <input class="d-none" type="text" name="phonenumber_c" value="{{ $item->phonenumber_c }}"></td>
                        <td class="text-center">{{ $item->devices_c }}</td>
                        <td>
                            <div class="text">
                                {{ $item->problem_c }}
                            </div>
                        </td>
                        <td class="text-center"><button type="submit" style="border: 0">
                                @php
                                    $status = $item->status_t;
                                @endphp
                                @if ($status == 1)
                                    <div style="  border: 0; background-color: #ff6a6a; border-radius: 30px; color: #530808"
                                        class="p-1">
                                        แจ้งซ่อม
                                    </div>
                                @elseif ($status == 2)
                                    <div style="  border: 0; background-color: #fbf5c2; border-radius: 30px; color: #454901"
                                        class="p-1">
                                        ช่างรับงานแล้ว
                                    </div>
                                @elseif ($status == 3)
                                    <div style="  border: 0; background-color: #ffb06a; border-radius: 30px; color: #532308"
                                        class="p-1">
                                        นัดวันส่งซ่อม
                                    </div>
                                @elseif ($status == 4)
                                    <div style="  border: 0; background-color: rgb(167, 236, 137); border-radius: 30px; color: #029600"
                                        class="p-1">
                                        ช่างประเมินอาการ
                                    </div>
                                @elseif ($status == 5)
                                    <div style="  border: 0; background-color: rgb(135, 250, 195); border-radius: 30px; color: #00513a"
                                        class="p-1">
                                        รออะไหล่
                                    </div>
                                @elseif ($status == 6)
                                    <div style="  border: 0; background-color: #adfaf4; border-radius: 30px; color: #004b3d"
                                        class="p-1">
                                        กำลังซ่อม
                                    </div>
                                @elseif ($status == 7)
                                    <div style="  border: 0; background-color: rgb(170, 200, 255); border-radius: 30px; color: #00103d"
                                        class="p-1">
                                        นัดวันส่งคืน
                                    </div>
                                @endif
                            </button> </td>    </form>

                        <td class="text-center"> {{ $item->time_receive_t }}</td>
                        <td class="text-center"> {{ $item->time_return_t }}</td>
                        <td class="text-center">
                            <a href="{{ route('repair.edit', ['user' => $item]) }}" class="button-55">Update</a>
                            &nbsp;&nbsp;
                            <a href="{{ route('repair.destroy', ['user' => $item]) }}" class="button-44"
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
