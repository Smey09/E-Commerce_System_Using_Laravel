<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<div class="container">
    <div class="content">
        <h1>Change Student</h1>

        <form action="{{ route("st.update", $item->sId)}}" method="post">

            @csrf
            @method("PUT")

            <div class="table-responsive">
                <table class="table table-primary">
                    <tbody>
                        <tr>
                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="sName"
                                    id="sName"
                                    aria-describedby="helpId"
                                    placeholder="Enter Name"
                                    value="{{$item->sName}}"
                                />
                            </div>
                        </tr>
                        <tr>
                            <div class="mb-3">
                                <label for="" class="form-label">Tel</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="tel"
                                    id="tel"
                                    aria-describedby="helpId"
                                    placeholder="Enter Tel"
                                    value="{{$item->tel}}"
                                />
                            </div>
                        </tr>
                        <tr>
                            <div class="mb-3">
                                <label for="" class="form-label">Gender</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="gender"
                                    id="gender"
                                    aria-describedby="helpId"
                                    placeholder="Enter Gender"
                                    value="{{$item -> gender}}"
                                />
                            </div>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <button type="submit" class="btn btn-primary" ><a href="{{route("st.index")}}"></a>UPDATE</button>
                <a name="" id="" class="btn btn-primary" href="{{ route("st.index")}}" role="button">BACK</a>
            </div>
        </form>
    </div>
</div>

