<x-app>

    <x-slot:title> {{ $title }}</x-slot:>

        @session('success')
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endsession

        <a class="btn btn-info mb-3" href="{{ route('product.create') }}" role="button">Create</a>

        <ul class="list-group">
            @foreach ($products as $product)
                <li class="list-group-item"> {{ $loop->iteration }} .
                    {{ $product->name_pembeli }} --{{ $product->name_product }} --
                    {{ $product->jumlah }} -- {{ $product->harga }} --Rp
                    {{ number_format($product->harga, 0, ',', '.') }}

                    </form>
                    <form action="{{ route('product.restore', $product) }}" method="POST" class="d-inline">
                        @method('PUT')
                        @csrf

                        <button type="submit" class="btn btn-warning btn-sm"
                            onclick ="return confirm('Anda yakin')">Restore</button>

                    </form>

                    <form action="{{ route('product.forceDelete', $product) }}" method="POST" class="d-inline">
                        @method('DELETE')
                        @csrf

                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick ="return confirm('Anda yakin ingin menghapus secara permanen')">Delete</button>

                    </form>


                </li>
            @endforeach
        </ul>

</x-app>
