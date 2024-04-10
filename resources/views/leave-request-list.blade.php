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
                    <h1 class="h2">Leave Requests</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">


                        </div>

                    </div>
                </div>


                <div class="table-responsive">
                    <table class="table table-striped table-sm table-bordered" id="tableData">
                        <thead>
                        <tr>
                            <th scope="col">SN</th>
                            <th scope="col">Employee Email</th>
                            <th scope="col">Start Date</th>
                            <th scope="col">End Date</th>
                            <th scope="col">Reason</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>

                        </tr>
                        </thead>
                        <tbody id="tableList">
                        @foreach($data as  $single)

                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$single->user->email}}</td>
                                <td>{{$single->start_date}}</td>
                                <td>{{$single->end_date}}</td>
                                <td>{{$single->reason}}</td>
                                <td>{{($single->status)}}</td>
                                <td>
                                    <button onclick="updateModal({{$single->id}})" data-id="{{$single->id}}"
                                            class="btn btn-sm btn-primary">Change Status
                                    </button>
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

    {{--Modal--}}
    @foreach($data as  $single)
    <div class="modal animated zoomIn" id="update-modal-{{$single->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Notes</h5>
                </div>
                <form id="update-form" method="POST" action="{{route('leaves.update',$single->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 p-1">


                                    <label for="status" class="form-label">Status</label>

                                    <select class="form-select" name="status" id="status">
                                        <option value="Pending">Pending</option>
                                        <option value="Approved">Approved</option>
                                        <option value="Rejected">Rejected</option>
                                    </select>


{{--                                    <input type="text" class="" id="updateID" value="{{$single->id}}">--}}
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <a id="update-modal-close" class="btn btn-outline-warning" data-bs-dismiss="modal"
                                aria-label="Close">Close
                        </a>
                        <button type="submit" id="update-btn" class="btn btn-outline-primary">Update</button>
                    </div>
                </form>

            </div>


        </div>
    </div>
    @endforeach



    <script>
        function updateModal(id) {

            $('#update-modal-'+ id).modal('show');
        }

    </script>

@endsection
