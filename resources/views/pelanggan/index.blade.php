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

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>No HP</th>
        <th>Jenis Tiket</th>
        <th>Tanggal Masuk</th>
        <th>Jumlah Orang</th>
        <th>Total Bayar</th>
        <th>Aksi</th>
    </tr>

    @foreach($data as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->nama_pelanggan }}</td>
        <td>{{ $item->jenis_kelamin }}</td>
        <td>{{ $item->no_hp }}</td>
        <td>{{ $item->jenis_tiket }}</td>
        <td>{{ $item->tanggal_masuk }}</td>
        <td>{{ $item->jumlah_orang }}</td>
        <td>{{ $item->total_bayar }}</td>
        <td>
            <a href="/pelanggan/{{ $item->id }}/edit">Edit</a>

            <form method="POST" action="/pelanggan/{{ $item->id }}" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>