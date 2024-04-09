@extends('layouts.home')

@section('navs')


    <x-nav-bar></x-nav-bar>

@endsection


@section('contents')

    <div class="row gap-4 p-4">

        <div class="col-lg-3 ">

            <div class="border border-dark p-4 mt-2">
                <i class="fas fa-users mb-2"></i>
                <p class="mb-0 pb-1 fw-bold"> Pending Employee</p>
                <h4>{{$pending_employees}}</h4>
            </div>


        </div>

        <div class="col-lg-3 ">

            <div class="border border-dark p-4 mt-2">
                <i class="fas fa-users mb-2"></i>
                <p class="mb-0 pb-1 fw-bold"> Total Leave Requests</p>
                <h4>{{$total_leaves}}</h4>
            </div>

        </div>

        <div class="col-lg-3 ">

            <div class="border border-dark p-4 mt-2">
                <i class="fas fa-users mb-2"></i>
                <p class="mb-0 pb-1 fw-bold"> Pending Leave Requests</p>
                <h4>{{$pending_leaves}}</h4>
            </div>

        </div>
        <div class="col-lg-3 ">

            <div class="border border-dark p-4 mt-2">
                <i class="fas fa-users mb-2"></i>
                <p class="mb-0 pb-1 fw-bold"> Approved Leave Requests</p>
                <h4>{{$approved_leaves}}</h4>
            </div>

        </div>
        <div class="col-lg-3 ">

            <div class="border border-dark p-4 mt-2">
                <i class="fas fa-users mb-2"></i>
                <p class="mb-0 pb-1 fw-bold"> Rejected Leave Requests</p>
                <h4>{{$rejected_leaves}}</h4>
            </div>

        </div>


    </div>

@endsection




