@extends('layouts.admin')

@section('style')
@endsection

@section('script')
@endsection

@section('content')
    @if(old('title') != null)
        @if($errors->count() == 0)
        <div class="card text-white bg-success">
          <div class="card-header">Success</div>
          <div class="card-body">Film Added Successfully.</div>
        </div>
        @endif
    @endif
    <div class="card">
        <form action="{{ route('films.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-header">
            <strong>Add</strong> Film</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="title">title</label>
                            <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" id="title" type="text" value="{{ old('title') }}" name="title" required autofocus>
                            @if ($errors->has('title'))<div class="invalid-feedback">{{ $errors->first('title') }}</div>@endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="description">description</label>
                            <textarea class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" id="description" name="description" rows="description" required>{{ old('description') }}</textarea>
                            @if ($errors->has('description'))<div class="invalid-feedback">{{ $errors->first('description') }}</div>@endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="release_date">release_date</label>
                            <input class="form-control{{ $errors->has('release_date') ? ' is-invalid' : '' }}" id="release_date" type="date" value="{{ old('release_date') }}" name="release_date" required>
                            @if ($errors->has('release_date'))<div class="invalid-feedback">{{ $errors->first('release_date') }}</div>@endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="rating">rating</label>
                            <select class="form-control{{ $errors->has('rating') ? ' is-invalid' : '' }}" id="rating" name="rating">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                            </select>
                            @if ($errors->has('rating'))<div class="invalid-feedback">{{ $errors->first('rating') }}</div>@endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="ticket_price">ticket_price</label>
                            <input class="form-control{{ $errors->has('ticket_price') ? ' is-invalid' : '' }}" id="ticket_price" type="text" value="{{ old('ticket_price') }}" name="ticket_price" required>
                            @if ($errors->has('ticket_price'))<div class="invalid-feedback">{{ $errors->first('ticket_price') }}</div>@endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="country">country</label>
                            <input class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" id="country" type="text" name="country" value="{{ old('country') }}" required>
                            @if ($errors->has('country'))<div class="invalid-feedback">{{ $errors->first('country') }}</div>@endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="genre">genre</label>
                            <select class="form-control{{ $errors->has('genre') ? ' is-invalid' : '' }}" id="genre" name="genre" multiple genre>
                                @foreach ($genres as $genre)
                                    <option value="{{ $genre->id }}">{{ $genre->title }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('genre'))<div class="invalid-feedback">{{ $errors->first('genre') }}</div>@endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group"><br>
                            <label class="col-form-label" for="photo">photo</label>
                            <input class="form-control{{ $errors->has('photo') ? ' is-invalid' : '' }}" id="file-input" type="file" name="photo" required>
                            @if ($errors->has('photo'))<div class="invalid-feedback">{{ $errors->first('photo') }}</div>@endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group"><br>
                            <label class="col-form-label" for="wallpaper">wallpaper</label>
                            <input class="form-control{{ $errors->has('wallpaper') ? ' is-invalid' : '' }}" id="file-input" type="file" name="wallpaper">
                            @if ($errors->has('wallpaper'))<div class="invalid-feedback">{{ $errors->first('wallpaper') }}</div>@endif
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
