@extends('layouts.home')

@section('navs')
    <li class="nav-item">
        <a class="nav-link " href="{{route('leaves.create')}}"><i class="fas fa-clipboard"></i>
            <span data-feather="file" class="p-1 align-text-bottom"></span>
            Leave requests
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link " href="{{route('leaves.index')}}"><i class="fas fa-clipboard"></i>
            <span data-feather="file" class="p-1 align-text-bottom"></span>
            History
        </a>
    </li>
@endsection

@section('contents')

    <div class="row gap-4">

        <div class="col-lg-6 ">
            <h2 class="py-4 text-dark text-center">Submit Leave Request</h2>
            <form class="form-control" method="post" action="{{route('leaves.store')}}">


                @csrf

                <label for="leaveType" class="mb-2">Leave Type</label>

                <select name="leaveType" id="leaveType" class="form-control" required>
                    <option value="Casual Leave" id="">Casual Leave</option>
                    <option value="Sick Leave" id="">Sick Leave</option>
                    <option value="Emergency Leave" id="">Emergency Leave</option>
                </select>
                <p class="text-danger">    @error('leaveType')
                    {{$message}}
                    @enderror </p>
                <label for="startDate" class="mb-2">Start date</label>
                <input type="date" name="startDate" id="startDate" class="form-control form-input"
                       value="{{old('startDate')}}" required>
                <p class="text-danger">    @error('startDate')
                    {{$message}}
                    @enderror
                </p>
                <label for="endDate" class="mb-2">End date</label>
                <input type="date" name="endDate" id="endDate" class="form-control form-input"
                       value="{{old('endDate')}}" required>
                <p class="text-danger"> @error('endDate')
                    {{$message}}
                    @enderror
                </p>
                <lebel for="reason" class="mb-2">Reason</lebel>
                <textarea name="reason" id="reason" cols="30" rows="5" class="form-control" required></textarea>
                <p class="text-danger"> @error('reason')
                    {{$message}}
                    @enderror
                </p>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>

        </div>


    </div>

@endsection




