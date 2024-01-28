<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<div class="container">
    <div class="content">
        <h1>Add new Product</h1>
        <form action="{{ route('product.store') }}" method="post">
            @csrf
            @method('POST')
            <div class="table-responsive">
                <table class="table table-primary">
                    <tbody>
                        <tr>
                            <div class="mb-3">
                                <label for="" class="form-label">Tile</label>
                                <input type="text" class="form-control" name="pro_title" id="pro_title"
                                    aria-describedby="helpId" placeholder="Enter Tile" />
                            </div>
                        </tr>
                        <tr>
                            <div class="mb-3">
                                <label for="" class="form-label">Type Of Product</label>
                                <input type="text" class="form-control" name="pro_type" id="pro_type"
                                    aria-describedby="helpId" placeholder="Enter type" />
                                {{-- <select class="form-select" id="pro_type" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">dring</option>
                                    <option value="2">food</option>
                                    <option value="3">smoke</option>
                                    <option value="4">others</option>
                                </select> --}}
                            </div>
                        </tr>
                        <tr>
                            <div class="mb-3">
                                <label for="" class="form-floating">Price</label>
                                <input type="text" class="form-control is-invalid" name = "pro_price" id="pro_price"
                                    aria-describedby="helpId" placeholder="Enter Price" />
                            </div>
                        </tr>
                    </tbody>
                </table>
            </div>

            <button type="submit" class="btn btn-primary"> <a href="{{ route('product.index') }}"> </a> Add</button>
            <a name="" id="" class="btn btn-primary"
                href="{{ route('product.index') }}"role="button">CNACEL</a>
        </form>

    </div>
</div>
