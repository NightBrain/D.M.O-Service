<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@extends('admin.layout')
@section('title', 'Working')
@section('head', 'Working')
@section('button')
    <a type="button" data-bs-toggle="modal"
    data-bs-target="#working" class="button-33">Create</a>
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
    <table class="table">
        <thead>
            <tr>
                <th class="text-center">No.</th>
                <th class="text-center">Imageadmin</th>
                <th class="text-center">Imagework</th>
                <th class="text-center">Title</th>
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
                    <td class="text-center"><img src="{{ asset($item->imageadmin) }}" alt=""
                            class="rounded-circle float-center" style="width: 100px; height: 100px; object-fit: cover;"></td>
                    <td class="text-center"><img src="{{ asset($item->imagework) }}" alt=""
                            class="rounded-circle float-center" style="width: 100px; height: 100px; object-fit: cover;"></td>
                    <td class="text-center">
                        <textarea class="rounded-4" type="text" rows="3">{{ $item->title }}</textarea>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('working.destroy', ['user' => $item]) }}" class="button-44"
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
    <!-- Modal -->
    <div class="modal fade" id="working" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-4" style="background-color: #18191bf1; border-radius: 30px;">
                <div class="modal-body">
                    <div class="text-end">
                        <a type="button" class="fs-1" data-bs-dismiss="modal" aria-label="Close"
                            style="color: #CCD0D2;"><i class='bx bx-x'></i></a><br>

                        <h1 class="fs-1 text-center ">CreateWorking</h1>

                        <main class="form-signin w-100 m-auto mt-4" data-bs-theme="dark">
                            <x-auth-session-status class="mb-4" :status="session('status')" />
                            <form method="post" enctype="multipart/form-data" action="{{ route('admin.creatework') }}">
                                @csrf
                                @method('post')

                                <div class="text-center">

                                    <div class="row">
                                        <div class="col">
                                            <div class="mt-4">
                                                <div class="mt-4">
                                                    <label for="formFileLg" class="form-label" style="color: #fff;">Image
                                                        Technician</label><br>

                                                    <input class="form-control form-control-lg" id="formFileLg"
                                                        type="file" name="imageadmin" placeholder="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col">
                                            <div class="mt-4">
                                                <div class="mt-4">
                                                    <label for="formFileLg" class="form-label"
                                                        style="color: #fff;">Image</label>
                                                    <input class="form-control form-control-lg" id="formFileLg"
                                                        type="file" name="imagework" placeholder="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>

                                        <textarea class="form-control rounded-4 mt-4" type="text" name="title" placeholder="Title" rows="3"></textarea>
                                    </div>



                                    <div class="mt-5 text-center mb-3">
                                        <button type="submit" class="p-3"
                                            style="background-color: #53c1fc; border-radius: 30px; color: #fff;font-weight: bold;">Create</button>
                                    </div>
                                </div>
                            </form>
                        </main>

                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
