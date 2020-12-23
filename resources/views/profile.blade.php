@extends('layouts.master')
@section('content')
    <div class="banner-top container-fluid" id="home">
        <!-- banner -->
        <div class="banner_inner">
            <div class="services-breadcrumb">
                <div class="inner_breadcrumb">

                    <ul class="short">
                        <li>
                            <a href="{{ route('index') }}">Home</a>
                            <i>|</i>
                        </li>
                        <li>Profile</li>
                    </ul>
                </div>
            </div>

        </div>
        <!--//banner -->
    </div>
    <!--// header_top -->
    <!-- top Products -->
    <section class="banner-bottom-wthreelayouts py-lg-5 py-3">
        <div class="container">
            <h3 class="tittle-w3layouts text-center my-lg-4 my-4">Profile</h3>
            <div class="inner_sec">
                <p class="sub text-center mb-lg-5 mb-3">Thanks for joining Gunshop!</p>
                <div class="address row">


                    <div class="col-lg-4 address-grid" style="margin: auto">
                        <div class="row address-info">
                            <div class="col-md-3 address-left text-center">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="col-md-9 address-right text-left">
                                <h6>{{ $user->name.' '.$user->surname }}</h6>
                                <h6>{{ $user->login }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact_grid_right">
                    <form action="{{ route('profile.update', $user) }}" method="post">
                        @method('PATCH')
                        @csrf
                        <div class="row contact_left_grid">
                            <div class="col-md-6 con-left">
                                <div class="form-group">
                                    <label class="my-2">Name</label>
                                    <input class="form-control" type="text" name="Name" placeholder="" value="{{ $user->name }}">
                                </div>
                                <div class="form-group">
                                    <label class="my-2">Surname</label>
                                    <input class="form-control" type="text" name="Surname" placeholder="" value="{{ $user->surname }}">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="email" name="Email" placeholder="" value="{{ $user->email }}">
                                </div>
                                <div class="form-group">
                                    <label class="my-2">Date of birth</label>
                                    <input type="date" name="date" class="form-control" value="{{ $user->date_of_birth }}">
                                </div>
                            </div>
                            <div class="col-md-6 con-right">
                                <div class="form-group">
                                    <label class="my-2">Password</label>
                                    <input class="form-control" type="password" name="Password" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label class="my-2">Confirm password</label>
                                    <input class="form-control" type="password" name="Password2" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label class="my-2">Gender:</label>
                                    <select class="form-control" name="gender_id">
                                        @if($user->gender_id == null)
                                            <option value="">Select</option>
                                        @endif
                                        @if($genders!=null){
                                            @foreach ($genders as $gender) {
                                                <option value="{{$gender->id}}" @if($user->gender_id == $gender->id) selected @endif>{{ $gender->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <input class="form-control" type="submit" value="Save">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
