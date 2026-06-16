<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <form method="POST" action="{{ route('brand.store') }}">
        @csrf

        <div class="mb-3">
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
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                    name="name" value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis</label>
                <input type="text" class="form-control @error('jenis') is-invalid @enderror" id="jenis"
                    name="jenis" value="{{ old('jenis') }}">
                @error('jenis')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tahun Berdiri</label>
                <input type="text" class="form-control @error('tahun_berdiri') is-invalid @enderror"
                    id="tahun_berdiri" name="tahun_berdiri" value="{{ old('tahun_berdiri') }}">
                @error('tahun_berdiri')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Status</label>
                    <input type="text" class="form-control @error('status') is-invalid @enderror" id="status"
                        name="status" value="{{ old('status') }}">
                    @error('status')
                        <div class="invalid-feedback">
                            {{ $message }}

                            @error('category_id')
                                <div class="invalid-feedback">{{ $message }}
                                </div>
                            @enderror
                        </div>
                    @enderror

                </div>

                <a class="btn btn-warning" href="{{ route('category.create') }}" role="button">Cancel</a>

                <button type="submit" class="btn btn-primary">Submit</button>
    </form>


</x-app>
