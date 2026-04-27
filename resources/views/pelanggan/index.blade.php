<h2>Form Data Pelanggan</h2>

<form method="POST" action="{{ isset($edit) ? '/pelanggan/'.$edit->id : '/pelanggan' }}">
    @csrf
    @if(isset($edit))
        @method('PUT')
    @endif

    <input name="nama_pelanggan" placeholder="Nama" value="{{ $edit->nama_pelanggan ?? '' }}">
    
    <select name="jenis_kelamin">
        <option {{ (isset($edit) && $edit->jenis_kelamin == 'Laki-laki') ? 'selected' : '' }}>Laki-laki</option>
        <option {{ (isset($edit) && $edit->jenis_kelamin == 'Perempuan') ? 'selected' : '' }}>Perempuan</option>
    </select>

    <input name="no_hp" placeholder="No HP" value="{{ $edit->no_hp ?? '' }}">

    <select name="jenis_tiket" id="jenis_tiket" onchange="hitungTotal()">
        <option value="Anak" {{ (isset($edit) && $edit->jenis_tiket == 'Anak') ? 'selected' : '' }}>Anak</option>
        <option value="Dewasa" {{ (isset($edit) && $edit->jenis_tiket == 'Dewasa') ? 'selected' : '' }}>Dewasa</option>
    </select>

    <input type="date" name="tanggal_masuk" value="{{ $edit->tanggal_masuk ?? '' }}">

    <input type="number" name="jumlah_orang" id="jumlah_orang"
           placeholder="Jumlah Orang"
           value="{{ $edit->jumlah_orang ?? '' }}"
           oninput="hitungTotal()">

    <input name="total_bayar" id="total_bayar"
           placeholder="Total Bayar"
           value="{{ $edit->total_bayar ?? '' }}"
           readonly>

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

<script>
function hitungTotal() {
    let jumlah = document.getElementById('jumlah_orang').value || 0;
    let jenis = document.getElementById('jenis_tiket').value;

    let harga = 0;

    if (jenis === "Anak") {
        harga = 10000;
    } else if (jenis === "Dewasa") {
        harga = 15000;
    }

    let total = jumlah * harga;

    document.getElementById('total_bayar').value = total;
}

window.onload = function() {
    hitungTotal();
}
</script>