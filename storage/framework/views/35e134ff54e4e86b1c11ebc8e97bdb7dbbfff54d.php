

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
            <li class="breadcrumb-item active">Tabel Obat</li>
            <li class="breadcrumb-item active">Edit Obat</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">

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

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card shadow">
                <div class="card-header shadow mb-3"><?php echo e(__('Edit Data Obat')); ?></div>

                <div class="card-body">
                  <form action=<?php echo e(route('obat.update', ['obat' => $obat['id']])); ?> method="post" name='edit'>
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                        <div class="form-group row">
                            <label for="nama_obat" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Nama Obat')); ?></label>

                            <div class="col-md-6 mb-3">
                              <input type="text" name='nama_obat' value = "<?php echo e($obat['nama_obat']); ?>" placeholder="Nama Baru..." id="nama_obat" class="form-control <?php $__errorArgs = ['nama_obat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required >

                                <?php $__errorArgs = ['nama_obat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="singkatan" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Singkatan Obat')); ?></label>

                            <div class="col-md-6 mb-3">
                              <input type="text" name='singkatan' value = "<?php echo e($obat['singkatan']); ?>" placeholder="Singkatan Baru..." id="singkatan" class="form-control <?php $__errorArgs = ['singkatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required >

                                <?php $__errorArgs = ['singkatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="keterangan" class="col-md-4 col-form-label text-md-right" ><?php echo e(__('Keterangan')); ?></label>

                            <div class="col-md-6 mb-3">
                                <input type="text" name="keterangan" value = "<?php echo e($obat['keterangan']); ?>" placeholder="Keterangan Baru..." id="keterangan" class="form-control <?php $__errorArgs = ['keterangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" >

                                <?php $__errorArgs = ['keterangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tanggal_masuk" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Tanggal Masuk')); ?></label>

                            <div class="col-md-6 mb-3">
                                <input id="tanggal_masuk" type="date" value="<?php echo e($obat['tanggal_masuk']); ?>" name="tanggal_masuk" placeholder="Tanggal Baru..." class="form-control <?php $__errorArgs = ['tanggal_masuk'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required autocomplete="address">

                                <?php $__errorArgs = ['tanggal_masuk'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jumlah" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Jumlah')); ?></label>

                            <div class="col-md-6 mb-3">
                                <input id="jumlah" type="number" name="jumlah" value = "<?php echo e($obat['jumlah']); ?>" placeholder="Jumlah Baru..." class="form-control <?php $__errorArgs = ['jumlah'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

                                <?php $__errorArgs = ['jumlah'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kemasan" class="col-md-4 col-form-label text-md-right" ><?php echo e(__('Kemasan')); ?></label>
                            <div class="col-md-6 mb-3">
                                <div class="input-group custom-dropdown">
                                <select id="kemasan"  class="form-control <?php $__errorArgs = ['kemasan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="kemasan" required>
                                  <option value="" <?php echo e($obat['kemasan'] ? '' : 'selected'); ?> disabled>Pilih Kemasan</option>
                                  <option value="Tablet" <?php echo e($obat['kemasan'] == 'Tablet' ? 'selected' : ''); ?>>Tablet</option>
                                  <option value="Sirop" <?php echo e($obat['kemasan'] == 'Sirop' ? 'selected' : ''); ?>>Sirop</option>
                                  <option value="Hirup" <?php echo e($obat['kemasan'] == 'Hirup' ? 'selected' : ''); ?>>Hirup</option>
                                </select>
                                <div class="input-group-append">
                                    <span class="input-group-text" data-toggle="dropdown">
                                        <i class="fas fa-caret-down"></i>
                                    </span>
                                </div>
                            </div>

                                <?php $__errorArgs = ['kemasan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>


                        <div class="form-group row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success" name="edit">
                                    <?php echo e(__('Update')); ?>

                                </button>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainAppAsisten', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\PROJEK PPL\PPL-Klinik-Flora\resources\views/asisten/edit_obat.blade.php ENDPATH**/ ?>