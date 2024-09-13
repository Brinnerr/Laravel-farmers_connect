@extends('components.guest')

@section('content')

<div class="card mt-5">
    <h2 class="card-header">Add New Product</h2>
    <div class="card-body">

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary btn-sm" href="{{ route('products.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
        </div>

        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="inputName" class="form-label"><strong>Name:</strong></label>
                <input
                    type="text"
                    name="name"
                    class="form-control @error('name') is-invalid @enderror"
                    id="inputName"
                    placeholder="Name">
                @error('name')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

           
            <div class="mb-3">
                <label for="inputprice" class="form-label"><strong>price:</strong></label>
                <input
                    type="text"
                    class="form-control @error('price') is-invalid @enderror"
                    
                    name="price"
                    id="inputprice"
                    placeholder="price"></input>
                @error('price')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="inputquantity" class="form-label"><strong>Quantity:</strong></label>
                <input
                    type="text"
                    class="form-control @error('quantity') is-invalid @enderror"
                    
                    name="quantity"
                    id="inputquantity"
                    placeholder="quantity"></input>
                @error('quantity')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="inputdescription" class="form-label"><strong>description:</strong></label>
                <textarea
                    class="form-control @error('description') is-invalid @enderror"
                    style="height:150px"
                    name="description"
                    id="inputdescription"
                    placeholder="description"></textarea>
                @error('description')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
        </form>

    </div>
</div>
@endsection