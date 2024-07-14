<div class="mb-3">
    <label for="name" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="name" name="name" required>
</div>
<div class="mb-3">
    <label for="image" class="form-label">Imagen</label>
    <input type="file" class="form-control" id="image" name="image" required>
</div>
@if (false)
<div class="mb-3">
    <label for="category" class="form-label">Categoría padre</label>
    <select class="form-select" id="parent_id" name="parent_id" required>
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
</div>
@endif