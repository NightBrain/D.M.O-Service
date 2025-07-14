@extends('user.layout')
@section('title','History Status')
@section('head','HISTORY STATUS')
@section('content')
<table id="myTable" class="display">
    <thead>
        <tr>
            <th class="text-center">No.</th>
            <th class="text-center">Owner Name</th>
            <th class="text-center">Devices</th>
            <th class="text-center">Status</th>
            <th class="text-center">Time receive </th>
            <th class="text-center">Time Return</th>
            <th class="text-center">Advice</th>

        </tr>
    </thead>
    <tbody>
        @php
            $no = 1;
        @endphp
        @foreach ($results as $result)
            <tr>
                <td class="text-center">{{ $no }}</td>
                <td class="text-center">{{ $result->nickname_c }}</td>
                <td class="text-center">{{ $result->devices_c }}</td>
                <td class="text-center">
                    @php
                        $status = $result->status_t;
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
                    @elseif ($status == 8)
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
                </td>
                <td class="text-center">{{ $result->time_receive_t }}</td>
                <td class="text-center">{{ $result->time_return_t }}</td>
                <td>
                    <textarea class="form-control" type="text" name="address" placeholder="คำแนะนำจากช่าง" rows="1" disabled>{{ $result->advice_t }}</textarea>
                </td>
                @php
                    $no++;
                @endphp
            </tr>
        @endforeach
    </tbody>
</table>
@endsection