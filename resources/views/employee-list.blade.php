@extends('layouts.home')
@section('navs')
    <x-nav-bar></x-nav-bar>
@endsection
@section('contents')
    <div class="container-fluid">
        <div class="row">


            <main class="col-md-12 ms-sm-auto col-lg-12 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Leave History</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <a href="{{route('leaves.create')}}">
                                <button type="button" class="btn btn-dark btn-outline-secondary text-light">Request for
                                    Leave
                                </button>
                            </a>

                        </div>

                    </div>
                </div>


                <div class="table-responsive">
                    <table class="table table-striped table-sm table-bordered" id="tableData">
                        <thead>
                        <tr>
                            <th scope="col">SN</th>
                            <th scope="col">Employee Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>

                        </tr>
                        </thead>
                        <tbody id="tableList">
                        @foreach($employees as $employee)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$employee->name}}</td>
                                <td>{{$employee->email}}</td>
                                <td>{{($employee->is_approved)==0 ? 'Pending' : 'Approved'}}</td>
                              <td> <form > <button type="submit" class="btn btn-sm btn-primary">Change Status</button></form></td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

@endsection
