<div class="mb-3">
    <label class="form-label">Name</label>
    <input name="name" class="form-control" value="{{ old('name', $package->name ?? '') }}" required>
    @error('name')<div class="text-danger">{{ $message }}</div>@enderror
</div>

<div class="row">
    <div class="mb-3 col-md-6">
        <label class="form-label">Price</label>
        <input name="price" class="form-control" value="{{ old('price', $package->price ?? '') }}">
        @error('price')<div class="text-danger">{{ $message }}</div>@enderror
    </div>
    <div class="mb-3 col-md-6">
        <label class="form-label">Good for</label>
        <input name="good_for" class="form-control" value="{{ old('good_for', $package->good_for ?? '') }}">
    </div>
</div>

<div class="mb-3">
    <label class="form-label">Description</label>
    <textarea name="description" class="form-control" rows="4">{{ old('description', $package->description ?? '') }}</textarea>
</div>
