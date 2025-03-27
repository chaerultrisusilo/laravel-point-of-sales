@extends('layouts.main')
@section('title', 'Add New Users')
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add New Users</h5>

                        <form action="{{ route('users.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="col-form-label">User Name *</label>
                                <input type="text" class="form-control" name="user_name" placeholder="Enter Category Name" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="col-form-label">Email *</label>
                                <input type="text" class="form-control" name="user_name" placeholder="Enter Category Name" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="col-form-label">Password *</label>
                                <input type="text" class="form-control" name="user_name" placeholder="Enter Category Name" required>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit">Save</button>
                                <button class="btn btn-secondary" type="reset">Cancel</button>
                                <a href="{{ url()->previous() }}" class="text-primary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
