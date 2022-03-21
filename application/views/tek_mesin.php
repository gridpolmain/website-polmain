<!doctype html>
<html lang="en">
  <head>
    <!-- load header -->
    <?php $this->load->view('header');?>
    <!-- my css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/prodi.css">
    <title>Prodi D3 Teknologi Mesin</title>
  </head>
  <body>
    <!-- navbar -->
    <div style="width: 100%; background-image: linear-gradient(to top, rgba(0, 123, 255, 1), rgba(0, 59, 122, 1)); box-shadow: 3px 0 5px #050505;"><?php $this->load->view('navbar');?></div>
    <!-- jumbotron -->
    <div class="container">
      <div class="jumbotron bg-transparent">
        <div class="row">
          <div class="col-md">
            <h1 class="display-5 font-weight-bold">PROGRAM STUDI DIPLOMA 3 TEKNOLOGI MESIN</h1>
            <a class="btn btn-primary btn-lg" href="<?= base_url();?>index.php/welcome/pmb" role="button">daftar sekarang</a>
          </div>
          <div class="col">
            <div class="imgcontainer">
              <img src="<?= base_url();?>assets/img/prodi/mesin3.jpeg">
            </div>
            
          </div>
          </div>
            <div class="ornament">
            <div class="bulat"></div>
          </div>
        </div>
  </div>
    <!-- jumbotron -->
  <div class="container prodi">
  <div class="container">
      <h3 class="font-weight-bold title" id="tentang_polmain" style="margin-top: 20px;">Visi dan Misi Program Studi D3 Teknologi Mesin</h3>
      <p>
      <div class="row" style="border-top: 1px solid #c7c7c7; padding: 10px;">
        <div class="col-md">
        <b>Visi Prodi D3 Teknologi Mesin</b><p>
        "Menjadi Prodi D3 Teknologi Mesin yang unggul dalam bidang pengembangan dan penerapan teknologi mesin yang
        mengedepankan IPTEK di tingkat nasional."<p>
        <p>
        <b>Misi Prodi D3 Teknologi Mesin</b>
        <ol>
        <li>Menyelenggarakan tata kelola, penjaminan mutu, dan kerjasama untuk mencapai layanan akademik dan non akademik serta mewujudukan
            institusi berkelanjutan dan berkualitas</li>
        <li>Menyelenggarakan pendidikan dalam bidang teknologi mesin yan mengedepankan IPTEN bertaraf nasional</li>
        <li>Menyelenggarakan kualitas sumber daya manusia yang profesional dalam bidangnya</li>
        <li>Menyelenggarakan lulusan yang memiliki keahlian dan keterampilan yang siap kerja didalam negeri maupun luar negeri</li>
        <li>Menyelenggarakan tersedianya sarana prasarana untuk kegiatan Tri Dharma</li>
        <li>Menyelenggarakan riset dan pengabdian kepada masyarakat yang mengedepankan IPTEK dan bermanfaat serta menyelenggarakan kesejahteraan masyarakat</li>
        </ol>
        <p>
        <h3 class="font-weight-bold title" id="tentang_polmain" style="margin-top: 20px;">Kurikulum Prodi D3 Teknologi Mesin 2021</h3>
      <p>
      <div class="row" style="border-top: 1px solid #c7c7c7; padding: 10px;">
        <img src="<?= base_url();?>assets/img/prodi/kurikulum-mesin-2021.jpg" style="width: 100%; border: 5px solid #4e03fc;">
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- load bootstrap js -->
  <?php $this->load->view('bootjs');?>
  </body>
</html>
