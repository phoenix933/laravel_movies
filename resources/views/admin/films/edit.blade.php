@extends('layouts.admin')

@section('style')
@endsection

@section('script')
@endsection

@section('content')
    @if(session('success'))
        <div class="card text-white bg-success">
          <div class="card-header">Success</div>
          <div class="card-body">{{session('success')}}</div>
        </div>
    @endif
    <div class="card">
        <form action="{{ url('/panel/films/'.$film->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card-header">
            <strong>Edit</strong> Film</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">name</label>
                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" type="text" value="{{ $film->name }}" name="name" required autofocus>
                            @if ($errors->has('name'))<div class="invalid-feedback">{{ $errors->first('name') }}</div>@endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="description">description</label>
                            <textarea class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" id="description" name="description" rows="description" required>{{ $film->description }}</textarea>
                            @if ($errors->has('description'))<div class="invalid-feedback">{{ $errors->first('description') }}</div>@endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="release_date">release_date</label>
                            <input class="form-control{{ $errors->has('release_date') ? ' is-invalid' : '' }}" id="release_date" type="date" value="{{ date('Y-m-d', strtotime($film->release_date)) }}" name="release_date" required>
                            @if ($errors->has('release_date'))<div class="invalid-feedback">{{ $errors->first('release_date') }}</div>@endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="rating">rating</label>
                            <select class="form-control{{ $errors->has('rating') ? ' is-invalid' : '' }}" id="rating" name="rating">
                              <option value="1" @if($film->rating == 1) selected @endif>1</option>
                              <option value="2" @if($film->rating == 2) selected @endif>2</option>
                              <option value="3" @if($film->rating == 3) selected @endif>3</option>
                              <option value="4" @if($film->rating == 4) selected @endif>4</option>
                              <option value="5" @if($film->rating == 5) selected @endif>5</option>
                            </select>
                            @if ($errors->has('rating'))<div class="invalid-feedback">{{ $errors->first('rating') }}</div>@endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="ticket_price">ticket_price</label>
                            <input class="form-control{{ $errors->has('ticket_price') ? ' is-invalid' : '' }}" id="ticket_price" type="text" value="{{ $film->ticket_price }}" name="ticket_price" required>
                            @if ($errors->has('ticket_price'))<div class="invalid-feedback">{{ $errors->first('ticket_price') }}</div>@endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="country">country</label>
                            <input class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" id="country" type="text" name="country" value="{{ $film->country }}" required>
                            @if ($errors->has('country'))<div class="invalid-feedback">{{ $errors->first('country') }}</div>@endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="genre">genre</label>
                            <select class="form-control{{ $errors->has('genre') ? ' is-invalid' : '' }}" id="genre" name="genre[]" multiple genre>
                                @foreach ($genres as $genre)
                                    <option value="{{ $genre->id }}" @if($film->genres->contains($genre->id)) selected @endif>{{ $genre->title }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('genre'))<div class="invalid-feedback">{{ $errors->first('genre') }}</div>@endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group"><br>
                            <label class="col-form-label" for="photo">photo</label>
                            <input class="form-control{{ $errors->has('photo') ? ' is-invalid' : '' }}" id="file-input" type="file" name="photo">
                            @if ($errors->has('photo'))
                                <div class="invalid-feedback">{{ $errors->first('photo') }}</div>
                            @else
                                <span class="help-block">Let be empty if don't want to change photo</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="current_photo">current photo</label>
                            <img class="form-control" id="current_photo" style="width: auto; height: 128px" src="{{ $film->photo }}">
                        </div>

                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-sm btn-primary" type="submit">
                  <i class="fa fa-dot-circle-o"></i> Edit Film</button>
            </div>
        </form>
    </div>
@endsection
