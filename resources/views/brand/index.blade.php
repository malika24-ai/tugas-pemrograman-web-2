<x-app>

    <x-slot:title> {{ $title }}</x-slot:>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @session('success')
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endsession

        <a class="btn btn-info mb-3" href="{{ route('brand.create') }}" role="button">Create</a>

        <form action ="">
            <div class="input-group mb-3">
                <div class="col-md-8">
                    <input type="text" class="form-control" id="search" name="search"
                        placeholder="Search brand name">
                </div>
                <div class="col-md-4">
                    <button class="btn btn-success" type="submit">Search</button>
                </div>
            </div>
        </form>

        <ul class="list-group">
            @foreach ($brands as $brand)
                <li class="list-group-item"> {{ $brands->firstItem() + $loop->index }} .
                    {{ $brand->name }}--{{ $brand->category->name }}


                    <a href="{{ route('brand.show', $brand->id) }}" class="btn btn-info">Detail </a>

                    <a class="btn btn-warning " href="{{ route('brand.edit', $brand) }}" role="button">edit</a>

                    <form action="{{ route('brand.destroy', $brand) }}" method="POST" class="d-inline">
                        @method('DELETE')
                        @csrf

                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick ="return confirm('Anda yakin')">Delete</button>

                    </form>


                </li>
            @endforeach
        </ul>

        {{ $brands->links() }}

</x-app>
