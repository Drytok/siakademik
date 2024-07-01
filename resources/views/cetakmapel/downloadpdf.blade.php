<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        table.static {
            position: relative;
            border: 1px solid #543535;
        }
    </style>
    <title>Cetak Data Mata Pelajaran</title>
</head>

<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Mata Pelajaran</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr class="headings">
                <th>Nama Pelajaran</th>
                <th>KKM </th>
            </tr>
            @foreach ($data as $item)
                {{-- @dd($item->id) --}}
                <tr>
                    <td>{{ $item->nama_pelajaran }}</td>
                    <td>{{ $item->kkm }}</td>
            @endforeach
        </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>
