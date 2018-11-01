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
                  <th class="text-center">Operations</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($genres as $genre)
                    <tr>
                        <td>{{ $genre->title }}</td>
                        <td class="text-center">
                            <a class="btn btn-warning" href="{{ url('/panel/genres/'.$genre->id.'/edit') }}">edit</a>
                            <button class="btn btn-danger" type="button" onclick="event.preventDefault();
                                          document.getElementById('delete-form-{{ $genre->id }}').submit();">delete</button>
                            <form id="delete-form-{{ $genre->id }}" action="{{ url('/panel/genres/'.$genre->id) }}" method="POST" style="display: none;">
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
                {{ $genres->links() }}
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <!-- /.col-->
    </div>
@endsection
