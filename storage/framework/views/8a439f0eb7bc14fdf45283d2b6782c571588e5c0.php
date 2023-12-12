

<?php $__env->startSection('content'); ?>
<head>
    <link rel="stylesheet" href=<?php echo e(asset('css/tabel_pasien.css')); ?>>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
</head>


    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6"></div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Rekam Medis</li>
                            <li class="breadcrumb-item active">Rekam Medis Pasien</li>
                        </ol>
                    </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <?php if($data->isEmpty()): ?>
    <p class="font-monospace fw-bolder fs-1 text-center text-muted">Belum Ada Data Pasien </p>
    <p class="font-monospace fw-bolder fs-1 text-center text-muted"> Untuk dibuat Rekam Medis </p>
    <?php else: ?>
    
    <div class="container">
        <div class="form-group pull-right">
            <input type="text" class="search form-control" placeholder="Search.....">
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-5">
    
        <?php if(session('success')): ?>
                <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                    <?php echo e(session('success')); ?>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
        <?php endif; ?>
    
            </div>
        </div>
      </div>

    <div class="container card">
        <div class="container mt-1">
            <p>showing <strong><?php echo e($data->firstItem()); ?> - <?php echo e($data->lastItem()); ?> </strong> dari <strong> <?php echo e($data->total()); ?> </strong>  item</p>
        </div>
    <span class="counter pull-right"></span>
    <table class="table table-hover results table-bordered table-sm">
      <thead >
        <tr class="table-info text-center" >
          <th>#</th>
          <th scope="col">Nama</th>
          <th scope="col">Tanggal Lahir</th>
          <th scope="col">Umur</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">No. Telepon</th>
          <th scope="col">Alamat</th>
          <th scope="col">Action</th>
        </tr>
        <tr class="warning no-result">
          <td colspan="4"><i class="fa fa-warning"></i> No result</td>
        </tr>
      </thead>
      <tbody class="text-center">
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr >
            <th scope="row"><?php echo e($item->id); ?></th>
            <td> <?php echo e($item->name); ?></td>
            <td><?php echo e(\Carbon\Carbon::parse($item->tanggal_lahir)->isoFormat('D MMMM YYYY')); ?></td>
            <td><?php echo e(\Carbon\Carbon::parse($item->tanggal_lahir)->diffInYears(\Carbon\Carbon::now())); ?></td>
            <td><?php echo e($item->gender); ?></td>
            <td><?php echo e($item->phone_number); ?></td>
            <td><?php echo e($item->address); ?></td>
            <td>
                <div class="btn-group" role="group">
                    

                    <a href="<?php echo e(route('index.pasien.form', $item->id)); ?>">
                    <button type="submit" rel="tooltip" class="btn btn-success btn-sm mr-1" data-original-title="" title="">
                        <i class="">Buat Medical Record</i>
                    </button>
                    </a>
                    
                    
                </div>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>

    <?php endif; ?>
        <nav class="pagination mb-3 justify-content-end">
            <ul class="pagination btn btn-sm"> <?php echo e($data->withQueryString()->links()); ?> </ul>
        </nav>
</div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.mainApp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\PROJEK PPL\PPL-Klinik-Flora\resources\views/dokter/index_pasien.blade.php ENDPATH**/ ?>