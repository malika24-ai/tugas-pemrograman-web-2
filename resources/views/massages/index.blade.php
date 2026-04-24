<x-app>

    <x-slot:title>{{ $title }}</x-slot>
<ul class="list-group">

    @foreach ($messages as $message)
        <li class="list-group-item">
            {{ $loop->iteration }}.   {{ $message->name }} -- {{ $message->pengirim }} --
            {{ $message->penerima}} -- {{ $message->judul_pesan }} -- {{ $message->isi_pesan }}</li>
    @endforeach

</ul>


</x-app>