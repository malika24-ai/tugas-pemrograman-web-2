<x-app>

    <x-slot:title> {{ $title }}</x-slot:>



        @session('success')
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endsession

        <a class="btn btn-info mb-3" href="{{ route('category.create') }}" role="button">Create</a>

        <form action="{{ route('brand.index') }}" method="GET">
            <div class="input-group mb-3">
                <div class="col-md-4">
                    <input type="text" class="form-control" id="search" name="search"
                        placeholder="Search brand name.." value="{{ old('keyword') }}">
                </div>
                <div class="col-md-4">
                    <select class="form-control" id="category" name="category">
                        <option value="">All Categories</option>
                        @foreach ($categorys as $category)
                            <option value="{{ $category->id }}"
                                {{ request('category') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-success" type="submit">Search</button>
                </div>
            </div>
        </form>
        <ul class="list-group">
            @foreach ($categorys as $category)
                <li class="list-group-item"> {{ $loop->iteration }} .
                    {{ $category->name }}-- {{ $category->code }} -- {{ $category->detail }}

                    <a href="{{ route('category.show', $category->id) }}" class="btn btn-info">Detail </a>

                    <a class="btn btn-warning " href="{{ route('category.edit', $category) }}" role="button">edit</a>

                    <form action="{{ route('category.destroy', $category) }}" method="POST" class="d-inline">
                        @method('DELETE')
                        @csrf

                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick ="return confirm('Anda yakin')">Delete</button>

                    </form>


                </li>
            @endforeach
        </ul>
        {{ $categorys->links() }}
</x-app>
