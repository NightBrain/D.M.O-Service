<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@extends('admin.layouti')
@section('title', 'Edit Work')
@section('head', 'Edit Work')
@section('content')
    <form method="post" action="{{ route('repair.update', ['user' => $user]) }}">
        @csrf
        @method('put')
        <div class="row mt-2">
            <div class="col">
                <div>
                    <label class="form-label"> ID </label>
                    <input class="form-control" type="text" placeholder="id" value="{{ $user->id }}" disabled />
                </div>
            </div>
            <div class="col">
                <div>
                    <label class="form-label"> Owner Name </label>
                    <input class="form-control" type="text" name="nickname_c" placeholder="nickname"
                        value="{{ $user->nickname_c }}" disabled />
                </div>
            </div>
            <div class="col">
                <div>
                    <label class="form-label"> Devices </label>
                    <input class="form-control" type="text" name="devices_c" placeholder="devices"
                        value="{{ $user->devices_c }}" disabled />
                </div>
            </div>
            <div class="col">
                <div>
                    <label class="form-label"> Responsible technician </label>
                    <input class="form-control" type="text" name="nickname_t" placeholder="nickname"
                        value="{{ $user->nickname_t }}" disabled />
                </div>
            </div>
        </div>


        <div class="mt-2">
            <label class="form-label">Problem </label>
            <textarea class="form-control" type="text" name="problem_c" placeholder="problem" rows="3" disabled >{{ $user->problem_c }}</textarea>
        </div>
        <hr>
        <div class="row mt-2">
             <div class="col">
                <div>
                    @php
                        $status = $user->status_t;
                    @endphp
                    @if ($status == 2)
                        <label class="form-label"> Time receive </label>
                        <input class="form-control" type="datetime-local" name="time_receive_t" placeholder="time_receive"
                            value="{{ $user->time_receive_t }}" />
                    @else
                        <label class="form-label"> Time receive </label>
                        <input class="form-control" type="datetime-local" disabled placeholder="time_receive"
                            value="{{ $user->time_receive_t }}" />
                        <input class="d-none" type="text" name="time_receive_t" placeholder="time_receive"
                            value="{{ $user->time_receive_t }}" />
                    @endif
                </div>
            </div>
            <div class="col">
                <div>
                    @php
                        $status = $user->status_t;
                    @endphp
                    @if ($status == 6)
                        <label class="form-label"> Time Return </label>
                        <input class="form-control" type="datetime-local" name="time_return_t" placeholder="time_receive"
                            value="{{ $user->time_return_t }}" />
                    @else
                        <label class="form-label"> Time receive </label>
                        <input class="form-control" type="datetime-local" disabled placeholder="time_receive"
                            value="{{ $user->time_return_t }}" />
                        <input class="d-none" type="text" name="time_return_t" placeholder="time_receive"
                            value="{{ $user->time_return_t }}" />
                    @endif
                </div>
            </div>
            <div class="col mt-2">
                <label lass="form-lable">Status</label>
                <select class="form-select" aria-lable="Default select example" name="status_t">
                    <option value="1" {{ $user->status_t == '1' ? 'selected' : '' }}>-</option>
                    <option value="2" {{ $user->status_t == '2' ? 'selected' : '' }}>ช่างรับงานแล้ว</option>
                    <option value="3" {{ $user->status_t == '3' ? 'selected' : '' }}>นัดวันส่งซ่อม</option>
                    <option value="4" {{ $user->status_t == '4' ? 'selected' : '' }}>กำลังประเมินอาการ</option>
                    <option value="5" {{ $user->status_t == '5' ? 'selected' : '' }}>รออะไหล่</option>
                    <option value="6" {{ $user->status_t == '6' ? 'selected' : '' }}>กำลังซ่อม</option>
                    <option value="7" {{ $user->status_t == '7' ? 'selected' : '' }}>นัดวันส่งคืน</option>
                    <option value="8" {{ $user->status_t == '8' ? 'selected' : '' }}>ซ่อมเสร็จแล้ว</option>
                    <option value="9" {{ $user->status_t == '9' ? 'selected' : '' }}>ซ่อมไม่ได้</option>
                </select>
            </div>
        </div>

        <div class="mt-2">
            <label class="form-label">Advice </label>
            <textarea class="form-control" type="text" name="advice_t" placeholder="advice" rows="3">-</textarea>
        </div>
        <div class="d-flex justify-content-center">
            <div class="mt-5 text-center">
                <a href="/public/admin/work" class="button-11">Cancle</a> &nbsp;&nbsp;
                <button type="submit" class="button-55">Update Status</button>
            </div>
    </form>
    <form method="post" action="{{ route('repair.store') }}">
        @csrf
        @method('post')
        <div class="d-none">
            <div>
                <input class="form-control" type="text" name="nickname_c" placeholder="nickname"
                    value="{{ $user->nickname_c }}" readonly />
                <input class="form-control" type="text" name="phonenumber_c" placeholder="devices"
                    value="{{ $user->phonenumber_c }}" readonly />
                <input class="form-control" type="text" name="devices_c" placeholder="nickname"
                    value="{{ $user->devices_c }}" readonly />
                <input class="form-control" type="text" name="problem_c" placeholder="time_receive"
                    value="{{ $user->problem_c }}" readonly />
                <input class="form-control" type="text" name="status_t" placeholder="time_return"
                    value="{{ $user->status_t }}" readonly />
                <input class="form-control" type="text" name="time_receive_t" placeholder="nickname"
                    value="{{ $user->time_receive_t }}" readonly />
                <input class="form-control" type="text" name="time_return_t" placeholder="devices"
                    value="{{ $user->time_return_t }}" readonly />
                <input class="form-control" type="text" name="nickname_t" placeholder="nickname"
                    value="{{ $user->nickname_t }}" readonly />
                <input class="form-control" type="text" name="phonenumber_t" placeholder="time_receive"
                    value="{{ $user->phonenumber_t }}" readonly />
                <input class="form-control" type="text" name="advice_t" placeholder="time_return"
                    value="{{ $user->advice_t }}" readonly />
            </div>
        </div>

        <div class="mt-5 mx-3">
            <button type="submit" class="button-33">Save</button>
        </div>
    </form>
    </div>
@endsection
