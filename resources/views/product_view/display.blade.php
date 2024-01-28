<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<h1>Display Page Product</h1>
<div>

    <table class="table table-striped">
        {{-- <table> --}}
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Type</th>
                <th scope="col">Price</th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-primary">
                <td>{{ $data->pro_id }}</td>
                <td>{{ $data->pro_title }}</td>
                <td>{{ $data->pro_type }}</td>
                <td>{{ $data->pro_price }}</td>
            </tr>
        </tbody>
    </table>
</div>
<div><a name="" id="" class="btn btn-primary btn-sm" href="{{ route('product.index') }}"
        role="button">BACK</a>
</div>
