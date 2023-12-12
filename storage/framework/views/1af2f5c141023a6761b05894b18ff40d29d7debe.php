

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
                <div class="col-sm-6">
                </div><!-- /.col -->
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Tabel</li>
                    <li class="breadcrumb-item active">Tabel Obat</li>
                </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    
    <?php if($data->isEmpty()): ?>
        <p class="font-monospace fw-bolder fs-1 text-center text-muted">Belum Ada Data Obat</p>
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
                <div class="alert alert-success alert-dismissible fade show mt-2" role="alert" >
                    <i class="fas fa-times-circle me-3">
                        <?php echo e(session('success')); ?>

                    </i>
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

    <div class="dropdown mb-1">
        <button class="btn btn-sm btn-info dropdown-toggle" type="button" id="filterDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Filter
        </button>
        <div class="dropdown-menu" aria-labelledby="filterDropdown">
            <a class="dropdown-item" href="<?php echo e(route('obat.show')); ?>">Semua</a>
            <a class="dropdown-item" href="<?php echo e(route('obat.show', ['filter' => 'tersedia'])); ?>">Tersedia</a>
            <a class="dropdown-item" href="<?php echo e(route('obat.show', ['filter' => 'habis'])); ?>">Habis</a>
        </div>
    </div>

    

    <table class="table table-hover table-bordered results table-sm">
      <thead>
        <tr class="table-info text-center" >
          <th>#</th>
          <th scope="col">Nama Obat</th>
          <th scope="col">Keterangan</th>
          <th scope="col">Tanggal Masuk</th>
          <th scope="col">Jumlah</th>
          <th scope="col">Kemasan</th>
          <th scope="col">Status</th>
          <th scope="col">Action</th>
        </tr>
        <tr class="warning no-result">
          <td colspan="4"><i class="fa fa-warning"></i> No result</td>
        </tr>
      </thead>
      <tbody class="text-center">
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr >
            <th scope="row"><?php echo e($obat['id']); ?></th>
            <td><?php echo e($obat['nama_obat']); ?> ( <?php echo e($obat['singkatan']); ?>) </td>
            <td><?php echo e($obat['keterangan']); ?></td>
            <td><?php echo e($obat['tanggal_masuk']); ?></td>
            <td><?php echo e($obat['jumlah']); ?></td>
            <td><?php echo e($obat['kemasan']); ?> (<?php echo e($obat['ukuran']); ?>)</td>
            <td class="">
                <?php if($obat['jumlah'] <= 0): ?>
                    <span class="false text-white"><?php echo e(__('Habis')); ?></span>
                <?php else: ?>
                    <span class="true text-white"><?php echo e(__('Tersedia')); ?></span>
                <?php endif; ?>
            </td>
            <td>
                <div class="btn-group" role="group">

                    <a href=<?php echo e(url('/obats/redirect', $obat['id'])); ?>>
                    <button type="button" rel="tooltip" class="btn btn-success btn-just-icon btn-sm mr-1" data-original-title="" title="">
                        <i class="material-icons">edit</i>
                    </button>
                    </a>
                    
                    <form action="<?php echo e(route('delete.obat', $obat['id'])); ?>" method="POST" id="deleteForm">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" rel="tooltip" class="btn btn-danger btn-just-icon btn-sm" id="delete">
                            <i class="material-icons">close</i> 
                        </button>
                    </form>
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



    

    
<?php echo $__env->make('layouts.mainAppAsisten', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\PROJEK PPL\PPL-Klinik-Flora\resources\views/asisten/show_obat.blade.php ENDPATH**/ ?>