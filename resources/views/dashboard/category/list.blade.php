@extends('layouts.dashboard_layout')

@section('content')

<div class="content-wrapper">
            <div class="row">
              <div class="col-sm-12">

    <h1>Category</h1>

    <a class="btn btn-primary mb-2" href="{{route('category.create')}}">Create</a>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $item)
    <tr>
      <td>{{ $item->name }}</td>
      <td>{{ $item->description ?? 'N/A' }}</td>
      <td class="d-flex">
        <a class="btn btn-dark" href="{{route('category.edit',$item)}}">Edit</a> &nbsp;
        <form method="post" action="{{route('category.destroy',$item)}}">
          @csrf
          @method('DELETE')
        <button class="btn btn-danger" type="submit">
            Delete
        </button>
      </form>
      </td>
    </tr>
    @endforeach
   
  </tbody>
</table>
</br>
@if($pagerow < $categories->total())
<a href="{{ route('category.index',['pagerow'=>$pagerow+2]) }}" class="btn btn-primary">Load More</a>
@endif
@if($pagerow > 2)
<a href="{{ route('category.index',['pagerow'=>$pagerow-2]) }}" class="btn btn-primary">Load Less</a>
@endif

</div>
</div>
</div>
@endsection('content')