<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    @session('success')
    <div class="alert alert-success">
        {{session('success')  }}
    </div>
@endsession

<a class="btn btn-info " href="{{ route('massages.create') }}"
    role="button">Create</a>

<ul class="list-group">

    @foreach ($massages as $massages)
        <li class="list-group-item">
            {{ $loop->iteration }}.   {{ $massages->name }} -- {{ $massages->pengirim }} --
            {{ $massages->penerima}} -- {{ $massages->judul_pesan }} --  {{ $massages->isi_pesan }}
            <a class="btn btn-info btn-sm" href="{{ route('massages.edit',$massages) }}"
    role="button">edit</a>
    
        </li>
    @endforeach

</ul>


</x-app>