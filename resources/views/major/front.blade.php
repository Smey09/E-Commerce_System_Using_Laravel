<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


{{-- <h1 class="btn btn-primary">Major Front page</h1> --}}
<h1>Major Front page</h1>
<table class="table table-striped table-hover">
    <thead>
        <div>
            <tr class="table table-bordered border-primary">
                <th scope="col">mid</th>
                <th scope="col">title</th>
            </tr>
        </div>
    </thead>
    <tbody>
        @foreach ($data as $x)
            <tr>
                <td>{{ $x->mid }}</td>
                <td>{{ $x->title }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
