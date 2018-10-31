@extends('layouts.admin')

@section('style')
@endsection

@section('script')
@endsection

@section('content')
    <div class="card">
        <form action="{{ route('films.create') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-header">
            <strong>Add</strong> Film</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="title">title</label>
                            <input class="form-control" id="title" type="text" name="title" required autofocus>
                            @if ($errors->has('title'))<span class="help-block">{{ $errors->first('title') }}</span>@endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="description">description</label>
                            <textarea class="form-control" id="description" name="description" rows="description" required></textarea>
                            @if ($errors->has('description'))<span class="help-block">{{ $errors->first('description') }}</span>@endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="release_date">release_date</label>
                            <input class="form-control" id="release_date" type="date" name="release_date" required>
                            @if ($errors->has('release_date'))<span class="help-block">{{ $errors->first('release_date') }}</span>@endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="rating">rating</label>
                            <select class="form-control" id="rating">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                            @if ($errors->has('rating'))<span class="help-block">{{ $errors->first('rating') }}</span>@endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="ticket_price">ticket_price</label>
                            <input class="form-control" id="ticket_price" type="text" name="ticket_price" required>
                            @if ($errors->has('ticket_price'))<span class="help-block">{{ $errors->first('ticket_price') }}</span>@endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="country">country</label>
                            <input class="form-control" id="country" type="text" name="country" required>
                            @if ($errors->has('country'))<span class="help-block">{{ $errors->first('country') }}</span>@endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="genre">genre</label>
                            <select class="form-control" id="genre" multiple genre>
                                @foreach ($genres as $genre)
                                    <option value="{{ $genre->id }}">{{ $genre->title }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('genre'))<span class="help-block">{{ $errors->first('genre') }}</span>@endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group"><br>
                            <label class="col-form-label" for="photo">photo</label>
                            <input id="file-input" type="file" name="photo" required>
                            @if ($errors->has('photo'))<span class="help-block">{{ $errors->first('photo') }}</span>@endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group"><br>
                            <label class="col-form-label" for="wallpaper">wallpaper</label>
                            <input id="file-input" type="file" name="wallpaper" required>
                            @if ($errors->has('wallpaper'))<span class="help-block">{{ $errors->first('wallpaper') }}</span>@endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-sm btn-primary" type="submit">
                  <i class="fa fa-dot-circle-o"></i> Add Film</button>
                <button class="btn btn-sm btn-danger" type="reset">
                  <i class="fa fa-ban"></i> Reset</button>
            </div>
        </form>
    </div>
@endsection
