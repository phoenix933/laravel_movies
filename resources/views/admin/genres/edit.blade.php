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
        <form action="{{ url('/panel/genres/'.$genre->id) }}" method="post">
            @method('PUT')
            @csrf
            <div class="card-header">
            <strong>Edit</strong> Genre</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="title">title</label>
                            <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" id="title" type="text" value="{{ $genre->title }}" name="title" required autofocus>
                            @if ($errors->has('title'))<div class="invalid-feedback">{{ $errors->first('title') }}</div>@endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-sm btn-primary" type="submit">
                  <i class="fa fa-dot-circle-o"></i> Edit Genre</button>
                <button class="btn btn-sm btn-danger" type="reset">
                  <i class="fa fa-ban"></i> Reset</button>
            </div>
        </form>
    </div>
@endsection
