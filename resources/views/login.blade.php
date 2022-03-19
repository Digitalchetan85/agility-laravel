@extends('layout')

@section('content')
<div class="py-3 py-md-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="bg-primary shadow-sm rounded p-3">
                    <h2 class="fs-3 text-center py-3 text-white">Login to Your Account</h2>
                    <form action="/login" method="POST">
                        @csrf
                        <div class="mb-3">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-secondary form-control">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop