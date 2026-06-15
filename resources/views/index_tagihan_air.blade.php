<!-- Menghubungkan dengan view template -->
@extends('template')

@section('title', 'Data Tagihan Air')
@section('konten')
    <center>

        <p>Cari Data Tagihan :</p>
        <form action="/tagihan_air_cari" method="GET">
            <input type="text" name="cari" placeholder="Cari tagihan .." class="form-control">
            <input type="submit" value="CARI" class="btn btn-secondary">
        </form>

        <br />

        <table class="table table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>No Meteran</th>
                <th>Penggunaan (m^3)</th>
                <th>Total Tagihan</th>
            </tr>
            @foreach ($tagihan_air as $c)
                <tr>
                    <td>{{ $c->ID }}</td>
                    <td>{{ $c->NoMeteran }}</td>
                    <td>{{ $c ->MeterTotal }}</td>
                    <td>{{ $c->TagihanTotal }}</td>

                </tr>
            @endforeach
        </table>
        <ul class="pagination justify-content-center" style="margin:20px 0">
            {{ $tagihan_air->links() }}
        </ul>
        <a href="/tagihan_air_tambah" class="btn btn-primary">Input Tagihan Baru</a>

    </center>

@endsection
