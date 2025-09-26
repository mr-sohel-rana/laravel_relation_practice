 <h1>Product Details</h1>

<p><strong>ID:</strong> {{ $product->id }}</p>
<p><strong>Name:</strong> {{ $product->name }}</p>
<p><strong>Brand:</strong> {{ $product->brand }}</p>

<a href="{{ route('product.index') }}">⬅ Back to List</a> |
<a href="{{ route('product.edit', $product->id) }}">✏ Edit</a>
