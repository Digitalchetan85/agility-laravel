@extends('layout')

@section('content')
<div class="py-3 py-md-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="bg-primary shadow-sm rounded p-3">
                    <h2 class="fs-3 text-center py-3 text-white">Create Your Account</h2>
                    <form>
                        <div class="mb-3">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Name">
                                <label for="floatingInput">Name</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating mb-3">
                                <input type="tel" class="form-control" id="floatingInput" placeholder="Phone No.">
                                <label for="floatingInput">Phone No.</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-secondary mx-2">Sign Up</button>
                            <a href="/login" class="btn btn-secondary mx-2">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop