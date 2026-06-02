<x-app>

    <x-slot:title>{{ $title }}</x-slot:title>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="btn btn-info mb-3" href="{{ route('brand.create') }}" role="button">Create</div>
    <form action="{{ route('brand.index') }}" method="GET">

        <div class="row mb-3">
            <div class="col-md-4">
                <input type="text" class="form-control" id="search" name="search" placeholder="Search brand name"
                    value="{{ request('search') }}">
            </div>
            <div class="col-md-4">
                <button class="btn btn-success" type="submit">Search</button>
            </div>
        </div>
    </form>
    <ul class="list-group">
        @foreach ($brands as $brand)
            <li class="list-group-item">
                {{ $brands->firstItem() + $loop->index }} .{{ $brand->name }}--{{ $brand->category->name }}

                <div class="btn btn-warning btn-sm" href="{{ route('brand.edit', $brand) }}">Edit</div>

                <div class="btn btn-info btn-sm" href="{{ route('brand.show', $brand) }}">Detail</div>

                <form action="{{ route('brand.destroy', $brand) }}" method="POST" class="d-inline">

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('Anda yakin?')">Delete</button>
                </form>

            </li>
        @endforeach

    </ul>

    <div class="mt-3">
        {{ $brands->links() }}
    </div>

</x-app>
