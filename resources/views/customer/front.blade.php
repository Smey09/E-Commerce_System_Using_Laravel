<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<h1 class="btn btn-info btn-sm">Customer Front page</h1>

<table class="table table-secondary">
    <thead>
      <tr>
        <th scope="col">Customer Id</th>
        <th scope="col">Customer Name</th>
        <th scope="col">Customer Tel</th>
        <th scope="col">Customer Gender</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $x)
        <tr>
            <td>{{$x -> Cus_Id}}</td>
            <td>{{$x -> Cus_Name}}</td>
            <td>{{$x -> Cus_Tel}}</td>
            <td>{{$x -> Cus_Gender}}</td>
            <td>
                <div>
                    <a href="{{route("cus.show",$x -> Cus_Id)}}" class="btn btn-info btn-sm">Viwie</a>
                    <a href="" class="btn btn-secondary btn-sm">Edit</a>
                    <a href="" class="btn btn-danger btn-sm">Delete</a>
                </div>
            </td>
          </tr>
        @endforeach
    </tbody>
  </table>