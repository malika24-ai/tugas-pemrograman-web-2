<x-app>

    <x-slot:title>{{ $title }}</x-slot>


    <a class="btn btn-warning mb-3" href="{{ route('brand.index') }}" role="button">Back</a>

    {{-- brand --}}
    <h4>Data Brand</h4>
    <ul class="list-group mb-3">
        <li class="list-group-item">name : {{ $brand->name }}</li>
        <li class="list-group-item">
            Created at : {{ $brand->created_at->format('d F Y H:i:s') }}

        </li>
        <li class="list-group-item">
            Last updated : {{ $brand->updated_at->diffForHumans() }}
        </li>
    </ul>

    {{-- category --}}
    <h4>Data Category</h4>

    <ul class="list-group">

        <li class="list-group-item">

            {{ $brand->category?->name }}

        </li>

    </ul>


</x-app>
