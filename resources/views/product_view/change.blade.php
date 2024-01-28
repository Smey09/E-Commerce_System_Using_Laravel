<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<div class="container">
    <div class="content">
        <h1>Change Product</h1>

        <form action="{{ route('product.update', $item->pro_id) }}" method="post">

            @csrf
            @method('PUT')

            <div class="table-responsive">
                <table class="table table-primary">
                    <tbody>
                        <tr>
                            <div class="mb-3">
                                <label for="" class="form-label">ID</label>
                                <input type="text" class="form-control" name="pro_id" id="pro_id"
                                    aria-describedby="helpId" placeholder="Enter Name" value="{{ $item->pro_id }}" />
                            </div>
                        </tr>
                        <tr>
                            <div class="mb-3">
                                <label for="" class="form-label">Title</label>
                                <input type="text" class="form-control" name="pro_title" id="pro_title"
                                    aria-describedby="helpId" placeholder="Enter pro_title"
                                    value="{{ $item->pro_title }}" />
                            </div>
                        </tr>
                        <tr>
                            <div class="mb-3">
                                <label for="" class="form-label">Type Of Product</label>
                                {{-- <input type="text" class="form-control" name="pro_type" id="pro_type"
                                    aria-describedby="helpId" placeholder="Enter type "
                                    value="{{ $item->pro_type }}" /> --}}
                                <input type="text" class="form-control" name="pro_type" id="pro_type"
                                    aria-describedby="helpId" placeholder="Enter type " value="{{ $item->pro_type }}" />
                            </div>
                        </tr>
                        <tr>
                            <div class="mb-3">
                                <label for="" class="form-label">Price</label>
                                <input type="text" class="form-control" name="pro_price" id="pro_price"
                                    aria-describedby="helpId" placeholder="Enter price"
                                    value="{{ $item->pro_price }}" />
                            </div>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <button type="submit" class="btn btn-primary"><a
                        href="{{ route('product.index') }}"></a>UPDATE</button>
                <a name="" id="" class="btn btn-primary" href="{{ route('product.index') }}"
                    role="button">BACK</a>
            </div>
        </form>
    </div>
</div>
