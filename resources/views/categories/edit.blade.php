<x-layout>
    <div class="container">
        <h1>Update Category</h1>
        <form action="{{ route('categories.update' , $categories->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$categories->name}}">
                
            </div>
          
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</x-layout>