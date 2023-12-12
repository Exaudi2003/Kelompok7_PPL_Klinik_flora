

<?php $__env->startSection('content'); ?>

  <!--breadcrumb-->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Table</li>
            <li class="breadcrumb-item active">Rekam Medis</li>
            <li class="breadcrumb-item active">Rekam Medis Pasien</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <style>
            .card{
        /* font-weight: 10; */
        margin: 5px auto;
        background-color: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 0px 50px rgba(0, 0, 0, 0.1);
        width: 80%;
        max-width: 1800px;
        font-family: 'Montserrat', sans-serif;
        letter-spacing: 2px;
        }
  </style>
    <div class="card">

      <div class="title" style="text-align: center;"> 
        <h3>
          Hasil Pemeriksaan Kesehatan
          <div>(Medical Record)</div>
          <div class="border-top mt-2"></div>
          <div class="border-top mt-2"></div>
          <div class="mt-3">Data Pribadi</div>
        </h3>
      </div>
          
      <table class="table table-light table-striped">
        <tbody>
            <?php if(isset($medical[0])): ?>
            <tr>
                <th scope="row">Nama</th>
                <td>: <?php echo e($medical[0]->name); ?></td>
                <td><strong>Id. Pasien</strong> </td>
                <td>: <?php echo e($medical[0]->pasien_id); ?></td>
            </tr>
            <tr>
                <th scope="row">Tanggal Lahir</th>
                <td>: <?php echo e($medical[0]->tanggal_lahir); ?></td>
                <td><strong> No. Telepon </strong></td>
                <td>: <?php echo e($medical[0]->phone_number); ?></td>
            </tr>
            <tr>
                <th scope="row">Umur</th>
                <td>: <?php echo e(\Carbon\Carbon::parse($medical[0]->tanggal_lahir)->diffInYears(\Carbon\Carbon::now())); ?> Tahun </td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">Jenis Kelamin</th>
                <td colspan="3">: <?php echo e($medical[0]->gender); ?></td>
            </tr>
            <tr>
                <th scope="row">Alamat</th>
                <td colspan="3">: <?php echo e($medical[0]->address); ?></td>
            </tr>
            <?php else: ?>
            <tr>
                <td colspan="4">Pasien tidak memiliki Rekam Medis.</td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table><br/>

      <?php $__currentLoopData = $medical; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <hr/>
      <div class="title" style="text-align: center;"> 
        <h3>
          PEMERIKSAAN<br/>
        </h3>
      </div>
      <table class="table table-light table-striped">
        <tbody>
            <tr>
                <th scope="row"></th>
                <td style="width: 550px"></td>
                <td>Tanggal</td>
                <td>: <?php echo e($report->created_at); ?></td>
            </tr>

            <tr>
                <th scope="row"></th>
                <td style="width: 550px"></td>
                <td>ID</td>
                <td>: KF230<?php echo e($report->id); ?></td>
            </tr>
        </tbody>
      </table>
      <table class="table table-light table-striped">
        <tbody>
              <tr>
                <th style="width: 500px" scope="row" colspan="3">Tinggi Badan</th>
                <td colspan="2"><?php echo e($report->tinggi); ?> Cm</td>
              </tr>

              <tr>
                <th style="width: 500px" scope="row" colspan="3">Berat Badan</th>
                <td colspan="2"><?php echo e($report->berat); ?> Kg</td>
              </tr>
          <tr>
            <th style="width: 500px" scope="row" colspan="3">Keluhan</th>
            <td colspan="2"><?php echo e($report->keluhan); ?></td>
          </tr>
          <tr>
            <th style="width: 500px" scope="row" colspan="3">Diagnosa</th>
            <td colspan="2"><?php echo e($report->diagnosa); ?></td>
          </tr>

          <tr>
            <th style="width: 500px" scope="row" colspan="3">Kategori</th>
            <td colspan="2"><?php echo e($report->jenis_penyakit); ?></td>
          </tr>
 
          </tbody>
          </table>

          <hr/>

              <div class="title mt-3" style="text-align: center;"> 
                <h3>
                  PEMBERIAN OBAT<br/>
                </h3>
              </div>
              <table class="table table-light table-striped">
                <tbody>
                  <tr>
                    <th scope="row" rowspan="">Nama Obat</th>
                    <td>Jumlah</td>
                    <td>Kemasan</td>
                    <td>Aturan</td>
                    <td>Keterangan</td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan=""><?php echo e($report->nama_obat1); ?> <?php echo e($report->ukuran1); ?>  </th>
                    <td><?php echo e($report->jumlah_dipakai); ?></td>
                    <td><?php echo e($report->kemasan1); ?></td>
                    <td><?php echo e($report->aturan); ?></td>
                    <td><?php echo e($report->keterangan); ?></td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan=""><?php echo e($report->nama_obat2); ?> <?php echo e($report->ukuran2); ?></th>
                    <td><?php echo e($report->jumlah_dipakai2); ?></td>
                    <td><?php echo e($report->kemasan2); ?></td>
                    <td><?php echo e($report->aturan2); ?></td>
                    <td><?php echo e($report->keterangan2); ?></td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan=""><?php echo e($report->nama_obat3); ?> <?php echo e($report->ukuran3); ?></th>
                    <td><?php echo e($report->jumlah_dipakai3); ?></td>
                    <td><?php echo e($report->kemasan3); ?></td>
                    <td><?php echo e($report->aturan3); ?></td>
                    <td><?php echo e($report->keterangan3); ?></td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan=""><?php echo e($report->nama_obat4); ?> <?php echo e($report->ukuran4); ?></th>
                    <td><?php echo e($report->jumlah_dipakai4); ?></td>
                    <td><?php echo e($report->kemasan4); ?></td>
                    <td><?php echo e($report->aturan4); ?></td>
                    <td><?php echo e($report->keterangan4); ?></td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan=""><?php echo e($report->nama_obat5); ?> <?php echo e($report->ukuran5); ?></th>
                    <td><?php echo e($report->jumlah_dipakai5); ?></td>
                    <td><?php echo e($report->kemasan5); ?></td>
                    <td><?php echo e($report->aturan5); ?></td>
                    <td><?php echo e($report->keterangan5); ?></td>
                  </tr>
                  </tbody>
                  </table>



                          <div class="border-top mt-2"></div>
                          <div class="border-top mt-2 mb-5"></div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
</div>

<?php $__env->stopSection(); ?>

                  

                      
<?php echo $__env->make('layouts.mainApp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\PROJEK PPL\PPL-Klinik-Flora\resources\views/dokter/form.blade.php ENDPATH**/ ?>