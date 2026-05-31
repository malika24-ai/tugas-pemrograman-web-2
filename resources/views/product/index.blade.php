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
                    {{ $product->jumlah }} --{{ $product->merk }} --
                    {{ $product->tgl_beli }}
                </li>
            @endforeach
        </ul>

</x-app>
