<x-layout>
    <div class="container">
        <h1>Add product</h1>
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
                
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price">
                
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description">
                
            </div>
            <div class="mb-3">
                <label for="photo" class="form-label">Photo</label>
                <input type="file" class="form-control" id="photo" name="photo">
                
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="text" class="form-control" id="quantity" name="quantity">
                
            </div>

            <div class="mb-3">
                <label for="quantity" class="form-label">Categories: </label>
                @foreach ($categories as $category)
                <label class="form-check-lable">
                    <input type="checkbox" class="form-check-input" name="categories[]" id="" value="{{ $category->id }}">{{ $category->name }}
                </label>
                @endforeach
                
            </div>
            
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</x-layout>