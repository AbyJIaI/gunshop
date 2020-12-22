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
                                <h6>Name Surname</h6>
                                <h6>Login</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact_grid_right">
                    <form action="#" method="post">
                        <div class="row contact_left_grid">
                            <div class="col-md-6 con-left">
                                <div class="form-group">
                                    <label class="my-2">Name</label>
                                    <input class="form-control" type="text" name="Name" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                    <label class="my-2">Surname</label>
                                    <input class="form-control" type="text" name="Surname" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="email" name="Email" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                    <label class="my-2">Date of birth</label>
                                    <input type="date" name="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6 con-right">
                                <div class="form-group">
                                    <label class="my-2">Password</label>
                                    <input class="form-control" type="password" name="Password" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                    <label class="my-2">Confirm password</label>
                                    <input class="form-control" type="password" name="Password2" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                    <label class="my-2">Gender:</label>
                                    <select class="form-control" name="gender_id">
                                        {{-- @if($genders!=null){
                                        @foreach ($genders as $gender) {
                                        <option value="{{$gender->id}}">{{ $gender->name }}</option>
                                        @endforeach
                                        @endif --}}
                                        <option value="">Male</option>
                                        <option value="">Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="my-2">Nationality:</label>
                                    <select class="form-control" name="nationality_id">
                                        {{-- @if(nationalities!=null){
                                        @foreach ($nationalities as $nat) {
                                        <option value="{{$nat->id}}">{{ $nat->name }}</option>
                                        @endforeach
                                        @endif --}}
                                        <option value="">Kazakh</option>
                                        <option value="">Russian</option>
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
