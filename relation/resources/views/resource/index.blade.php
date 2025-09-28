 <h1>Resource</h1>
<a href="{{ route('product.create') }}">Create</a>
@foreach ($products as $p)
    <h2>Name: {{ $p->name }}</h2>
    <h3>Brand: {{ $p->brand }}</h3>
    <a href="{{ route('product.show', $p->id) }}">
        <button>Show</button>
    </a>
    <a href="{{ route('product.edit', $p->id) }}">
        <button>Edit</button>
    </a>
    <form action="{{ route('product.destroy', $p->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
    </form>
@endforeach
