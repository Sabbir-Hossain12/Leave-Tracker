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
                            <th scope="col">Leave Type</th>
                            <th scope="col">Start Date</th>
                            <th scope="col">End Date</th>
                            <th scope="col">Reason</th>
                            <th scope="col">Status</th>
                        </tr>
                        </thead>
                        <tbody id="tableList">
                        @foreach($data as $single)

                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$single->leave_type}}</td>
                                <td>{{$single->start_date}}</td>
                                <td>{{$single->end_date}}</td>
                                <td>{{$single->reason}}</td>
                                <td>{{$single->status}}</td>
                            </tr>

                        @endforeach

                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

@endsection
