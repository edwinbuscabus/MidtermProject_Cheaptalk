@extends('base')

@section('content')

    <div class="row">
        <div class="col-md-6 offset-md-3">
            @if (session('message'))
               <div class="alert alert-success">
                    {{session('message')}}
                </div>
            @endif

            @if (session('error'))
            <div class="alert alert-danger">
                 {{session('error')}}
             </div>
            @endif 

            <div class="card mt-3">
                <div class="card-header bg-dark text-white text-center">
                    <h3 class="card-title">Register</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{url('/register')}}" method="post">
                            {{ csrf_field() }}
                            <div class="mb-3" id="input-container">
                                <i class="fa fa-user icon"></i>
                                <label for="name">Full Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name">
                                @error('name')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="mb-3 text-black" id="input-container">
                                <i class="fa fa-user icon"></i>
                                <select name="gender" id="gender" class="form-select">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                @error('name')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="mb-3 text-black" id="input-container">
                                <i class="fa fa-envelope icon"></i>
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="sample@email.com">
                                @error('email')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="mb-3 text-black" id="input-container">
                                <i class="fa fa-key icon"></i>
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
                                @error('password')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="mb-3 text-black" id="input-container">
                                <i class="fa fa-key icon"></i>
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Re-enter Password">
                                @error('password_confirmation')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <a href="/">Already have an account</a>
                                </div>
                                <button class="btn btn-primary" type="submit">Register</button>
                            </div>

                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
@endsection