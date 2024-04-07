@extends('layouts.home')

@section('contents')
    <div class="container-fluid">
        <div class="row">


            <main class="col-md-12 ms-sm-auto col-lg-12 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Note List</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <a href="">
                                <button type="button" class="btn btn-dark btn-outline-secondary text-light">Create
                                    Notes
                                </button>
                            </a>

                        </div>

                    </div>
                </div>


                {{--                <h2>Section title</h2>--}}
                <div class="table-responsive">
                    <table class="table table-striped table-sm table-bordered" id="tableData">
                        <thead>
                        <tr>
                            <th scope="col">SN</th>
                            <th scope="col">title</th>
                            <th scope="col">content</th>
                            <th scope="col">Creation</th>
                            <th scope="col">Last Modified</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody id="tableList">


                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>


    {{--  Update Modal  --}}
    <div class="modal animated zoomIn" id="update-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Notes</h5>
                </div>
                <div class="modal-body">
                    <form id="update-form">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 p-1">


                                    <label for="nTitle" class="form-label">title</label>
                                    <input type="text" class="form-control" id="nTitle">

                                    <label for="nContent" class="form-label mt-2">Email</label>
                                    <textarea class="form-control" id="nContent"></textarea>

                                    <input type="text" class="d-none" id="updateID">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button id="update-modal-close" class="btn btn-outline-warning" data-bs-dismiss="modal"
                            aria-label="Close">Close
                    </button>
                    <button onclick="updateNote()" id="update-btn" class="btn btn-outline-primary">Update</button>
                </div>

            </div>
        </div>
    </div>


    {{--  Delete Modal  --}}

    <div class="modal animated zoomIn" id="delete-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h3 class=" mt-3 text-warning">Delete !</h3>
                    <p class="mb-3">Once delete, you can't get it back.</p>
                    <input class="d-none" id="deleteID"/>
                </div>
                <div class="modal-footer justify-content-end">
                    <div>
                        <button type="button" id="delete-modal-close" class="btn btn-outline-warning mx-2"
                                data-bs-dismiss="modal">Cancel
                        </button>
                        <button onclick="noteDelete()" type="button" id="confirmDelete" class="btn btn-outline-danger">
                            Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
