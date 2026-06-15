<!-- Menghubungkan dengan view template master -->
@extends('template')

@section('title', 'Tambah Tagihan air')
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
    <center>


        <br />
        <br />

        <div class="card">
            <div class="card-header">
                Form Input Tagihan baru
            </div>

            <div class="card-body">
                <form action="/tagihan_air_store" method="post">
                    {{ csrf_field() }}

                    <div class="row mb-3">
                        <label for="NoMeteran" class="col-sm-2 col-form-label">No Meteran</label>
                        <div class="col-sm-10">
                            <input type="number" name="NoMeteran" id="NoMeteran" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="MeterAwal" class="col-sm-2 col-form-label">Meter Awal</label>
                        <div class="col-sm-10">
                            <input type="number" name="MeterAwal" id="MeterAwal" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="MeterAkhir" class="col-sm-2 col-form-label">Meter Akhir</label>
                        <div class="col-sm-10">
                            <input type="number" name="MeterAkhir" id="MeterAkhir" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="offset-sm-2 col-sm-10">
                            <input type="submit" value="Simpan Data" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <br />
        <br />
        <a href="/tagihan_air" class="btn btn-info"> Kembali</a>
    </center>
@endsection
