<x-app>

    <x-slot:title> {{ $title }}</x-slot:>

        <ul class="list-group">
            @foreach ($products as $product)
                <li class="list-group-item"> {{ $loop->iteration }} .
                    {{ $product->name_product }} -- {{ $product->nama_pembeli }} --
                    {{ $product->jumlah }} --{{ $product->merk }} --
                    {{ $product->tgl_beli }}
                </li>
            @endforeach
        </ul>

</x-app>
