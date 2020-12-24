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
						<li>Checkout </li>
					</ul>
				</div>
			</div>

		</div>
		<!--//banner -->
	</div>
	<!--// header_top -->
	<!--checkout-->
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container">
			<div class="inner-sec-shop px-lg-4 px-3">
				<h3 class="tittle-w3layouts my-lg-4 mt-3">Checkout </h3>
				<div class="checkout-right">
					<h4>Your shopping cart contains:
						<span>3 Products</span>
					</h4>
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>SL No.</th>
								<th>Product</th>
								<th>Quantity</th>
								<th>Product Name</th>
								<th>Price</th>
								<th>Remove</th>
							</tr>
						</thead>
						<tbody>
                            @if(session('cart'))
                                @php ($c = 1)
                                @foreach(session('cart') as $id => $product)
                                    <tr class="rem1" id="rem{{$id}}">
                                        <td class="invert">{{ $c++ }}</td>
                                        <td class="invert-image">
                                            <a href="{{ route('showProduct', $id) }}">
                                                <img src="{{ asset('storage/'.$product['photo']) }}" alt="image" class="img-responsive">
                                            </a>
                                        </td>
                                        <td class="invert">
                                            <div class="quantity">
                                                <div class="quantity-select">
                                                    <div class="entry value-minus">&nbsp;</div>
                                                    <div class="entry value" id="{{$id}}">
                                                        <span >{{ $product['quantity'] }}</span>
                                                    </div>
                                                    <div class="entry value-plus active">&nbsp;</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="invert">{{ $product['name'] }}</td>
                                        <td class="invert">{{ $product['price'] }}</td>
                                        <td class="invert">
                                            <div class="rem">
                                                <div class="close1" id="r{{$id}}" onclick="hideElement('rem' + {{$id}})"> </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
						</tbody>
					</table>
				</div>
				<div class="checkout-left row">
					<div class="col-md-4 checkout-left-basket">
						<h4>Review</h4>
						<ul>
                            @if(session('cart'))
                                @foreach(session('cart') as $id => $product)
                                    <li>{{ $product['name'] }}
                                        <i>-</i>
                                        <span id="t{{$id}}">{{ $product['total']}}tg </span>
                                    </li>
                                @endforeach
                                <li>Total
                                    <i>-</i>
                                    <span>{{ session()->get('check') }}tg</span>
                                </li>
                            @endif
						</ul>
					</div>
					<div class="col-md-8 address_form">
						<h4>Add a new Details</h4>
						<form action="{{ route('payment') }}" method="" class="creditly-card-form agileinfo_form">
							<section class="creditly-wrapper wrapper">
								<div class="information-wrapper">
									<div class="first-row form-group">
										<div class="controls">
											<label class="control-label">Full name: </label>
											<input class="billing-address-name form-control" type="text" name="name" placeholder="Full name">
										</div>
										<div class="card_number_grids">
											<div class="card_number_grid_left">
												<div class="controls">
													<label class="control-label">Mobile number:</label>
													<input class="form-control" type="text" placeholder="Mobile number">
												</div>
											</div>
											<div class="card_number_grid_right">
												<div class="controls">
													<label class="control-label">Landmark: </label>
													<input class="form-control" type="text" placeholder="Landmark">
												</div>
											</div>
											<div class="clear"> </div>
										</div>
										<div class="controls">
											<label class="control-label">Town/City: </label>
											<input class="form-control" type="text" placeholder="Town/City">
										</div>
										<div class="controls">
											<label class="control-label">Address type: </label>
											<select class="form-control option-w3ls">
												<option>Office</option>
												<option>Home</option>
												<option>Commercial</option>

											</select>
										</div>
									</div>
									<button class="submit check_out">Delivery to this Address</button>
								</div>
							</section>
						</form>
						<div class="checkout-right-basket">
							<a href="{{ route('payment') }}">Make a Payment </a>
						</div>
					</div>

					<div class="clearfix"> </div>

				</div>

			</div>

		</div>
	</section>
@endsection
