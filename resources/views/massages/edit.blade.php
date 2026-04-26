<x-app>

    <x-slot:title>{{ $title }}</x-slot>



<form method="POST" action="{{ route('massages.update', $massages->id) }}">
    @csrf
    @method('PUT')


<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror"
    id="name" name="name" value="{{ old('name',$massages->name) }}">
@error('name')
    <div class="invalidCheck">{{ $message }}</div>
@enderror
</div>
<div class="mb-3">
    <label for="pengirim" class="form-label">Pengirim</label>
    <input type="text" class="form-control @error('pengirim') is-invalid @enderror"
    id="pengirim" name="pengirim" value="{{ old('pengirim',$massages->pengirim) }}">
@error('pengirim')
    <div class="invalidCheck">{{ $message }}</div>
@enderror
    
</div>
<div class="mb-3">
    <label for="penerima" class="form-label">Penerima</label>
    <input type="text" class="form-control @error('penerima') is-invalid @enderror"
    id="penerima" name="penerima" value="{{ old('penerima',$massages->penerima) }}">
@error('penerima')
    <div class="invalidCheck">{{ $message }}</div>
@enderror
</div>

<div class="mb-3">
    <label for="judul_pesan" class="form-label">Judul Pesan</label>
    <input type="text" class="form-control @error('judul_pesan') is-invalid @enderror"
    id="judul_pesan" name="judul_pesan" value="{{ old('judul_pesan',$massages->judul_pesan) }}">
@error('judul_pesan')
    <div class="invalidCheck">{{ $message }}</div>
@enderror
</div>

<div class="mb-3">
    <label for="isi_pesan" class="form-label">Isi Pesan</label>
    <input type="text" class="form-control @error('isi_pesan') is-invalid @enderror"  
    id="isi_pesan" name="isi_pesan" value="{{ old('isi_pesan',$massages->isi_pesan) }}">
@error('isi_pesan')
    <div class="invalidCheck">{{ $message }}</div>
@enderror
    

</div>

<a class="btn btn-info " href="{{ route('massages.index') }}"
    role="button">Cancel</a>

<button type="submit" class="btn btn-danger">Submit</button>
</form>
    
</x-app>