<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <form method="POST" action="{{ route('brand.update', $brand->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Name</label>

            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                value="{{ old('name', $brand->name) }}">

            <a class="btn btn-warning"href="{{ route('brand.edit', $brand) }}" role="button">Edit</a>

            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Category</label>

            <select class="form-select @error('category_id') is-invalid @enderror" id="category_id" name="category_id">

                <option value="">Choose Category</option>

                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @selected(old('category_id', $brand->category_id) == $category->id)>
                        {{ $category->name }}
                    </option>
                @endforeach

            </select>

            @error('category_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <a class="btn btn-warning" href="{{ route('brand.index') }}"> Cancel</a>

        <button type="submit" class="btn btn-primary">Submit </button>

    </form>

</x-app>
