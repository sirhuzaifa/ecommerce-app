<form method="post" action="{{ route('brand.store') }}">
    @csrf
    <input type="text" name="name" id="">
    <textarea name="description" id=""></textarea>
    <button type="submit">Submit</button>
</form>