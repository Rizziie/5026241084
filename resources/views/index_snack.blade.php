<!-- Menghubungkan dengan view template -->
@extends('template')

@section('title', 'Data snack')
@section('konten')
    <center>

        <p>Cari Data snack :</p>
        <form action="/snack_cari" method="GET">
            <input type="text" name="cari" placeholder="Cari snack .." class="form-control">
            <input type="submit" value="CARI" class="btn btn-secondary">
        </form>

        <br />

        <table class="table table-striped table-hover">
            <tr>
                <th>Merk</th>
                <th>Stock</th>
                <th>Tersedia?</th>
                <th>Actions</th>
            </tr>
            @foreach ($snack as $b)
                <tr>
                    <td>{{ $b->merksnack }}</td>
                    <td>{{ $b->stocksnack }}</td>
                    <td>{{ $b->tersedia }}</td>
                    <td>
                        <a href="/snack_edit/{{ $b->kodesnack }}" class="btn btn-warning">Edit</a>
                        |
                        <a href="/snack_hapus/{{ $b->kodesnack }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </table>
        <ul class="pagination justify-content-center" style="margin:20px 0">
            {{ $snack->links() }}
        </ul>
        <a href="/snack_tambah" class="btn btn-primary">Tambah snack Baru</a>

    </center>

@endsection
