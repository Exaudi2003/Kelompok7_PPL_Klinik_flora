

<?php $__env->startSection('content'); ?>
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Pendataan</li>
            <li class="breadcrumb-item active">Tambah Data Obat</li>
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
                <div class="card-header shadow mb-3"><?php echo e(__('Tambahkan Data Obat')); ?></div>

                <div class="card-body">
                    <form action="<?php echo e(route('obat.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Nama Obat')); ?></label>

                            <div class="col-md-6 mb-3">
                                <input id="nama_obat" type="text" class="form-control <?php $__errorArgs = ['nama_obat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nama_obat" value="<?php echo e(old('nama_obat')); ?>" required autocomplete="name">

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
                                <input id="singakatan" type="text" class="form-control <?php $__errorArgs = ['singkatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="singkatan" value="<?php echo e(old('singkatan')); ?>" required autocomplete="singkatan">

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
                            <label for="keterangan" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Keterangan Obat')); ?></label>

                            <div class="col-md-6 mb-3">
                                <input id="keterangan" type="text" class="form-control <?php $__errorArgs = ['keterangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="keterangan" value="<?php echo e(old('keterangan')); ?>" required autocomplete="keterangan">

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
                            <label for="tanggal_masuk" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Tanggal Masuk Obat')); ?></label>

                            <div class="col-md-6 mb-3 input-group date">
                                
                                <input id="tanggal_masuk" type="date" class="form-control <?php $__errorArgs = ['tanggal_masuk'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="tanggal_masuk" value="<?php echo e(old('tanggal_masuk')); ?>" required autocomplete="tanggal_masuk">

                                <?php $__errorArgs = ['date'];
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
                            <label for="jumlah" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Jumlah Obat')); ?></label>

                            <div class="col-md-6 mb-3 input-group date">
                                
                                <input id="jumlah" type="number" class="form-control <?php $__errorArgs = ['jumlah'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="jumlah" value="<?php echo e(old('jumlah')); ?>" required autocomplete="jumlah">

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
                            <label for="kemasan" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Kemasan')); ?></label>
                            <div class="col-md-6 mb-3">
                                <div class="input-group custom-dropdown">
                                    <select id="kemasan" class="form-control <?php $__errorArgs = ['kemasan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="kemasan" required>
                                        <option selected disabled value="">Pilih Kemasan</option>
                                        <option value="Tablet">Tablet</option>
                                        <option value="Sirop">Sirop</option>
                                        <option value="Hirup">Hirup</option>
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
                        
                        <div class="form-group row">
                            <label for="ukuran" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Ukuran Obat')); ?></label>
                            <div class="col-md-6 mb-3">
                                <div class="input-group custom-dropdown">
                                    <select id="ukuran" class="form-control <?php $__errorArgs = ['ukuran'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="ukuran" required>
                                        <option selected disabled value="">Pilih Kemasan Terlebih Dahulu</option>
                                    </select>
                                    <div class="input-group-append">
                                        <span class="input-group-text" data-toggle="dropdown">
                                            <i class="fas fa-caret-down"></i>
                                        </span>
                                    </div>
                                </div>
                                <?php $__errorArgs = ['ukuran'];
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
                        <button type="submit" class="btn btn-success">
                            <?php echo e(__('Tambahkan')); ?>

                        </button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    </div>
  </div>

<?php $__env->startSection('scripts'); ?>
<script>
    // Fungsi untuk mengisi dropdown ukuran obat berdasarkan pilihan kemasan
    function fillUkuranDropdown(kemasan) {
        var ukuranDropdown = document.getElementById("ukuran");
        ukuranDropdown.innerHTML = ""; // Mengosongkan dropdown ukuran obat

        if (kemasan === "Sirop") {
            // Jika kemasan adalah Sirop, menambahkan pilihan ukuran obat Sirop
            var option1 = document.createElement("option");
            option1.value = "";
            option1.text = "Pilih Ukuran Sirop";
            ukuranDropdown.add(option1);

            var option2 = document.createElement("option");
            option2.value = "50ml";
            option2.text = "50ml";
            ukuranDropdown.add(option2);

            var option3 = document.createElement("option");
            option3.value = "100ml";
            option3.text = "100ml";
            ukuranDropdown.add(option3);

            var option4 = document.createElement("option");
            option4.value = "150ml";
            option4.text = "150ml";
            ukuranDropdown.add(option4);

            var option5 = document.createElement("option");
            option5.value = "200ml";
            option5.text = "200ml";
            ukuranDropdown.add(option5);
        } else if (kemasan === "Tablet") {
            // Jika kemasan adalah Tablet, menambahkan pilihan ukuran obat Tablet

            var option1 = document.createElement("option");
            option1.value = "";
            option1.text = "Pilih Ukuran Tablet";
            ukuranDropdown.add(option1);

            var option2 = document.createElement("option");
            option2.value = "5btr";
            option2.text = "5btr";
            ukuranDropdown.add(option2);

            var option3 = document.createElement("option");
            option3.value = "10btr";
            option3.text = "10btr";
            ukuranDropdown.add(option3);

            var option4 = document.createElement("option");
            option4.value = "15btr";
            option4.text = "15btr";
            ukuranDropdown.add(option4);

            var option5 = document.createElement("option");
            option5.value = "20btr";
            option5.text = "20btr";
            ukuranDropdown.add(option5);
        } else if (kemasan === "Hirup") {
            // Jika kemasan adalah Hirup, menambahkan pilihan ukuran obat Hirup

            var option1 = document.createElement("option");
            option1.value = "";
            option1.text = "Pilih Ukuran Hirup";
            ukuranDropdown.add(option1);

            var option2 = document.createElement("option");
            option2.value = "50ml";
            option2.text = "50ml";
            ukuranDropdown.add(option2);

            var option3 = document.createElement("option");
            option3.value = "100ml";
            option3.text = "100ml";
            ukuranDropdown.add(option3);

            var option4 = document.createElement("option");
            option4.value = "150ml";
            option4.text = "150ml";
            ukuranDropdown.add(option4);

            var option5 = document.createElement("option");
            option5.value = "200ml";
            option5.text = "200ml";
            ukuranDropdown.add(option5);
        }
    }

    // Mendengarkan perubahan pada dropdown kemasan
    var kemasanDropdown = document.getElementById("kemasan");
    kemasanDropdown.addEventListener("change", function() {
        var selectedKemasan = this.value;
        fillUkuranDropdown(selectedKemasan);
    });
</script>

<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainAppAsisten', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\PROJEK PPL\PPL-Klinik-Flora\resources\views/asisten/create_obat.blade.php ENDPATH**/ ?>