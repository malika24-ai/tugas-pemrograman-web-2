<x-app>

    <x-slot:title>{{ $title }}</x-slot:title>

    <form method="POST" action="{{ route('brand.update', $brand) }}">
        @csrf
        @method('PUT')


        <div class="mb-3">
            <label class="form-label">Category</label>

            <select class="form-control @error('category_id') is-invalid @enderror" name="category_id">

                <option value="">All Category</option>

                @foreach ($categorys as $category)
                    <option value="{{ $category->id }}" @selected(old('category_id', $brand->category_id) == $category->id)>
                        {{ $category->name }}
                    </option>
                @endforeach

            </select>

            @error('category_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                value="{{ old('name', $brand->name) }}">

            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="mb-3">
            <label class="form-label">Jenis</label>
            <input type="text" name="jenis" class="form-control @error('jenis') is-invalid @enderror"
                value="{{ old('jenis', $brand->jenis) }}">

            @error('jenis')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Tahun Berdiri</label>
            <input type="text" name="tahun_berdiri" class="form-control @error('tahun_berdiri') is-invalid @enderror"
                value="{{ old('tahun_berdiri', $brand->tahun_berdiri) }}">

            @error('tahun_berdiri')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- STATUS --}}
        <div class="mb-3">
            <label class="form-label">Status</label>
            <input type="text" name="status" class="form-control @error('status') is-invalid @enderror"
                value="{{ old('status', $brand->status) }}">

            @error('status')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <a class="btn btn-warning" href="{{ route('brand.index') }}">
            Cancel
        </a>

        <button type="submit" class="btn btn-primary">
            Submit
        </button>

    </form>

</x-app>
