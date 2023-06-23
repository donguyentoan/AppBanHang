<x-layout>
    <div class="container">
        <h1>Edit product</h1>
        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">


       
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
                
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}">
                
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ $product->description }}">
                
            </div>
            <div class="mb-3">
                <label for="photo" class="form-label">Photo</label>
                <input type="file" class="form-control" id="photo" name="photo" value="{{ $product->photo }}">
                
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="text" class="form-control" id="quantity" name="quantity" value="{{ $product->quantity }}">
                
            </div>

            <div class="mb-3">
                <label for="quantity" class="form-label">Categories: </label>
                
                @foreach ($categories as $category)
                @php
                $checked = "";
                if (in_array($category->id, $product->categories->pluck('id')->all())) {
                    $checked = 'checked';
                }
                @endphp
                <label class="form-check-lable">
                    <input type="checkbox" class="form-check-input" name="categories[]" id="" value="{{ $category->id }}" {{ $checked }}> {{ $category->name }}
                </label>
                @endforeach
                
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</x-layout>