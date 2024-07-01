@extends('layouts.main')

@section('container')
    <!-- top tiles -->
    <div class="row" style="display: inline-block;">
        <div class="tile_count">
            <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_bottom"><i class="fa fa-users"></i> Data Siswa</span>
                <div class="count ">5</div>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_buttom"><i class="fa fa-user"></i> Data Guru</span>
                <div class="count">3</div>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_buttom"><i class="fa fa-book"></i> Mata Pelajaran</span>
                <div class="count green">15</div>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_buttom"><i class="fa fa-home"></i> Ruang Kelas</span>
                <div class="count">300</div>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_buttom"><i class="fa fa-laptop"></i> Laboratorium</span>
                <div class="count">25</div>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_buttom"><i class="fa fa-institution"></i> Akreditasi</span>
                <div class="count">A</div>
            </div>
        </div>
    </div>
    <!-- /top tiles -->
@endsection
