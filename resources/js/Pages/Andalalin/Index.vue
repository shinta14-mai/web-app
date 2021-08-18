<template>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<title>Daftar Pengajuan Andalalin</title>
<center>
  <div class="container p-3 my-3 border">
    <div v-if="$page.props.flash.message" class="alert">
      {{ $page.props.flash.message }}
    </div>
  <h2>PERMOHONAN PENYUSUNAN KAJIAN TEKNIS</h2>
  <h2>PENGENDALIAN LALU LINTAS</h2>
  <h3>DINAS PERHUBUNGAN BANYUWANGI</h3>
  <br><br><br>
  <p>Formulir pengajuan Kajian Teknis Pengendalian Lalu Lintas dari Dinas Perhubungan Kabupaten Banyuwangi berikut ini berisi persyaratan - persyaratan sebagai salah satu kelengkapan berkas pengajuan Izin Mendirikan Bangunan (IMB).</p>
  <Link href="/andalalin/create">Daftar Sekarang</Link>
  </div>
</center>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
export default {
    props: {
        title: Array
    },
    components: {
        Link,
    }
}
</script>

<style>
</style>