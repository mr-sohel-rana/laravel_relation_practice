 <h1>Edit Product</h1>

<form action="{{ route('product.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')  

    <label for="name">Name</label><br>
    <input type="text" name="name" value="{{ $product->name }}"><br><br>

    <label for="brand">Brand</label><br>
    <input type="text" name="brand" value="{{ $product->brand }}"><br><br>

    <button type="submit">Update</button>
</form>

<a href="{{ route('product.index') }}">⬅ Back to List</a>
