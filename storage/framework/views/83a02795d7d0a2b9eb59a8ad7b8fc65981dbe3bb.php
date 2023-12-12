



<?php $__env->startSection('content'); ?>

    <div class="container mt-5 ">
      <!-- Small boxes (Stat box) -->
      <div class="row justify-content-center">

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo e($count); ?></h3>

                <p>Jumlah Pasien</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="/patients/show/dokter" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo e($countTersedia); ?><sup style="font-size: 20px"></sup></h3>

                <p>Jumlah Obat Tersedia</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/obat/show/dokter" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo e($countTidakTersedia); ?></h3>

                <p>Obat Tidak Tersedia</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/obat/show/dokter" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
    </div>

    <div class="container mt-5 ">
      <!-- Small boxes (Stat box) -->
      <div class="row justify-content-center">

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo e($countPasienHariIni); ?></h3>

                <p>Pasien berobat hari ini</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="/patients/show/dokter" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo e($countPerBulan); ?></h3>

                <p>Pasien Berobat Bulan Ini</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="/patients/show/dokter" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="container mt-5 ">
            <!-- Small boxes (Stat box) -->
            <div class="row justify-content-center">
      
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h3><?php echo e($countKategoriRingan); ?></h3>
      
                      <p>Pasien Kategori Penyakit Ringan Bulan ini</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-person"></i>
                    </div>
                    <a href="/Medical/show" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
      
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-success">
                    <div class="inner">
                      <h3><?php echo e($countKategoriSedang); ?><sup style="font-size: 20px"></sup></h3>
      
                      <p>Pasien Kategori Penyakit Sedang Bulan ini</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="/Medical/show" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
      
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-danger">
                    <div class="inner">
                      <h3><?php echo e($countKategoriBerat); ?></h3>
      
                      <p>Pasien Kategori Penyakit Berat Bulan ini</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="/Medical/show" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
              </div>
          </div>
      
          <div class="container mt-5 ">
            <!-- Small boxes (Stat box) -->
            <div class="row justify-content-center">
      
             
        </div>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainApp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\PROJEK PPL\PPL-Klinik-Flora\resources\views/dokter/index.blade.php ENDPATH**/ ?>