<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<style>
</style>
<body>
  <center>
    <h4>Toko Bangunan CECEP</h4>
    <small>Way Kandis</small>
    <small>08234234xxx</small>
  </center>
  <br>
  No Nota{{ $kodeNota }}
  <br>
  ============================================== <br>
  {{ date('d-m-Y H:i:s') }} <br>
  ==============================================
  <table>
    <tr>
      <td>
        Nama Barang
      </td>
      <td>
        Jumlah
      </td>
      <td>
        Harga
      </td>
      <td>
        Sub Total
      </td>
    </tr>
    @foreach($barang as $b)
    <tr>
      <td>{{ $b['namaBarang'] }}</td>
      <td>{{ $b['jumlahItem'] }}</td>
      <td>Rp. {{ number_format($b['harga'], 0, '.', '.') }},-</td>
      <td>Rp. {{ number_format($b['total'], 0, '.', '.') }},-</td>
    </tr>
    @endforeach
    <tr>
      <td>Total Biaya</td>
      <td colspan="3" align="right">{{ number_format($total, 0, '.', '.') }}</td>
    </tr>
  </table>
  <center>Terima Kasih.<br>Selamat Datang Kembali</center>
</body>
</html>
