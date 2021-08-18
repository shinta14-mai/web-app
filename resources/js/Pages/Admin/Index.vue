<template>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div class="table-responsive">
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Nama Pemohon</th>
      <th scope="col">Alamat Pemohon</th>
      <th scope="col">No Telepon</th>
      <th scope="col">Jenis/Nama Usaha</th>
      <th scope="col">Alamat Usaha</th>
      <th scope="col">Luas Lahan</th>
      <th scope="col">Luas Bangunan</th>
      <th scope="col">Status Lahan</th>
      <th scope="col">Email</th>
      <th scope="col">Surat Pemohon</th>
      <th scope="col">Surat Kesesuaian</th>
      <th scope="col">Rencana Tapak</th>
      <th scope="col">Ijin Penggunaan Tanah</th>
      <th scope="col">IMB</th>
      <th scope="col">KTP</th>
      <th scope="col">TTD</th>
      <th scope="col">Verifikasi</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="ad1 in admin">
      <td>{{ad1.nama_pemohon}}</td>
      <td>{{ad1.alamat_pemohon}}</td>
      <td>{{ad1.no_tlp}}</td>
      <td>{{ad1.jenis_usaha}}</td>
      <td>{{ad1.alamat_usaha}}</td>
      <td>{{ad1.luas_lahan}}</td>
      <td>{{ad1.luas_bangunan}}</td>
      <td>{{ad1.status_lahan}}</td>
      <td>{{ad1.email}}</td>
      <td>
        <a href="{{asset('img/'. $ad1.surat_pemohon)}}" target="_blank" rel="noopener noreferrer">{{ad1.surat_pemohon}}</a>
      </td>
      <td>{{ad1.surat_ktr}}</td>
      <td>{{ad1.rencana_tapak}}</td>
      <td>{{ad1.ijin_ppt}}</td>
      <td>{{ad1.imb}}</td>
      <td>{{ad1.ktp}}</td>
      <td>{{ad1.ttd}}</td>
      <td>{{ad1.verifikasi}}</td>
    </tr>
  </tbody>
  </table>
</div>
</template>

<script>
export default {
  props: {
    admin: Array
  }
}
</script>