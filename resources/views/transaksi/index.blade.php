<h2>Form Data Pelanggan</h2>

<form method="POST" action="{{ isset($edit) ? '/pelanggan/'.$edit->id : '/pelanggan' }}">
    @csrf
    @if(isset($edit))
        @method('PUT')
    @endif

    <input name="nama_pelanggan" placeholder="Nama" value="{{ $edit->nama_pelanggan ?? '' }}">
    
    <select name="jenis_kelamin">
        <option>Laki-laki</option>
        <option>Perempuan</option>
    </select>

    <input name="no_hp" placeholder="No HP" value="{{ $edit->no_hp ?? '' }}">

    <select name="jenis_tiket">
        <option>Anak</option>
        <option>Dewasa</option>
    </select>

    <input type="date" name="tanggal_masuk" value="{{ $edit->tanggal_masuk ?? '' }}">
    <input name="jumlah_orang" placeholder="Jumlah Orang" value="{{ $edit->jumlah_orang ?? '' }}">
    <input name="total_bayar" placeholder="Total Bayar" value="{{ $edit->total_bayar ?? '' }}">

    <button type="submit">
        {{ isset($edit) ? 'Update' : 'Simpan' }}
    </button>
</form>

<hr>

<h2>Data Pelanggan</h2>

@foreach($data as $item)
<p>
    {{ $item->nama_pelanggan }} - {{ $item->total_bayar }}

    <a href="/pelanggan/{{ $item->id }}/edit">Edit</a>

    <form method="POST" action="/pelanggan/{{ $item->id }}">
        @csrf
        @method('DELETE')
        <button>Hapus</button>
    </form>
</p>
@endforeach