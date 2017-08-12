@extends('church.master')

@section('title')
Welcome To WESLEY METHODIST CHURCH
@endsection

@section('nav2')
<div class="nav2 navbar navbar-default">
   <div class="col-md-8 col-md-offset-2">
	<ul class="list-inline list-unstyled">
		<li><a href="#about">ABOUT</a></li>
		<li><a href="#leaders">LEADERSHIP</a></li>
		<li><a href="#org">ORGANIZATIONS</a></li>
		<li><a href="{{route('blogPage')}}">BLOG</a></li>
	</ul>
	</div>
</div>
@endsection

@section('contents')
<!--Image Serving as Landing page-->
<div class="landing">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
	<h1>WELCOME TO WESLEY METHODIST CHURCH - OTABILKROM</h1>
	<p>
		Wesley!!!<br>
		Awo fofor mba
	</p>
	<p>
<a href="/register-member"><input type="button" class="btn btn-primary btn-lg" value="Click to Register"></a> 
</p>
			</div>
		</div>
	</div>
</div>


<!--About Container-->
<div class="about" id="about">
	<div class="container">
		<div class="row">
		<div class="col-md-4">
			<h3 class="text-center">MISSION</h3>
			<p>ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum>
			</p>
		</div>
		<div class="col-md-4">
		<h3 class="text-center">CORE VALUES</h3>
		<p> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum>
			</p>
		</div>
		<div class="col-md-4">
		<h3 class="text-center">CORE VALUES</h3>
		<p> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum>
			</p>
		</div>
		</div>
	</div>
</div>



<!--Organization Container-->
<div class="leaders" id="leaders">
	<div class="container">
		<div class="row">	
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="/img/pumba.jpg" alt="Generic placeholder thumbnail" class="img-responsive">
				</div>
		<div class="caption">
			<h4>Mr. D. K. Yaw Ocran</h4>
				<p>He is the Caretakeer of the Church. He has served for
				 many years and we are looking forward to His replacement
				 when God reveals His successor to us.
				 </p>
		</div>
			</div>

			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="/img/rafiki.jpg" alt="Generic placeholder thumbnail" class="img-responsive img-rounded">
				</div>
		<div class="caption">
			<h4 class="text-center">Mr. D. K. Yaw Ocran</h4>
				<p>He is the Caretakeer of the Church. He has served for
				 many years and we are looking forward to His replacement
				 when God reveals His successor to us.
				 </p>
		</div>
			</div>

	<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
	<img src="/img/timon.jpg" alt="Generic placeholder thumbnail" class="img-responsive img-rounded">
				</div>
		<div class="caption">
			<h4>Mr. D. K. Yaw Ocran</h4>
				<p>He is the Caretakeer of the Church. He has served for
				 many years and we are looking forward to His replacement
				 when God reveals His successor to us.
				 </p>
		</div>
			</div>


	<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
		<img src="/img/mum.jpg" alt="Generic placeholder thumbnail" class="img-responsive img-rounded">
				</div>
		<div class="caption">
			<h4>Mr. D. K. Yaw Ocran</h4>
				<p>He is the Caretakeer of the Church. He has served for
				 many years and we are looking forward to His replacement
				 when God reveals His successor to us.
				 </p>
		</div>
			</div>


		</div>

	</div>
</div>




<div class="org" id="org"> <!--For the ORGANIZATION TABS YOU HAVE DONE REPLACE THEM WITH AN ACCORDION-->
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-12 col-lg-12">
				<h4 class="text-center">ORGANIZATIONS</h4>
					<ul class="nav nav-tabs">
						<li><a href="#youth" data-toggle="tab">YOUTH FELLOWSHIP</a></li>
						<li><a href="#mgf" data-toggle="tab">GIRLS' FELLOWSHIP</a></li>
						<li><a href="#men" data-toggle="tab">MEN'S FELLOWSHIP</a></li>
						<li><a href="#choir" data-toggle="tab">CHURCH CHOIR</a></li>
						<li><a href="#guild" data-toggle="tab">GUILD</a></li>
						<li><a href="#suma" data-toggle="tab">SUWMA</a></li>
					</ul>


<!--Description for ORGANIZATIONS-->
<div class="tab-content">
<!--Youth Fellowship-->
 <div class="tab-pane fade active in " id="youth">
    <div class="media">
    <a class="pull-left">
		<img class="media-object img-responsive img-thumbnail" src="/img/timon.jpg" alt="Media Object">
		</a>
	<div class="media-body">
		<h4 class="media-heading caption text-center">DESCRIPTION</h4>
		  <p>
			The Methodist Youth Fellowship(MYF) serves as the organization for the
			Youth of the Church.
		  </p>
		  <p>
		  	Meeting day is 7:00pm  on Sundays.
		  </p>
		  <p>
		  	Slogan: We Witness , We Work , We Worship.<br>
		  	We!!!! We!!!! We!!!! <br>
		  	One!!!! One!!!! One!!!!
		  </p>
	</div>
	</div>
 </div>

<!--Girl's Fellowship-->
 <div class="tab-pane fade" id="mgf">
       <div class="media">
<a class="pull-left">
<img class="img-responsive img-thumbnail" src="/img/rafiki.jpg" alt="Media Object">
</a>
<div class="media-body">
<h4 class="media-heading">Media heading</h4>
<p>
This is some sample text. This is some sample text.
This is some sample text. This is some sample text.
This is some sample text. This is some sample text.
This is some sample text. This is some sample text.
</p>
</div>
</div>
 </div>

 <!--Men's Fellowship-->
 <div class="tab-pane fade" id="men">
 <div class="media">
<a class="pull-left">
<img class="media-object img-responsive img-thumbnail" src="/img/mum.jpg" alt="Media Object">
</a>
<div class="media-body">
<h4 class="media-heading">Media heading</h4>
<p>
This is some sample text. This is some sample text.
This is some sample text. This is some sample text.
This is some sample text. This is some sample text.
This is some sample text. This is some sample text.
</p>
</div>
</div>       
 </div>

 <!--Church Choir-->
 <div class="tab-pane fade" id="choir">
          <div class="media">
<a class="pull-left">
<img class="media-object img-responsive img-thumbnail" src="/img/pumba.jpg" alt="Media Object">
</a>
<div class="media-body">
<h4 class="media-heading">Media heading</h4>
<p>
This is some sample text. This is some sample text.
This is some sample text. This is some sample text.
This is some sample text. This is some sample text.
This is some sample text. This is some sample text.
</p>
</div>
</div>
 </div>

 <!--Guild-->
 <div class="tab-pane fade" id="guild">
        <div class="media">
<a class="pull-left">
<img class="media-object img-thumbnail img-responsive" src="/img/ravi.jpg" alt="Media Object">
</a>
<div class="media-body">
<h4 class="media-heading">Media heading</h4>
<p>
This is some sample text. This is some sample text.
This is some sample text. This is some sample text.
This is some sample text. This is some sample text.
This is some sample text. This is some sample text.
</p>
</div>
</div>
 </div>

 <!--SUWMA-->
 <div class="tab-pane fade" id="suma">
           <div class="media">
<a class="pull-left">
<img class="media-object img-responsive img-thumbnail" src="/img/ravi.jpg" alt="Media Object">
</a>
<div class="media-body">
<h4 class="media-heading">Media heading</h4>
<p>
This is some sample text. This is some sample text.
This is some sample text. This is some sample text.
This is some sample text. This is some sample text.
This is some sample text. This is some sample text.
</p>
</div>
</div>
 </div>

</div>

			</div>
		</div>
	</div>
</div>

<!--Carousel of advertisement and logos of all organizations in the church-->
<div class="gal" id="gal">
	<div class="container">
	<h5> FEW POINT FROM RAVI ZACHARIAS' SERMON:<br>
		<em>(ABSOLUTE TRUTH IN RELATIVE TERMS)</em>
	 </h5>
		<p>
		These are the fundamental issues that every worldview in one way or the other has to address.<br>
		<strong>Evil,Justice,Love and Forgiveness.</strong><br>
		The one place that these four converge is on the hill called Calvary.
		<ul>
		<li>Evil in the heart of men expressed.</li>
		<li>The Justice of God the Father.</li>
		<li>Love poured out through His Son.</li>
		<li>Forgiveness (Father forgive them for they know not what their doing).</li>
		</ul>
		</p>
		<em>I guess you understand why I call myself <strong>Bra Krox Effectx</strong>(The Cross' Effects)</em>
	</div>
</div>

@endsection