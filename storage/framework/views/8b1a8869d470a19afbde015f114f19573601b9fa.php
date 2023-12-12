

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
                            <li class="breadcrumb-item active">Tabel</li>
                            <li class="breadcrumb-item active">Tabel Akun Asisten</li>
                        </ol>
                    </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

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

    <span class="counter pull-right"></span>

    <table class="table table-hover results table-bordered table-sm">
      <thead >
        <tr class="table-info text-center" >
          <th>#</th>
          <th scope="col">Nama</th>
          <th scope="col">E-mail</th>
          <th scope="col">Dibuat</th>
          <th scope="col">Action</th>
        </tr>
        <tr class="warning no-result">
          <td colspan="4"><i class="fa fa-warning"></i> No result</td>
        </tr>
      </thead>
      <tbody class="text-center">
        <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr >
            <th scope="row"><?php echo e($user->id); ?></th>
            <td><?php echo e($user->name); ?></td>
            <td><?php echo e($user->email); ?></td>
            <td><?php echo e($user->created_at); ?></td>
            <td>
                <div class="btn-group" role="group">
                    <form action="<?php echo e(route('deleteAkun', $user->id)); ?>" method="POST" >
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" rel="tooltip" class="btn btn-danger btn-just-icon btn-sm">
                            <i class="material-icons">close</i>
                        </button>
                    </form>
                </div>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
      </tbody>
      
    </table>

        
    </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.mainApp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\PROJEK PPL\PPL-Klinik-Flora\resources\views/dokter/tableAkunAsisten.blade.php ENDPATH**/ ?>