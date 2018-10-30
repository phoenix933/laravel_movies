@extends('layouts.app')

@section('style')
    <link href="{{ url('css/film.scss') }}" rel="stylesheet">
@endsection

@section('script')
@endsection

@section('content')
<div class="container">
    <div class="row container-inner">
        <div class="col-md-12">
            <div class="movie-card">
                <a href="#"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/hobbit_cover.jpg" alt="cover" class="cover" /></a>

                <div class="hero">

                  <div class="details">

                    <div class="title">The Hobbit </div>

                    <fieldset class="rating">
                <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="5 stars"></label>
                <input type="radio" id="star4" name="rating" value="4" checked /><label class = "full" for="star4" title="4 stars"></label>
                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="3 stars"></label>
                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="2 stars"></label>
                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="1 star"></label>
              </fieldset>

                    <span class="country">United States</span>

                  </div> <!-- end details -->

                </div> <!-- end hero -->

                <div class="description row">

                  <div class="column1 col-md-3">
                    <span>Ticket Price: 50 $</span><br>
                    <span class="tag">action</span>
                    <span class="tag">fantasy</span>
                    <span class="tag">adventure</span>
                  </div> <!-- end column1 -->

                  <div class="column2 col-md-9">

                    <p>Bilbo Baggins is swept into a quest to reclaim the lost Dwarf Kingdom of Erebor from the fearsome dragon Smaug. Approached out of the blue by the wizard Gandalf the Grey, Bilbo finds himself joining a company of thirteen dwarves led by the legendary warrior, Thorin Oakenshield. Their journey will take them into the Wild; through... </p>
                    <p>Bilbo Baggins is swept into a quest to reclaim the lost Dwarf Kingdom of Erebor from the fearsome dragon Smaug. Approached out of the blue by the wizard Gandalf the Grey, Bilbo finds himself joining a company of thirteen dwarves led by the legendary warrior, Thorin Oakenshield. Their journey will take them into the Wild; through... </p>
                    <p>Bilbo Baggins is swept into a quest to reclaim the lost Dwarf Kingdom of Erebor from the fearsome dragon Smaug. Approached out of the blue by the wizard Gandalf the Grey, Bilbo finds himself joining a company of thirteen dwarves led by the legendary warrior, Thorin Oakenshield. Their journey will take them into the Wild; through... </p>

                  </div> <!-- end column2 -->
                </div> <!-- end description -->



            </div> <!-- end movie-card -->
        </div> <!-- end col -->
    </div> <!-- end row -->
</div> <!-- end container -->
@endsection