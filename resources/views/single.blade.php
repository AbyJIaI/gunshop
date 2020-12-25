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
						<li>Single Page</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
		<!--//banner -->
		<!--/shop-->
		<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
			<div class="container">
				<div class="inner-sec-shop pt-lg-4 pt-3">
					<div class="row">
							<div class="col-lg-4 single-right-left ">
									<div class="grid images_3_of_2">
										<div class="flexslider1">

											<ul class="slides">
												<li data-thumb="{{ asset('storage/'.$product->image) }}">
													<div class="thumb-image"> <img src="{{ asset('storage/'.$product->image) }}" data-imagezoom="true" class="img-fluid" alt=" "> </div>
												</li>
											</ul>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-8 single-right-left simpleCart_shelfItem">
									<h3>{{ $product->name }}</h3>
									<p><span class="item_price">${{ $product->price }}</span>
										<del>$Old price </del>
									</p>
									<div class="rating1">
										<ul class="stars">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										</ul>
									</div><br>
									<div class="color-quality">
										<div class="color-quality-right">
											<h5>Quantity :</h5>
											<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
													<option value="null">1</option>
                                                    <option value="null">2</option>
                                            </select>
										</div>
									</div>
									<div class="occasional">
										<h5>Types :</h5>
										<div class="colr ert">
											<label class="radio"><input type="radio" name="radio" checked=""><i></i> Type1</label>
										</div>
										<div class="colr">
											<label class="radio"><input type="radio" name="radio"><i></i> Type2</label>
										</div>
										<div class="colr">
											<label class="radio"><input type="radio" name="radio"><i></i> Type3</label>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="occasion-cart">
											<div class="googles single-item singlepage">
                                                <form action="{{ route('addToCart', $product->id) }}" method="get">
                                                    @csrf
                                                    <input type="hidden" name="cmd" value="_cart">
                                                    <input type="hidden" name="add" value="1">
                                                    <input type="hidden" name="googles_item" value="{{ $product->name }}">
                                                    <input type="hidden" name="amount" value="{{ $product->price }}">
                                                    <button type="submit" class="googles-cart pgoogles-cart">
                                                        Add to Cart <i class="fas fa-cart-plus"></i>
                                                    </button>
                                                </form>
                                            </div>
									</div>
									<ul class="footer-social text-left mt-lg-4 mt-3">
											<li>Share On : </li>
											<li class="mx-2">
												<a href="#">
													<span class="fab fa-facebook-f"></span>
												</a>
											</li>
											<li class="mx-2">
												<a href="#">
													<span class="fab fa-twitter"></span>
												</a>
											</li>
											<li class="mx-2">
												<a href="#">
													<span class="fab fa-google-plus-g"></span>
												</a>
											</li>
											<li class="mx-2">
												<a href="#">
													<span class="fab fa-linkedin-in"></span>
												</a>
											</li>
											<li class="mx-2">
												<a href="#">
													<span class="fas fa-rss"></span>
												</a>
											</li>

										</ul>

								</div>
								<div class="clearfix"> </div>
								<!--/tabs-->
								<div class="responsive_tabs">
									<div id="horizontalTab">
										<ul class="resp-tabs-list">
											<li>Description</li>
											<li>Reviews</li>
										</ul>
										<div class="resp-tabs-container" style="width: 1140px;">
											<!--/tab_one-->
											<div class="tab1">

												<div class="single_page">
													<h6>Lorem ipsum dolor sit amet</h6>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie
														blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt
														ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore
														magna aliqua.</p>
													<p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie
														blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt
														ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore
														magna aliqua.</p>
												</div>
											</div>
											<!--//tab_one-->
											<div class="tab2">

												<div class="single_page">
													<div class="bootstrap-tab-text-grids">
														<div class="bootstrap-tab-text-grid">
															@if(isset($comments))
                                                                @foreach($comments as $comment)
                                                                <div class="bootstrap-tab-text-grid-left">
                                                                    <img src="{{ asset('storage/user_icon.png') }}" alt=" " class="img-fluid">
                                                                </div>
                                                                <div class="bootstrap-tab-text-grid-right">
                                                                    <ul>
                                                                        <li><a href="#">{{ $comment->user->name.' '.$comment->user->surname }}</a></li>
                                                                        <li><i class="" aria-hidden="true"></i> {{ $comment->created_at->format('d M Y H:i:s') }}</li>
                                                                    </ul>
                                                                    <p>{{ $comment->text }}</p>
                                                                </div>
                                                                <div class="clearfix"> </div>
                                                                @endforeach
                                                            @endif
														</div>
														@auth()
                                                            <div class="add-review">
                                                                <h4>add a review</h4>
                                                                <form action="{{ route('comment.store') }}" method="post">
                                                                    @csrf
                                                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                                                    <input type="hidden" name="product_id" value="{{ request()->segment(count(request()->segments())) }}">
                                                                    <textarea name="text"></textarea>
                                                                    <input type="submit" value="SEND">
                                                                </form>
                                                            </div>
                                                        @endauth
                                                        @guest()
                                                            <p class="button-log">If you want to send comments, please
                                                                <a class="btn-open" href="#">
                                                                    <b>sign in</b>
                                                                </a>
                                                            </p>
                                                        @endguest

													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
								<!--//tabs-->

					</div>
				</div>
			</div>
		</section>
@endsection
