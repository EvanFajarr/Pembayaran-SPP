@extends('layouts.auth')

<div class="vh-100 d-flex justify-content-center align-items-center">
    <div class="col-md-4 p-5 shadow-sm border rounded-5 border-success">
        <h2 class="text-center mb-4 text-success">Login</h2>
        @include('pesan.pesan')
        <form action="/loginSiswa" method="post">
            @csrf

            <div class="mb-3">
                <label for="nis_15483" class="form-label">Nis</label>
                <input type="nis_15483" name="nis_15483" value="{{ Session::get('nis_15483') }}"  class="form-control bg-success bg-opacity-10 border border-success">
            </div>
            
            <div class="mb-3">
                <label for="password" class="form-label ">Password</label>
                <input type="password" name="password" class="form-control bg-success bg-opacity-10 border border-success">
            </div>


            <div class="d-grid">
                <button class="btn btn-success" type="submit">login</button>
            </div>
        </form>
      
    </div>
</div>

