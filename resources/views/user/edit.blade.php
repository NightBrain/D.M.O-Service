@extends('user.layouti')
@section('title', 'Edit Repair')
@section('head', 'Edit Repair')
@section('content')
    <form class="form-control" method="post" action="{{ route('user.update', ['user' => $user]) }}">
        @csrf
        @method('put')
        <div class="row mt-2">
            <div class="col">
                <div class="d-none">
                    <input class="form-control" type="text" name="time_receive_t" placeholder="time_receive"
                        value="{{ $user->time_receive_t }}" readonly />
                </div>
            </div>
            <div class="col">
                <div>
                    <label class="form-label"> Nickname </label>
                    <input class="form-control" type="text" disabled placeholder="nickname"
                        value="{{ $user->nickname_c }}" readonly />
                    <input class="d-none" type="text" name="nickname_c" placeholder="nickname"
                        value="{{ $user->nickname_c }}" readonly />
                </div>
            </div>
            <div class="col">
                <div>
                    <label class="form-label"> Phone Number </label>
                    <input class="form-control" type="text" disabled placeholder="phonenumber"
                        value="+66 {{ $user->phonenumber_c }}" readonly />
                    <input class="d-none" type="text" name="phonenumber_c" placeholder="phonenumber"
                        value="+66 {{ $user->phonenumber_c }}" readonly />
                </div>
            </div>
            <div class="col">
                <div class="d-none">
                    <input class="form-control" type="text" name="time_return_t" placeholder="time_return"
                        value="{{ $user->time_return_t }}" readonly />
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col">
                <div class="d-none">
                    <input class="form-control" type="text" name="status_t" placeholder="status"
                        value="{{ $user->status_t }}" readonly />
                </div>
            </div>
            <div class="col-6">
                <div>
                    <label class="form-label"> Devices </label>
                    <input class="form-control" type="text" disabled placeholder="phonenumber"
                        value="{{ $user->devices_c }}" readonly />
                    <input class="d-none" type="text" name="phonenumber_c" placeholder="phonenumber"
                        value="{{ $user->devices_c }}" readonly />
                </div>
            </div>
            <div class="col">
                <div class="d-none">
                    <input class="form-control" type="text" name="nickname_t" placeholder="nickname"
                        value="{{ $user->nickname_t }}" readonly />
                </div>
            </div>
        </div>




        <div class="row mt-2">
            <div class="col">
                <div class="d-none">
                    <input class="form-control" type="text" name="phonenumber_t" placeholder="phonenumber"
                        value="{{ $user->phonenumber_t }}" readonly />
                </div>
            </div>
            <div class="col-6">
                <div>
                    <label class="form-label">Problem </label>
                    <textarea class="form-control" type="text" name="problem_c" placeholder="Problem" rows="3">{{ $user->problem_c }}</textarea>
                </div>
            </div>
            <div class="col">
                <div class="d-none">
                    <input class="form-control" type="text" name="advice_t" placeholder="advice"
                        value="{{ $user->advice_t }}" readonly />
                </div>
            </div>
        </div>


        <div class="mt-5 text-center mb-3">
            <a href="/public/home" class="button-11">Back</a> &nbsp;&nbsp;
            <button type="submit" class="button-33">Save</button>
        </div>
    </form>
@endsection
