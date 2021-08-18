<template>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<title>Andalalin</title>
<div class="container-fluid">
  <div class="row">
    <div class="col-4">
        <h6>DINAS PERHUBUNGAN BANYUWANGI</h6>
        <br><br><br>
        <p>Formulir pengajuan Kajian Teknis Pengendalian Lalu Lintas dari Dinas Perhubungan Kabupaten Banyuwangi berikut ini berisi persyaratan - persyaratan sebagai salah satu kelengkapan berkas pengajuan Izin Mendirikan Bangunan (IMB).</p>
    </div>
    <div class="col-8">
      <form @submit.prevent="submit" enctype="multipart/form-data">
        <h3>PERMOHONAN PENYUSUNAN KAJIAN TEKNIS</h3>
        <h3>PENGENDALIAN LALU LINTAS</h3>
        <div>
          <input v-model="andalalin.nama_pemohon" placeholder="Nama Pemohon" class="form-group">
        </div>
        <div>
          <textarea v-model="andalalin.alamat_pemohon" placeholder="Alamat Pemohon" class="form-group"></textarea>
        </div>
        <div>
          <input v-model="andalalin.no_tlp" placeholder="Nomor Telepon" class="form-group">
        </div>
        <div>
          <input v-model="andalalin.jenis_usaha" placeholder="Jenis/Nama Usaha" class="form-group">
        </div>
        <div>
            <textarea v-model="andalalin.alamat_usaha" placeholder="Alamat Tempat Usaha" class="form-group"></textarea>
        </div>
        <div>
          <input v-model="andalalin.luas_lahan" placeholder="Luas Lahan" class="form-group">
        </div>
        <div>
          <input v-model="andalalin.luas_bangunan" placeholder="Luas Bangunan" class="form-group">
        </div>
        <div>
          <input v-model="andalalin.status_lahan" placeholder="Status Lahan" class="form-group">
        </div>
        <div>
          <input v-model="andalalin.email" placeholder="Email" class="form-group">
        </div>
        <div class="row">
          <div class="col-5 col-sm-4 text">
            <label for="surat_pemohon">Surat Pemohon:</label>
          </div>
          <div class="col-7 col-sm-6">
            <input type="file" name="file" id="surat_pemohon" class="form-control" @input="andalalin.surat_pemohon = $event.target.files[0]">
          </div>
        </div>
        <div class="row">
          <div class="col-5 col-sm-4 text">
            <label for="surat_ktr">Surat Kesesuaian Tata Ruang:</label>
          </div>
          <div class="col-7 col-sm-6">
            <input type="file" name="file" id="surat_ktr" class="form-control" @input="andalalin.surat_ktr = $event.target.files[0]">
          </div>
        </div>
        <div class="row">
          <div class="col-5 col-sm-4 text">
            <label for="rencana_tapak">Rencana Tapak:</label>
          </div>
          <div class="col-7 col-sm-6">
            <input type="file" name="file" id="rencana_tapak" class="form-control" @input="andalalin.rencana_tapak = $event.target.files[0]">
          </div>
        </div>
        <div class="row">
          <div class="col-5 col-sm-4 text">
            <label for="ijin_ppt">Ijin Penggunaan Pemanfaatan Tanah:</label>
          </div>
          <div class="col-7 col-sm-6">
            <input type="file" name="file" id="ijin_ppt" class="form-control" @input="andalalin.ijin_ppt = $event.target.files[0]">
          </div>
        </div>
        <div class="row">
          <div class="col-5 col-sm-4 text">
            <label for="imb">Gambar IMB:</label>
          </div>
          <div class="col-7 col-sm-6">
            <input type="file" name="file" id="imb" class="form-control" @input="andalalin.imb = $event.target.files[0]">
          </div>
        </div>
        <div class="row">
          <div class="col-5 col-sm-4 text">
            <label for="ktp">KTP:</label>
          </div>
          <div class="col-7 col-sm-6">
            <input type="file" name="file" id="ktp" class="form-control" @input="andalalin.ktp = $event.target.files[0]">
          </div>
        </div>
        <div class="row">
          <div class="col-5 col-sm-4 text">
            <label for="ttd">Tanda Tangan:</label>
          </div>
          <div class="col-7 col-sm-6">
            <input type="file" name="file" id="ttd" class="form-control" @input="andalalin.ttd = $event.target.files[0]">
          </div>
        </div>
        <div class="form-group">
            <button type="submit">Register</button>
        </div>
  </form>
    </div>
  </div>
</div>
</template>

<style>
.col-8{
  padding: 50px;
  text-align: center;
}
.col-4{
    background-color: blue;
}
.form-group{
    margin-bottom: 10px;
    width: 550px;
    height: 40px;
}
.text{
  text-align: right;
}
</style>


<script>
import { useForm } from '@inertiajs/inertia-vue3'

export default {
      props: {
        title: String,
        // errors: Object
    },
  setup () {
    const andalalin = useForm({
          nama_pemohon: null,
          alamat_pemohon: null,
          no_tlp: null,
          jenis_usaha: null,
          alamat_usaha: null,
          luas_lahan: null,
          luas_bangunan: null,
          status_lahan: null,
          email: null,
          surat_pemohon: null,
          surat_ktr: null,
          rencana_tapak: null,
          ijin_ppt: null,
          imb: null,
          ktp: null,
          ttd: null
    })
    function submit() {
      andalalin.post('/andalalin', this.andalalin)
    }

    return { andalalin, submit }
  },
}
</script>