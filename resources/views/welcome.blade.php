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

        @foreach ($films as $film)
            <div class="movie-card">
        		<div class="movie-header manOfSteel">
        			<div class="header-icon-container">
        				<a href="{{ url('/film/'.$film->id) }}">
        					<i class="material-icons header-icon"></i>
        				</a>
        			</div>
        		</div><!--movie-header-->
                <img src="{{ $film->photo }}" alt="manOfSteel" class="moviebg">
        		<div class="movie-content">
        			<div class="movie-content-header">
        				<a href="{{ url('/film/'.$film->id) }}">
        					<h3 class="movie-title">{{ $film->name }}</h3>
        				</a>
        			</div>
        			<div class="movie-info">
        				<div class="info-section">
        					<label>Release Date</label>
        					<span>{{ date("M d, Y", strtotime($film->release_date)) }}</span>
        				</div><!--date,time-->
        				<div class="info-section">
        					<label>Ticket Price</label>
        					<span>{{ $film->ticket_price }} $</span>
        				</div><!--ticket price-->
        			</div>
        		</div><!--movie-content-->
        	</div><!--movie-card-->
        @endforeach

    </div><!--container-->
@endsection
