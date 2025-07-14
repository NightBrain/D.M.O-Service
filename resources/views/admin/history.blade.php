@extends('admin.layout')
@section('title', 'History')
@section('head', 'HISTORY SUCCESS')
@section('button')
    @php
    use App\Models\mrepair;
    
    // นับจำนวนโพสต์ทั้งหมด
    $postCount = Mrepair::where('phonenumber_t', $user)->count();
    @endphp
    
    <h2>Total Repairs {{ $postCount }} Devices</h2>
    
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
                    <th class="text-center">No.</th>
                    <th class="text-center">Owner Name</th>
                    <th class="text-center">Devices</th>
                    <th class="text-center">Problem</th>
                    <th class="text-center d-none">pn</th>
                    <th class="text-center d-none">pb</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Time receive </th>
                    <th class="text-center">Time Return</th>
                    <th class="text-center">Technician</th>
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
                        <td class="text-center">{{ $item->devices_c }}</td>
                        <td>
                            <div class="text">
                                {{ $item->problem_c }}
                            </div>
                        </td>
                        <td class="d-none"><input  type="text" name="phonenumber_c" value="{{ $item->phonenumber_c }}"></td>
                        <td class="d-none"><input  type="text" name="problem_c" value="{{ $item->problem_c }}"></td>
                        <td class="text-center"><button type="submit" style="border: 0">
                            @php
                                $status = $item->status_t;
                            @endphp
                            @if ($status == 8)
                                <div style="  border: 0; background-color: rgb(193, 157, 226); border-radius: 30px; color: #2f0853"
                                    class="p-1">
                                    ซ่อมเสร็จแล้ว
                                </div>
                            @elseif ($status == 9)
                                <div style="  border: 0; background-color: rgb(251, 195, 229); border-radius: 30px; color: #3f0030"
                                    class="p-1">
                                    ซ่อมไม่ได้
                                </div>
                            @endif
                        </button></td></form>
                        <td class="text-center">{{ $item->time_receive_t }}</td>
                        <td class="text-center">{{ $item->time_return_t }}</td>
                        <td class="text-center">{{ $item->nickname_t }}</td>
                    </tr>
                    @php
                        $no++;
                    @endphp
                @endforeach
            </tbody>
        </table>
    </form>
@endsection
