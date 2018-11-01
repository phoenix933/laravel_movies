@extends('layouts.admin')

@section('style')
@endsection

@section('script')
@endsection

@section('content')
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <i class="fa fa-align-justify"></i> {{ \Request::route()->getName() }}</div>
          <div class="card-body">
            <table class="table table-responsive-sm table-bordered table-striped table-sm">
              <thead>
                <tr>
                  <th>Name</th>
                  <th class="text-center">Photo</th>
                  <th>Release Date</th>
                  <th>Rating</th>
                  <th>Ticket Price</th>
                  <th>Country</th>
                  <th class="text-center">Operations</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($films as $film)
                    <tr>
                        <td>{{ $film->name }}</td>
                        <td class="text-center">
                            <div class="avatar">
                                <img class="img-avatar" src="{{ $film->photo }}" alt="{{ $film->name }}">
                                <span class="avatar-status"></span>
                            </div>
                        </td>
                        <td>{{ $film->release_date }}</td>
                        <td>
                            <div class="clearfix">
                                <div class="float-left">
                                    <strong>{{ $film->rating }}</strong>
                                </div>
                            </div>
                            <div class="progress progress-xs">
                                <div class="progress-bar bg-success" role="progressbar" style="width: {{ $film->rating * 20 }}%" aria-valuenow="{{ $film->rating * 20 }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                        <td>{{ $film->ticket_price }} $</td>
                        <td>{{ $film->country }}</td>
                        <td class="text-center">
                            <a class="btn btn-warning" href="{{ url('/panel/films/'.$film->id.'/edit') }}">edit</a>
                            <button class="btn btn-danger" type="button" onclick="event.preventDefault();
                                          document.getElementById('delete-form-{{ $film->id }}').submit();">delete</button>
                            <form id="delete-form-{{ $film->id }}" action="{{ url('/panel/films/'.$film->id) }}" method="POST" style="display: none;">
                                @method('DELETE')
                                @csrf
                            </form>
                        </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
            <nav>
              <ul class="pagination">

              </ul>
            </nav>
          </div>
        </div>
      </div>
      <!-- /.col-->
    </div>
@endsection
