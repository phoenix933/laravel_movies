@extends('layouts.app')

@section('style')
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
    <link href="{{ url('css/index.css') }}" rel="stylesheet">
@endsection

@section('script')
    <script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script>
    <script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script>
    <script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script>
@endsection

@section('content')
    <div class="container-inner">
    	<div class="movie-card">
    		<div class="movie-header manOfSteel">
    			<div class="header-icon-container">
    				<a href="#">
    					<i class="material-icons header-icon"></i>
    				</a>
    			</div>
    		</div><!--movie-header-->
            <img src="http://henrycavill.org/images/Films/2013-Man-of-Steel/posters/3-Walmart-Superman-a.jpg" alt="manOfSteel" class="moviebg">
    		<div class="movie-content">
    			<div class="movie-content-header">
    				<a href="#">
    					<h3 class="movie-title">Man of Steel</h3>
    				</a>
    				<div class="imax-logo"></div>
    			</div>
    			<div class="movie-info">
    				<div class="info-section">
    					<label>Date & Time</label>
    					<span>Sun 8 Sept - 10:00PM</span>
    				</div><!--date,time-->
    				<div class="info-section">
    					<label>Screen</label>
    					<span>03</span>
    				</div><!--screen-->
    				<div class="info-section">
    					<label>Row</label>
    					<span>F</span>
    				</div><!--row-->
    				<div class="info-section">
    					<label>Seat</label>
    					<span>21,22</span>
    				</div><!--seat-->
    			</div>
    		</div><!--movie-content-->
    	</div><!--movie-card-->

    	<div class="movie-card">
    		<div class="movie-header">
    			<div class="header-icon-container">
                    <a href="#">
                        <i class="material-icons header-icon"></i>
    				</a>
    			</div>
    		</div><!--movie-header-->
            <img src="http://www.gstatic.com/tv/thumb/v22vodart/13259415/p13259415_v_v8_ae.jpg" alt="babyDriver" class="moviebg">
    		<div class="movie-content">
    			<div class="movie-content-header">
    				<a href="#">
    					<h3 class="movie-title">Baby Driver</h3>
    				</a>
    				<div class="imax-logo"></div>
    			</div>
    			<div class="movie-info">
    				<div class="info-section">
    					<label>Date & Time</label>
    					<span>Tue 4 July - 05:00PM</span>
    				</div><!--date,time-->
    				<div class="info-section">
    					<label>Screen</label>
    					<span>01</span>
    				</div><!--screen-->
    				<div class="info-section">
    					<label>Row</label>
    					<span>H</span>
    				</div><!--row-->
    				<div class="info-section">
    					<label>Seat</label>
    					<span>15</span>
    				</div><!--seat-->
    			</div>
    		</div><!--movie-content-->
    	</div><!--movie-card-->

    	<div class="movie-card">
    		<div class="movie-header">
    			<div class="header-icon-container">
    				<a href="#">
    					<i class="material-icons header-icon"></i>
    				</a>
    			</div>
    		</div><!--movie-header-->
            <img src="http://cdn.collider.com/wp-content/uploads/2017/03/the-dark-tower-poster.jpg" alt="theDarkTower" class="moviebg">
    		<div class="movie-content">
    			<div class="movie-content-header">
    				<a href="#">
    					<h3 class="movie-title">The Dark Tower</h3>
    				</a>
    				<div class="imax-logo"></div>
    			</div>
    			<div class="movie-info">
    				<div class="info-section">
    					<label>Date & Time</label>
    					<span>Wed 16 Aug - 07:00PM</span>
    				</div><!--date,time-->
    				<div class="info-section">
    					<label>Screen</label>
    					<span>06</span>
    				</div><!--screen-->
    				<div class="info-section">
    					<label>Row</label>
    					<span>C</span>
    				</div><!--row-->
    				<div class="info-section">
    					<label>Seat</label>
    					<span>18</span>
    				</div><!--seat-->
    			</div>
    		</div><!--movie-content-->
    	</div><!--movie-card-->

    	<div class="movie-card">
    		<div class="movie-header">
    			<div class="header-icon-container">
    				<a href="#">
    					<i class="material-icons header-icon"></i>
    				</a>
    			</div>
    		</div><!--movie-header-->
            <img src="http://cdn.collider.com/wp-content/uploads/2017/05/blade-runner-2049-poster-ryan-gosling.jpeg" alt="bladeRunner" class="moviebg">
    		<div class="movie-content">
    			<div class="movie-content-header">
    				<a href="#">
    					<h3 class="movie-title">Blade Runner 2049</h3>
    				</a>
    				<div class="imax-logo"></div>
    			</div>
    			<div class="movie-info">
    				<div class="info-section">
    					<label>Date & Time</label>
    					<span>Mon 16 Oct - 10:00PM</span>
    				</div><!--date,time-->
    				<div class="info-section">
    					<label>Screen</label>
    					<span>06</span>
    				</div><!--screen-->
    				<div class="info-section">
    					<label>Row</label>
    					<span>D</span>
    				</div><!--row-->
    				<div class="info-section">
    					<label>Seat</label>
    					<span>05,06</span>
    				</div><!--seat-->
    			</div>
    		</div><!--movie-content-->
    	</div><!--movie-card-->

    </div><!--container-->
@endsection
