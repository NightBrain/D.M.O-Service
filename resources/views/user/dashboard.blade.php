<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
    .gd {
        font-size: 40px;
        font-family: Arial, Helvetica, sans-serif;
        background: linear-gradient(to right, #6366F1, #A855F7, #EC4899);
        -webkit-text-fill-color: transparent;
        -webkit-background-clip: text;
    }
    .text {
            width: 350px;
            word-wrap: break-word;
            padding: 5px;
        }
</style>
@extends('user.layout')
@section('title', 'Dashboard | User')
@section('head')
    Welcome User : {{ $nickname }} : To D.M.O Service
@endsection
@section('button')
    <a class="button-85" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Repair Now <i class='bx bxs-wrench bx-tada' style='color:#ffff'></i></a>
@endsection
@section('content')
    @if (session()->has('success'))
        <script>
            Swal.fire({
                title: "Succeed!",
                text: "Repair Request Successfully Submitted",
                icon: "success",
                timer: 10000,
                timerProgressBar: true,
            });
        </script>
    @endif
    @if (session()->has('update'))
        <script>
            Swal.fire({
                title: "Succeed!",
                text: "Successfully edited information",
                icon: "success",
                timer: 10000,
                timerProgressBar: true,
            });
        </script>
    @endif
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
    @if ($errors->any())
        <script>
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
                timer: 10000,
                timerProgressBar: true,
            });
        </script>
    @endif
    <table id="myTable" class="display">
        <thead>
            <tr>
                <th class="text-center">No.</th>
                <th class="text-center">Devices</th>
                <th class="text-center d-none">pn</th>
                <th class="text-center d-none">pb</th>
                <th class="text-center">Problem</th>
                <th class="text-center">Status</th>
                <th class="text-center">Time receive </th>
                <th class="text-center">Time Return</th>
                <th class="text-center">Technician</th>
                <th class="text-center">phone number</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($mrepair as $item)
                <tr>
                    <form method="POST" action="{{ route('repairu.show', ['user' => $item]) }}">
                        @csrf
                        <td class="text-center">{{ $no }}</td>
                        <td class="text-center">{{ $item->devices_c }}</td>
                        <td class="d-none"><input type="text" name="phonenumber_c" value="{{ $item->phonenumber_c }}">
                        </td>
                        <td class="d-none"><input type="text" name="problem_c" value="{{ $item->problem_c }}"></td>
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
                                    <div style="background-color: #ff6a6a; border-radius: 30px; color: #530808"
                                        class="p-1">
                                        แจ้งซ่อม
                                    </div>
                                @elseif ($status == 2)
                                    <div style="background-color: #fbf5c2; border-radius: 30px; color: #454901"
                                        class="p-1">
                                        ช่างรับงานแล้ว
                                    </div>
                                @elseif ($status == 3)
                                    <div style="background-color: #ffb06a; border-radius: 30px; color: #532308"
                                        class="p-1">
                                        นัดวันส่งซ่อม
                                    </div>
                                @elseif ($status == 4)
                                    <div style="background-color: rgb(167, 236, 137); border-radius: 30px; color: #029600"
                                        class="p-1">
                                        ช่างประเมินอาการ
                                    </div>
                                @elseif ($status == 5)
                                    <div style="background-color: rgb(135, 250, 195); border-radius: 30px; color: #00513a"
                                        class="p-1">
                                        รออะไหล่
                                    </div>
                                @elseif ($status == 6)
                                    <div style="background-color: #adfaf4; border-radius: 30px; color: #004b3d"
                                        class="p-1">
                                        กำลังซ่อม
                                    </div>
                                @elseif ($status == 7)
                                    <div style="background-color: rgb(170, 200, 255); border-radius: 30px; color: #00103d"
                                        class="p-1">
                                        นัดวันส่งคืน
                                    </div>
                                @endif
                            </button></td>
                    </form>
                    <td class="text-center">{{ $item->time_receive_t }}</td>
                    <td class="text-center">{{ $item->time_return_t }}</td>
                    <td class="text-center">{{ $item->nickname_t }}</td>
                    <td class="text-center">+66 {{ $item->phonenumber_t }}</td>
                    <td class="text-center">
                        <a href="{{ route('user.edit', ['user' => $item]) }}" class="button-55">Edit</a> &nbsp;&nbsp;
                        <a href="{{ route('user.destroy', ['user' => $item]) }}" class="button-44"
                            onclick="confirmation(event)">Delete</a>
                    </td>
                </tr>
                @php
                    $no++;
                @endphp
            @endforeach
        </tbody>
    </table>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-4" style="background-color: #18191bf1; border-radius: 30px;">
                <div class="modal-body">
                    <div class="text-end">
                        <a type="button" class="fs-1" data-bs-dismiss="modal" aria-label="Close"
                            style="color: #CCD0D2;"><i class='bx bx-x'></i></a><br>
                        <h1 class="gd text-center mt-3 fs-4" style="font-weight: bold;">Report a Problem With Your
                            Device</h1>

                        <main class="form-signin w-100 m-auto mt-5" data-bs-theme="dark">
                            <x-auth-session-status class="mb-4" :status="session('status')" />
                            <form method="post" action="{{ route('user.store') }}">
                                @csrf
                                @method('post')
                                <div class="text-center">

                                    <div class="d-none">
                                        <input class="form-control" type="text" name="time_receive_t"
                                            placeholder="time_receive" value="-" readonly />
                                    </div>


                                    <div class="d-none">
                                        <input class="form-control" type="text" name="nickname_c"
                                            placeholder="time_receive" value="{{ $user->nickname }}" readonly />
                                    </div>


                                    <div class="d-none">
                                        <input class="form-control" type="text" name="phonenumber_c"
                                            placeholder="time_receive" value="{{ $user->phonenumber }}" readonly />
                                    </div>


                                    <div class="form-floating">
                                        <input type="text" name="nickname_c" class="form-control rounded-4"
                                            id="floatingInput" placeholder="Nickname" value="{{ $user->nickname }}"
                                            autocomplete="username" disabled>
                                        <label class="ml-2" for="floatingInput" style="color: #CCD0D2">Nickname</label>
                                        <div class="mx-4 mt-4" style="color: #ff0000">
                                            <x-input-error :messages="$errors->get('nickname')" class="mt-2" />
                                        </div>
                                    </div>

                                    <div class="form-floating">
                                        <input type="text" name="phonenumber_c" class="form-control rounded-4"
                                            id="floatingInput" placeholder="phonenumber"
                                            value="{{ $user->phonenumber }}" autocomplete="username" disabled>
                                        <label class="ml-2" for="floatingInput" style="color: #CCD0D2">Phone
                                            Number</label>
                                        <div class="mx-4 mt-4" style="color: #ff0000">
                                            <x-input-error :messages="$errors->get('phonenumber_c')" class="mt-2" />
                                        </div>
                                    </div>


                                    <div class="d-none">
                                        <input class="form-control" type="text" name="time_return_t"
                                            placeholder="time_return" value="-" readonly />
                                    </div>



                                    <div class="d-none">
                                        <input class="form-control" type="text" name="status_t" placeholder="status"
                                            value="1" readonly />
                                    </div>

                                    <label class="mb-2" style="color: #CCD0D2; font-weight: bold;">Devices</label>
                                    <div>
                                        <select class="form-select rounded-4 p-3" aria-lable="Default select example"
                                            name="devices_c">
                                            <option value="-" class="d-none">Select your device</option>
                                            <option value="Computer PC">Computer PC</option>
                                            <option value="Notebook">Notebook</option>
                                            <option value="Printer">Printer</option>
                                            <option value="Smartphone">Smartphone</option>
                                            <option value="Tablet">Tablet</option>
                                        </select>
                                        <div class="mx-4 mt-4" style="color: #ff0000">
                                            <x-input-error :messages="$errors->get('devices_c')" class="mt-2" />
                                        </div>
                                    </div>



                                    <div class="d-none">
                                        <input class="form-control" type="text" name="nickname_t"
                                            placeholder="nickname" value="-" readonly />
                                    </div>






                                    <div class="d-none">
                                        <input class="form-control" type="text" name="phonenumber_t"
                                            placeholder="phonenumber" value="0" readonly />
                                    </div>

                                    <div>
                                        <div class="mb-2" style="color: #CCD0D2; font-weight: bold;">Problem</div>
                                        <textarea class="form-control rounded-4" type="text" name="problem_c" placeholder="What is your problem?"
                                            rows="3"></textarea>
                                    </div>

                                    <div class="d-none">
                                        <input class="form-control" type="text" name="advice_t" placeholder="advice"
                                            value="-" readonly />
                                    </div>


                                    <div class="mt-5 text-center mb-3">
                                        <button type="submit" class="button-85">Report a problem</button>
                                    </div>
                                </div>
                            </form>
                        </main>

                    </div>

                </div>
            </div>
        </div>
    </div>
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
