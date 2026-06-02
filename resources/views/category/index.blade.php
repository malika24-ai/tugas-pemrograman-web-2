<x-app>

    <x-slot:title> {{ $title }}</x-slot:>

        @session('success')
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endsession

        <a class="btn btn-info mb-3" href="{{ route('category.create') }}" role="button">Create</a>

        <ul class="list-group">
            @foreach ($categories as $category)
                <li class="list-group-item"> {{ $loop->iteration }} .
                    {{ $category->name }}

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

</x-app>
