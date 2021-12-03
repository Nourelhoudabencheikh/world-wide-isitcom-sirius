@extends('layouts.app')

@section('content')
<!-- Header -->
<style>
    .boxCartLink:hover{

        background-color: #fafafa!important;
    }
    .boxCartLink:nth-child(even){
        background-color: #f7f7f7;
    }
    .boxCart:nth-child(odd){
        background-color: #f7f7f7;
    }
    .frame2 {
        overflow-y: auto;
        height: 320px;
        width: 100%;
        line-height: 1em;
    }
    .frame1 {
        overflow-y: auto;
        height: 400px;
        width: 100%;
        line-height: 1em;
    }

    .frame1::-webkit-scrollbar,.frame2::-webkit-scrollbar {
        -webkit-appearance: none;
    }

    .frame2::-webkit-scrollbar:vertical,.frame1::-webkit-scrollbar:vertical {
        width: 6px;
    }
    

    .frame2::-webkit-scrollbar:horizontal,.frame1::-webkit-scrollbar:horizontal {
        height: 0px;
    }

    .frame2::-webkit-scrollbar-thumb,.frame1::-webkit-scrollbar-thumb {
        border-radius: 8px;
        border: 0px solid #fa5d07; /* should match background, can't be transparent */
        background-color: #fa5d07;
    }

   
</style>
<div id="home" class="banner w3l">
	<div class="container">
		<div class="header-nav">
			<nav class="navbar navbar-default">
					<div class="navbar-header logo">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">{{$tr->translate('Toggle navigation')}}</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<h1>
									<a class="navbar-brand" href="index.html">{{$tr->translate('Rescue')}}</a>
								</h1>
					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="index.html" class="active">{{$tr->translate('Home') }}</a></li>
							<li><a href="about.html">{{$tr->translate('About us')}}</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{$tr->translate('Languages') }}<b class="caret"></b></a>
								<ul class="frame1 pre-scrollable dropdown-menu agile_short_dropdown">
                                    @foreach($langue as $lan)
									    <li>
											<a  href="#">{{  $lan->titre}}</a>
											 <br>
											@foreach($lan->culture as $cult)<a style=" font-size:12px; font-weight:400" href="{{ route('lang.switch', $lan->code) }}"> {{ $cult->titre }}  </a> <br>										@endforeach

										</li>
										@endforeach

								</ul>
							</li>
					
						</ul>
					</div>
					<div class="clearfix"> </div>	
				</nav>
							<div class="clearfix"> </div>
		</div>
		<div class="banner-info wow bounceInDown" data-wow-duration="1s" data-wow-delay="0s">
			<div  class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-text">
							
							<h3>{{$tr->translate('Saving people ,Saving lives') }}</h3>
						
						</div>
					</li>
				
				
				</ul>
			</div>	
		</div>
		<div class="more-button">
			<div class="button">
		</div>

		</div>
	</div>	
	
</div>	
<!-- //Header -->

<!-- banner-bottom -->
<div class="banner-bottom">
	<div class="bnr-btm-grids-agileits">
		<div class="bnr-btm-icon">
			<i class="fa fa-mobile" aria-hidden="true"></i>
		</div>
		<div class="bnr-btm-info">
			<h3>{{$tr->translate('Give  us a call') }}</h3>
			<p>{{$tr->translate('+(012) 345 6789') }} </p>
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="bnr-btm-grids-agileits">
		<div class="bnr-btm-icon">
			<i class="fa fa-envelope-o" aria-hidden="true"></i>
		</div>
		<div class="bnr-btm-info">
			<h3>{{$tr->translate('Send us a message') }}</h3>
			<p><a href="mailto:info@example.com">{{$tr->translate('example@mail.com') }}</a></p>
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="bnr-btm-grids-agileits">
		<div class="bnr-btm-icon">
			<i class="fa fa-map-marker" aria-hidden="true"></i>
		</div>
		<div class="bnr-btm-info">
			<h3>{{$tr->translate('Visit our location') }}</h3>
			<p>{{$tr->translate('Tunisia') }}</p>
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="bnr-btm-grids-agileits">
		<div class="bnr-btm-icon">
			<i class="fa fa-users" aria-hidden="true"></i>
		</div>
		<div class="bnr-btm-info">
			<h3>{{$tr->translate('Follow us on') }}</h3>
			<ul class="social-agileinfo">
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="clearfix"></div>
</div>
<!-- //banner-bottom -->
<!-- about -->
	<div class="about">
		<div class="container">
		<h2 class="heading-agileinfo">{{$tr->translate('About us') }} <i class="fa fa-anchor" aria-hidden="true"></i></h2>
		<div id="horizontalTab">
					<ul class="resp-tabs-list">
					<li>
						<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
					</li>
					<li>
						<i class="fa fa-random" aria-hidden="true"></i>
					</li>
					<li>
						<i class="fa fa-cogs" aria-hidden="true"></i>
					</li>
					<li>
						<i class="fa fa-shield" aria-hidden="true"></i>
					</li>
					</ul>
					<div class="resp-tabs-container">
					<div class="tab1">
						<div class="col-md-6 services-img-w3-agile a1">
						</div>
						<div class="col-md-6 services-right-agileits">
							<h4>{{$tr->translate('Trusted Adventure Agent')}}</h4>
							<p class="para-agileits-w3layouts">
								{{$tr->translate('Lifeguard equipment is essential
								for the safety of both victims and volunteers. ')}}</p>
							<a class="read-agileits"  href="about.html">{{$tr->translate('Read More')}}</a>	
						</div>
					</div>
					
					<div class="tab2">
						<div class="col-md-6 services-img-w3-agile a3">
						</div>
						<div class="col-md-6 services-right-agileits bar-grids bargrids-left">
							<h4>{{$tr->translate('Our Team Skill ')}}</h4>
							<h6>{{$tr->translate('Durability') }} <span>{{$tr->translate('80%') }} </span></h6>
							<div class="progress">
								<div class="progress-bar progress-bar-striped active" style="width: 80%">
								</div>
							</div>
							<h6>{{$tr->translate('Swimming')}} <span> {{$tr->translate('70%')}}' </span></h6>
							<div class="progress  w3-agile">
								<div class="progress-bar progress-bar-striped active" style="width: 70%">
								</div>
							</div>
							<h6>{{$tr->translate('Survival')}} <span>{{$tr->translate('90%')}}' </span></h6>
							<div class="progress  w3-agile">
								<div class="progress-bar progress-bar-striped active" style="width: 90%">
								</div>
							</div>
							<h6>{{$tr->translate('Stamina') }} <span> {{$tr->translate('75%')}} </span></h6>
							<div class="progress  w3-agile prgs-w3agile-last">
								<div class="progress-bar progress-bar-striped active" style="width: 75%">
								</div>
							</div>
						</div> 

					</div>
					<div class="tab3">
						<div class="col-md-6 services-right-agileits img-top">
							<h4>{{$tr->translate('Best Adventure Gear')}}</h4>
							<p class="para-agileits-w3layouts">{{$tr->translate('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis suscipit et dui ut cursus. Ut tortor nisi, congue quis orci at, posuere mattis est. Nunc sollicitudin nisi lorem, eget aliquet leo scelerisque eu. Cras placerat, ligula nec bibendum aliquam, nibh massa venenatis leo, at convallis sem est a sapien.') }}</p>
							<a class="read-agileits"  href="about.html">{{$tr->translate('Read More')}}</a>	
						</div>
						<div class="col-md-6 services-img-w3-agile">
						</div>
					</div>
					<div class="tab4">
						<div class="col-md-6 services-img-w3-agile a1">
						</div>
						<div class="col-md-6 services-right-agileits">
							<h4>{{$tr->translate('Professional Guide') }}</h4>
							<p class="para-agileits-w3layouts">{{$tr->translate('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis suscipit et dui ut cursus. Ut tortor nisi, congue quis orci at, posuere mattis est. Nunc sollicitudin nisi lorem, eget aliquet leo scelerisque eu. Cras placerat, ligula nec bibendum aliquam, nibh massa venenatis leo, at convallis sem est a sapien.')}}</p>
							<a class="read-agileits"  href="about.html">{{$tr->translate('Read More')}}</a>	
						</div>
					</div>
					</div>
			</div>
	
		</div>
	</div>
<!-- banner-bottom -->
<!-- Reasons to trust us -->
<div class="reasons-agileits-w3layouts">
	<div class="container">
	<h3 class="heading-agileinfo white-w3ls">{{$tr->translate('Reasons for Reliability')}} <i class="fa fa-anchor" aria-hidden="true"></i></h3>
		<div class="col-md-4 about-w3-grids">
			<div class="trust-icon-w3ls">
				<i class="fa fa-user" aria-hidden="true"></i>
			</div>
			<h4>{{$tr->translate('Events')}}</h4>
			<p class="para-agileits-w3layouts">{{$tr->translate('we will have a')}} </p>
			<p class="para-agileits-w3layouts">{{$tr->translate('lot of events.')}}' </p>
			<a class="read-agileits" href="about.html">{{$tr->translate('Read More')}}</a>
		</div>
		<div class="col-md-4 about-w3-grids">
			<div class="trust-icon-w3ls">
				<i class="fa fa-users" aria-hidden="true"></i>
			</div>
			<h4>{{$tr->translate('volunteers')}}</h4>
			<p class="para-agileits-w3layouts">{{$tr->translate('Increase in rescues from migrant boats in the North Sea and the English Channel.')}}</p>
			<a class="read-agileits" href="about.html">{{$tr->translate('Read More')}}</a>
		</div>
		<div class="col-md-4 about-w3-grids">
			<div class="trust-icon-w3ls">
				<i class="fa fa-cogs" aria-hidden="true"></i>
			</div>
			<h4>{{$tr->translate('Sauvetage')}}</h4>
			<p class="para-agileits-w3layouts">{{$tr->translate('Help, be in contact with people, and transmit both actions and my passion.')}}' </p>
			<a class="read-agileits" href="about.html">{{$tr->translate('Read More')}}</a>
		</div>
		<div class="clearfix"></div>				
	</div>			
</div>
<!-- //Reasons to trust us -->
<!-- Stats -->
<div class="stats-agileits" id="stats">
	<div class="container">
		<div class="stats-info agileits w3layouts">
			<div class="col-md-3 agileits w3layouts col-sm-6 stats-grid stats-grid-1">
				<div class="stat-info-w3ls">
					<i class="fa fa-globe" aria-hidden="true"></i>
					<div class="numscroller agileits-w3layouts" data-slno='1' data-min='0' data-max='53' data-delay='3' data-increment="2">53</div>
					<h4 class="agileits w3layouts">{{$tr->translate('Sponsors') }}</h4>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 agileits w3layouts stats-grid stats-grid-2">
				<div class="stat-info-w3ls">
					<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
					<div class="numscroller agileits-w3layouts" data-slno='1' data-min='0' data-max='1000' data-delay='3' data-increment="2">1000</div>
					<h4 class="agileits w3layouts">{{$tr->translate('Adventurer Trusts') }}</h4>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 stats-grid agileits w3layouts stats-grid-3">
				<div class="stat-info-w3ls">
					<i class="fa fa-anchor" aria-hidden="true"></i>
					<div class="numscroller agileits-w3layouts" data-slno='1' data-min='0' data-max='75' data-delay='3' data-increment="2">75</div>
					<h4 class="agileits w3layouts">{{$tr->translate('Volunteers') }}</h4>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 stats-grid stats-grid-4 agileits w3layouts">
				<div class="stat-info-w3ls">
					<i class="fa fa-users" aria-hidden="true"></i>
					<div class="numscroller agileits-w3layouts" data-slno='1' data-min='0' data-max='150' data-delay='3' data-increment="2">150</div>
					<h4 class="agileits w3layouts">{{$tr->translate('Victims') }}</h4>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
	<!-- //Stats -->
<!-- testimonials -->
<div class="testimonials">
	<div class="container">
	<h3 class="heading-agileinfo white-w3ls">{{$tr->translate('Our Teams')}} <i class="fa fa-anchor" aria-hidden="true"></i></h3>
		<section class="slider">
			<div class="flexslider">
				<ul class="slides">
				  <li>
					<div class="banner-bottom-2">			  		
						<div class="about-midd-main">
							<p> {{$tr->translate('consectetur adipiscing elit, sed do eiusmod idunt ut labore. sed do eiusmod tempor incididunt ut labore et dolore.') }}</p>
							<div class="test-right-w3layouts">
								<img class="agile-img" src="images/t1.jpg" alt="clients">
								<h4>{{$tr->translate('Aaron Wade')}} <span>{{$tr->translate('Incididunt ut labore')}}</span></h4>
							</div>
						</div>
					</div>
				  </li>
			
				  
				</ul>
			</div>
			<div class="clear"> </div>
		</section>
	</div>
</div>
<!-- //testimonials -->
<!-- footer -->
<div class="footer">
		<div class="container">
			
			<div class="w3ls_address_mail_footer_grids">
				<div class="col-md-4 w3ls_footer_grid_left">
					<div class="wthree_footer_grid_left">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
					</div>
					<p>{{$tr->translate('Marsa Allam Rd Red Sea <span>Governorate, Egypt.')}}</span></p>
				</div>
				<div class="col-md-4 w3ls_footer_grid_left">
					<div class="wthree_footer_grid_left">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</div>
					<p>{{$tr->translate('+(012) 345 6789 ')}}<span>{{$tr->translate('+(012) 678 3459')}}</span></p>
				</div>
				<div class="col-md-4 w3ls_footer_grid_left">
					<div class="wthree_footer_grid_left">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
					</div>
					<p><a href="mailto:info@example.com">{{$tr->translate('info@example1.com')}}</a> 
						<span><a href="mailto:info@example.com">{{$tr->translate('info@example2.com')}}</a></span></p>
				</div>
				<div class="clearfix"> </div>
			</div>
		
		</div>
	</div>
<!-- Modal1 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" >
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4>{{$tr->translate('Plunge')}}</h4>
					<img src="images/bann3.jpg" alt="blog-image" />
					<p class="para-agileits-w3layouts">{{$tr->translate('Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.accusantium doloremque laudantium, totam rem aperiamconsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.')}}</p>
			</div>
		</div>
	</div>
</div>
<!-- //Modal1 -->
<!--//footer -->
@endsection