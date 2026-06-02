<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <form method="POST" action="{{ route('category.store') }}">
        @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">category_id</label>

            <select class="form-select @error('category_id') is-invalid @enderror" id="category_id" name="category_id"
                value="{{ old('category_id') }}">
                <option value="">Choose Category</option>
                @foreach ($categorys as $category)
                    <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>


            @error('category_id')
                <div class="invalid-feedback">{{ $message }}
                </div>
            @enderror

        </div>

        <a class="btn btn-warning" href="{{ route('category.create') }}" role="button">Cancel</a>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


</x-app>
