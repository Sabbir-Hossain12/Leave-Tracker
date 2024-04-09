
@extends('layouts.home')

@section('navs')
    <li class="nav-item">
        <a class="nav-link " href="{{route('leaves.create')}}"><i class="fas fa-clipboard"></i>
            <span data-feather="file" class="p-1 align-text-bottom"></span>
            Leave requests
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link " href=""><i class="fas fa-clipboard"></i>
            <span data-feather="file" class="p-1 align-text-bottom"></span>
            History
        </a>
    </li>
@endsection

@section('contents')

    <div class="row gap-4">

        <div class="col-lg-6 ">

            <h2 class="p-2">Employee Dashboard </h2>

        </div>


    </div>



@endsection




