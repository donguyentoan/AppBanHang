<x-layout>
    <div class="container">
        <h1>Add Category</h1>
        <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
                
            </div>
          
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</x-layout>