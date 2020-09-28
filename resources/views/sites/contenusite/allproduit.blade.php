@extends('sites.mastersite')
@section('content')

<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3" style="padding-right: 20%">
				<span>N</span>os
                <span>P</span>roduits
                <span>P</span>ar
				<span>C</span>ategorie</h3>
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
                        <!-- first section -->

						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<div class="row">
                                <!-- product left -->
                                <div class="agileinfo-ads-display col-lg-12">
                                    <div class="wrapper">
										<!-- first section -->
										<?php $i = 0 ?>
										@foreach($produitsParCategorie as $produits)
											<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
												<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
													<span></span>{{  $categoriesType[$i] }}
												</h3>
												<div class="row">
													@foreach ($produits as $produit)
													<div class="col-md-3 product-men">
														<div class="men-pro-item simpleCart_shelfItem">
															<div class="men-thumb-item text-center">
																<img src="/storage/{{ $produit->image}}" height="100" width="150" alt="">
																<div class="men-cart-pro">
																	<div class="inner-men-cart-pro">
																		<a href="{{ route('detail',$produit->id) }}" class="link-product-add-cart">Quick View</a>
																	</div>
																</div>
															</div>
															<div class="item-info-product text-center border-top mt-4">
																<h4 class="pt-1">
																	<a href="#">{{ $produit->designation }}</a>
																</h4>
																<div class="info-product-price my-2">
																	<span class="item_price">{{ $produit->prix}}</span>
																</div>
																<span class="product-new-top">nouveau</span>
																<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
																	<form action="{{ route('cart.store') }}" method="post">
																		@csrf
																		<fieldset>
																			<input type="hidden" name="id" value="{{ $produit->id }}"/>
																			<button class="btn btn-primary" type="submit" >Ajouter au <i class=" fa fa-cart-plus" aria-hidden="true" title="panier"></i></button><br><br>
																		</fieldset>
																	</form>
																</div>
															</div>
														</div>
													</div>
													@endforeach
													<div style="margin-left: 80%">
														{!! link_to_route('site.produitParCategorie', 'Voir plus', [$categoriesId[$i]], ['class' => 'fa fa-eye btn btn-default']) !!}
													</div>
												</div>
											</div>
										<?php $i = $i + 1 ?>
										@endforeach
                                        <!-- //first section -->
                                        <!-- second section -->
                               
                                        <!-- //second section -->
                                        <!-- 3rd section -->


                                        <!-- //3rd section -->
                                        <!-- fourth section -->
                                        <!-- //fourth section -->
                                    </div>
                                </div>
                                <!-- //product left -->
                            </div>
						</div>
					</div>
				</div>
				<!-- //product left -->
				<!-- product right -->
				<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
					<div class="side-bar p-sm-4 p-3">
						<div class="search-hotel border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Brand</h3>
							<form action="#" method="post">
								<input type="search" placeholder="Search Brand..." name="search" required="">
								<input type="submit" value=" ">
							</form>
							<div class="left-side py-2">
								<ul>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Samsung</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Red Mi</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Apple</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Nexus</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Motorola</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Micromax</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Lenovo</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Oppo</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Sony</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">LG</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">One Plus</span>
									</li>
								</ul>
							</div>
						</div>
						<!-- ram -->
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Ram</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Less than 512 MB</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">512 MB - 1 GB</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">1 GB</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">2 GB</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">3 GB</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">5 GB</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">6 GB</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">6 GB & Above</span>
								</li>
							</ul>
						</div>
						<!-- //ram -->
						<!-- price -->
						<div class="range border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Price</h3>
							<div class="w3l-range">
								<ul>
									<li>
										<a href="#">Under $1,000</a>
									</li>
									<li class="my-1">
										<a href="#">$1,000 - $5,000</a>
									</li>
									<li>
										<a href="#">$5,000 - $10,000</a>
									</li>
									<li class="my-1">
										<a href="#">$10,000 - $20,000</a>
									</li>
									<li>
										<a href="#">$20,000 $30,000</a>
									</li>
									<li class="mt-1">
										<a href="#">Over $30,000</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- //price -->
						<!-- discounts -->
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Discount</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">5% or More</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">10% or More</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">20% or More</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">30% or More</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">50% or More</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">60% or More</span>
								</li>
							</ul>
						</div>
						<!-- //discounts -->
						<!-- offers -->
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Offers</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Exchange Offer</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">No Cost EMI</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Special Price</span>
								</li>
							</ul>
						</div>
						<!-- //offers -->
						<!-- delivery -->
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Cash On Delivery</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Eligible for Cash On Delivery</span>
								</li>
							</ul>
						</div>
						<!-- //delivery -->
						<!-- arrivals -->
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">New Arrivals</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Last 30 days</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Last 90 days</span>
								</li>
							</ul>
						</div>
						<div class="left-side py-2">
							<h3 class="agileits-sear-head mb-3">Availability</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Exclude Out of Stock</span>
								</li>
							</ul>
						</div>
						<!-- //arrivals -->
					</div>
					<!-- //product right -->
				</div>
			</div>
		</div>
	</div>
	<!-- //top products -->

@endsection
