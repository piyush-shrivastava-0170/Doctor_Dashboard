<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('style.css')}}">
   
    <title>Doctor's | @yield('title')</title>

@section('title','signup')
@extends('Doctor.Layout.Auth.Doctor')

@section('content')

<div class="card">
    <div class="card-header">Login</div>
    <div class="card body">
        <form action="{{route('doctor.registration.save')}}"method="post=">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Full name</label>
              <input type="text" class="form-control"name="name">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Speialisation</label>
                <input type="text" class="form-control" name="sql">
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1"name="password">
            </div>
            
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1"name="password_confirmation">
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Terms and condition</label>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            Already member ?<a href="{{route('doctor.login')}}">Login</a>
          </form>
    </div>
</div>


    
@endsection