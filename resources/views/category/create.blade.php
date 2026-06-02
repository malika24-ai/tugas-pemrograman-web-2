<x-app>

    <x-slot:title> {{ $title }}</x-slot:>

        <form method="POST" action="{{ route('category.store') }}">
            @csrf

            <div class="mb-3">

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"> Name category</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        name="name" value="{{ old('name') }}">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <a class="btn btn-warning " href="{{ route('product.index') }}" role="button">Cancel</a>

                <button type="submit" class="btn btn-primary">Submit</button>
        </form>

</x-app>
