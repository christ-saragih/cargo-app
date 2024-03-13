@extends('layouts.master')

@section('content')
<div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Armada table</h6>
              <a href="{{ route('armadas.create') }}" class="btn btn-primary float-end">Add</a>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Max Weight</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Dimension</th>
                      <th class="text-secondary opacity-7">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($armadas as $armada)
                    <tr>
                        <td>
                          @if($armada->pictures->isNotEmpty())
                            <img class="img-thumbnail" width="150px" src="/uploads/{{ $armada->pictures->first()->filename }}">
                          @endif
                          {{ $armada->name }}
                        </td>
                        <td>{{ $armada->max_weight }}</td>
                        <td>{{ $armada->length }} X {{ $armada->width }} X {{ $armada->height }}</td>
                        <td>
                            <a href="/armadas/{{ $armada->id }}/edit" class="btn btn-warning">Edit</a>
                            <form action="/armadas/{{ $armada->id }}" method="POST">
                              @method('DELETE')
                              @csrf
                              <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection