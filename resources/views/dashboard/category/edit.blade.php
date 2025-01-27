@extends('layouts.dashboard_layout')

@section('content')

<div class="content-wrapper">
            <div class="row">
              <div class="col-sm-12">
              <h1>Edit Category</h1>



<form method="post" action="{{ route('category.update',$category) }}">
@method('PUT')
@csrf
  <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text"  name="name" value="{{ old('name') ?? $category->name }}" class="form-control">
    <span style="color:red">{{ $errors->first('name') }}</span>
  </div>
  <div class="mb-3">
    <label  class="form-label">Description</label>
    <input type="text" name="description" value="{{ old('description') ?? $category->description }}" class="form-control">
    <span style="color:red">{{ $errors->first('description') }}</span>
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>




</div>
</div>
</div>
@endsection('content')