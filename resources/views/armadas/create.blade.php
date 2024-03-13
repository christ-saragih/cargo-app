@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Add Armada</h6>
            </div>
            <div class="card-body px-2 pt-0 pb-2">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('armadas.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Max Weight</label>
                        <input name="max_weight" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Max Weight">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Length</label>
                        <input name="length" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Length">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Width</label>
                        <input name="width" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Width">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Height</label>
                        <input name="height" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Height">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Pictures</label>
                        <input name="files[]" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" multiple placeholder="Pictures">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection