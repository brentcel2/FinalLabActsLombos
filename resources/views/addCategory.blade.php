<x-app-layout>
    <x-slot name="header">
        <div class="container" style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px;">
            <h1 style="text-align: center; margin-bottom: 20px;">Create Category</h1>
            <form action="{{ route('store-category') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="category_name" class="form-label">Category Name</label>
                    <input type="text" name="category_name" id="category_name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="image" class="form-label">Image:</label>
                    <input type="file" id="image" name="image" accept="image/*" required>
                </div>

                <button type="submit" class="btn btn-primary">Create Category</button>
            </form>
        </div>
    </x-slot>
</x-app-layout>