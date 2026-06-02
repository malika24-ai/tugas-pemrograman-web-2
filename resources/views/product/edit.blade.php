<x-app>

    <x-slot:title> {{ $title }}</x-slot:>

        <form method="POST" action="{{ route('product.update', $product) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"> Name pembeli</label>
                    <input type="text" class="form-control @error('name_pembeli') is-invalid @enderror"
                        id="name_pembeli" name="name_pembeli" value="{{ old('name_pembeli') }}">
                    @error('name_pembeli')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <label for="exampleInputEmail1" class="form-label"> Name Product</label>
                <input type="text" class="form-control @error('name_product') is-invalid @enderror" id="name_product"
                    name="name_product" value="{{ old('name_product') }}">
                @error('name_product')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jumlah</label>
                <input type="number" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah"
                    name="jumlah" value="{{ old('jumlah') }}">
                @error('jumlah')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


            <a class="btn btn-warning " href="{{ route('product.index') }}" role="button">Cancel</a>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

</x-app>
