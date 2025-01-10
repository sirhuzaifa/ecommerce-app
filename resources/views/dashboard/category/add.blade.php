<form method="post" action="{{ route('category.store') }}">
    @csrf
    <input type="text" name="name" id="">
    <textarea name="description" id=""></textarea>
    <button type="submit">Submit</button>
</form>