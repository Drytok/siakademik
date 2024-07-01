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
    <title>Cetak Data Wali Murid</title>
</head>

<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Wali Murid</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr class="headings">
                <th>Nama </th>
                <th>Alamat </th>
            </tr>
            @foreach ($data as $item)
                {{-- @dd($item->id) --}}
                <tr>
                    <td>{{ $item->nama_wali }}</td>
                    <td>{{ $item->alamat }}</td>
            @endforeach
        </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>
