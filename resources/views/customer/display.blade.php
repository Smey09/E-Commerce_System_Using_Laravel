
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<h1>Display Page Customer</h1>
<div>

<table class="table table-striped">
    {{-- <table> --}}
        <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th scope="col">Tel</th>
              <th scope="col">Gender</th>
    
            </tr>
          </thead>
        <tbody>
            <tr class="bg-primary">
                <td>{{$data -> Cus_Id}}</td>
                <td>{{$data -> Cus_Name}}</td>
                <td>{{$data -> Cus_Tel}}</td>
                <td>{{$data -> Cus_Gender}}</td>
            </tr>
        </tbody>
    </table>
</div>
<div><a name="" id="" class="btn btn-primary btn-sm" href="{{ route("cus.index")}}" role="button">BACK</a></div>