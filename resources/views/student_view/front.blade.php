<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<!-- <h1 class="btn btn-primary">Student Front page</h1> -->
<h1>Student Front page</h1>
<div>
    <a class="btn btn-primary" href="{{ route('st.create') }}" role="button">Add New</a>
</div>

<table class="table table-bordered border-primary">
    <thead>
        <div>
            <tr>
                <th scope="col">Student Id</th>
                <th scope="col">Student Name</th>
                <th scope="col">Tel</th>
                <th scope="col">Gender</th>
            </tr>
        </div>
    </thead>
    <tbody>
        @foreach ($data as $x)
            <tr>
                <td>{{ $x->sId }}</td>
                <td>{{ $x->sName }}</td>
                <td>{{ $x->tel }}</td>
                <td>{{ $x->gender }}</td>
                <td>
                    <div class="col">
                        <form action="{{ route('st.destroy', $x->sId) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('st.show', $x->sId) }}" class="btn btn-info btn-sm">Viwie</a>
                            <a href="{{ route('st.edit', $x->sId) }}" class="btn btn-secondary btn-sm">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm">DELETE</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
