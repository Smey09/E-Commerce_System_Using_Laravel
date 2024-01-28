<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<h1 class="text-center">Product View Page</h1>
<div>
    <a class="btn btn-primary" href="{{ route('product.create') }}" role="button">Add New</a>
</div>
<table class="table table-bordered border-primary">
    <thead class="text-center">
        <div>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Type</th>
                <th scope="col">Price</th>
                <th scope="col">Action Button</th>
            </tr>
        </div>
    </thead>
    <tbody class="text-center">
        @foreach ($data as $x)
            <tr>
                <td>{{ $x->pro_id }}</td>
                <td>{{ $x->pro_title }}</td>
                <td>{{ $x->pro_type }}</td>
                <td>{{ $x->pro_price }}</td>
                <td>
                    <div class="col">
                        <form action="{{ route('product.destroy', $x->pro_id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('product.show', $x->pro_id) }}" class="btn btn-info btn-sm">Viwie</a>
                            <a href="{{ route('product.edit', $x->pro_id) }}" class="btn btn-secondary btn-sm">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm">DELETE</button>
                        </form>
                    </div>
                </td>
        @endforeach
    </tbody>
</table>
