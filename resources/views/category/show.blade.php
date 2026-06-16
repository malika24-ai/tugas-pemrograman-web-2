<x-app>

    <x-slot:title>{{ $title }}</x-slot>


    <a class="btn btn-warning mb-3" href="{{ route('category.index') }}" role="button">Back</a>

    {{-- category --}}
    <h4>Data Category</h4>
    <ul class="list-group mb-3">
        <li class="list-group-item">name : {{ $category->name }}</li>
        <li class="list-group-item">
            Created at : {{ $category->created_at->format('d F Y H:i:s') }}

        </li>
        <li class="list-group-item">
            Last updated : {{ $category->updated_at->diffForHumans() }}
        </li>
    </ul>

    {{-- brands --}}
    <h4>Data Brands</h4>

    <ul class="list-group">

        @foreach ($category->brands as $brand)
            <li class="list-group-item">

                {{ $brand->name }}

            </li>
        @endforeach

    </ul>

</x-app>
