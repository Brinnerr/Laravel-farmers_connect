@extends('products.layout')

@section('content')

<div class="card mt-5">
    <h2 class="card-header">Edit Product</h2>
    <div class="card-body">

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary btn-sm" href="{{ route('products.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
        </div>

        <form action="{{ route('products.update',$product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="inputName" class="form-label"><strong>Name:</strong></label>
                <input
                    type="text"
                    name="name"
                    value="{{ old('name', $product->name) }}"
                    class="form-control @error('name') is-invalid @enderror"
                    id="inputName"
                    required
                    >
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
                    value="{{ old('price', $product->price) }}"
                    required
                    ></input>
                @error('price')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="inputquantity" class="form-label"><strong>quantity:</strong></label>
                <input
                    type="text"

                    class="form-control @error('quantity') is-invalid @enderror"
                    
                    name="quantity"
                    id="inputquantity"
                    value="{{ old('price', $product->quantity) }}"
                    required
                    ></input>
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
                    required
                   >{{ old('description', $product->description) }}</textarea>
                @error('description')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

           
            <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Update</button>
        </form>

    </div>
</div>
@endsection