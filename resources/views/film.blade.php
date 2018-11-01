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
                <a href="#"><img src="{{ $film->photo }}" alt="{{ $film->name }}" class="cover" /></a>

                <div class="hero">

                  <div class="details">

                    <div class="title">{{ $film->name }} </div>

                    <fieldset class="rating">
                        <input type="radio" name="rating" value="5" @if($film->rating == 5) checked @endif /><label class = "full" for="star5"></label>
                        <input type="radio" name="rating" value="4" @if($film->rating == 4) checked @endif /><label class = "full" for="star4"></label>
                        <input type="radio" name="rating" value="3" @if($film->rating == 3) checked @endif /><label class = "full" for="star3"></label>
                        <input type="radio" name="rating" value="2" @if($film->rating == 2) checked @endif /><label class = "full" for="star2"></label>
                        <input type="radio" name="rating" value="1" @if($film->rating == 1) checked @endif /><label class = "full" for="star1"></label>
                    </fieldset>

                    <span class="country">{{ $film->contry }}</span>

                  </div> <!-- end details -->

                </div> <!-- end hero -->

                <div class="description row">

                  <div class="column1 col-md-3">
                    <span>Ticket Price: {{ $film->ticket_price }} $</span><br>
                    @foreach ($film->genres as $genre)
                        <span class="tag">{{ $genre->title }}</span>
                    @endforeach
                  </div> <!-- end column1 -->

                  <div class="column2 col-md-9">

                    <p>{{ $film->description }}</p>

                    <br><br>
                    <div class="detailBox">
                        <div class="titleBox">
                          <label>Comments</label>
                        </div>
                        <div class="actionBox">
                            <ul class="commentList">
                                @foreach ($film->comments as $comment)
                                    <li>
                                        <div class="commentText">
                                            <p class="">{{ $comment->comment }}</p> <span class="date sub-text">{{ $comment->user->name }} on {{ $comment->created_at }}</span>

                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            @guest
                                <a href="{{ route('login') }}">Login</a> to send comment.
                            @else
                            <form class="form-inline" role="form" method="POST" action="{{ route('send_comment') }}">
                                <div class="form-group">
                                    <textarea class="form-control" name="comment">Your comment</textarea>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-default" type="submit">Send</button>
                                </div>
                                <div class="form-group">
                                    @csrf
                                    <input type="hidden" name="film_id" value="{{ $film->id }}">
                                </div>

                            </form>
                            @endguest
                        </div>
                    </div>

                  </div> <!-- end column2 -->
                </div> <!-- end description -->

            </div> <!-- end movie-card -->
        </div> <!-- end col -->
    </div> <!-- end row -->
</div> <!-- end container -->
@endsection
