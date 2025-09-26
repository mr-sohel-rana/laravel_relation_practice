 <form action="{{ route('product.store') }}" method="POST">
    @csrf
    <label for="name">Name</label><br>
    <input name="name" type="text"><br><br>

    <label for="brand">Brand</label><br>
    <input name="brand" type="text"><br><br>

    <button type="submit">Submit</button>
</form>
