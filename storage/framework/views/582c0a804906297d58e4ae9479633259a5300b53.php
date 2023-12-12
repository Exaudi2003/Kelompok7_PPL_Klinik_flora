

<?php $__env->startSection('content'); ?>

  <!--breadcrumb-->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Rekam Medis</li>
            <li class="breadcrumb-item active">Rekam Medis Pasien</li>
            <li class="breadcrumb-item active">Tambah</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

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
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header shadow mb-3"><?php echo e(__('Tambahkan Medical Record')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('mRecord.store')); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('POST'); ?>

                        <input type="text" hidden name="idp" value="<?php echo e($data->id); ?>">
                        

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Nama Pasien')); ?></label>
                            <div class="col-md-6 mb-3">
                                <input type="text" name='name' value="<?php echo e($data['name']); ?>" placeholder="Nama Baru..." id="name" readonly class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                                <?php $__errorArgs = ['name'];
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
                            <label for="gender" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Jenis Kelamin')); ?></label>
                            <div class="col-md-6 mb-3">
                                <input type="text" readonly name='gender' value="<?php echo e($data['gender']); ?>" id="gender" class="form-control <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                                <?php $__errorArgs = ['gender'];
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
                            <label for="phone_number" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Nomor Telepon')); ?></label>
                            <div class="col-md-6 mb-3">
                                <input id="phone_number" readonly type="text" name="phone_number" value="<?php echo e($data['phone_number']); ?>" placeholder="Nomor Baru..." class="form-control <?php $__errorArgs = ['phone_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                <?php $__errorArgs = ['phone_number'];
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
                            <label for="address" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Alamat')); ?></label>
                            <div class="col-md-6 mb-3">
                                <input id="address" readonly type="text" value="<?php echo e($data['address']); ?>" name="address" placeholder="Alamat Baru..." class="form-control <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required autocomplete="address">
                                <?php $__errorArgs = ['address'];
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
                            <label for="keluhan" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Tinggi Badan')); ?></label>
                            <div class="col-md-6 mb-3">
                                <input id="tinggi" placeholder="" type="number" class=" form-control <?php $__errorArgs = ['tinggi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="tinggi" value="<?php echo e(old('tinggi')); ?>" autocomplete="tinggi">
                                <?php $__errorArgs = ['tinggi'];
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
                            <label for="keluhan" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Berat Badan')); ?></label>
                            <div class="col-md-6 mb-3">
                                <input id="berat" placeholder="" type="number" class=" form-control <?php $__errorArgs = ['berat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="berat" value="<?php echo e(old('berat')); ?>" autocomplete="berat">
                                <?php $__errorArgs = ['berat'];
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
                            <label for="keluhan" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Keluhan')); ?></label>
                            <div class="col-md-6 mb-3">
                                <textarea id="keluhan" type="text" class="form-control <?php $__errorArgs = ['keluhan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="keluhan" value="<?php echo e(old('keterangan')); ?>" required autocomplete="keluhan"></textarea>
                                <?php $__errorArgs = ['keluhan'];
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
                            <label for="diagnosa" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Diagnosa')); ?></label>
                            <div class="col-md-6 mb-3">
                                <textarea id="diagnosa" type="text" class="form-control <?php $__errorArgs = ['diagnosa'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="diagnosa" value="<?php echo e(old('diagnosa')); ?>" required autocomplete="diagnosa"></textarea>
                                <?php $__errorArgs = ['diagnosa'];
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
                            <label for="jenis" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Kategori')); ?></label>
                            <div class="col-md-6 mb-3">
                                <select id="jenis" class="form-control <?php $__errorArgs = ['keterangan_obat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="jenis_penyakit" required>
                                    <option selected disabled value=""> Pilih Kategori </option>
                                    <option value="Ringan">Ringan</option>
                                    <option value="Sedang">Sedang</option>
                                    <option value="Berat">Berat</option>
                                </select>
                                <?php $__errorArgs = ['keterangan_obat'];
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

                        <div class="border-top mt-1"></div>
                        <div class="border-top mt-1"></div>
                        <div class="border-top mt-1"></div>
                        

                        <div class="form-group row mt-3">
                            <label for="obatSelect" class="col-md-1 col-form-label text-md-right">Pilih Obat:</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <select id="obatSelect1" class="col-md-6 form-control select2 <?php $__errorArgs = ['obatSelect1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="obat" required>
                                        <option selected disabled value="">Pilih obat</option>
                        
                                        <?php $__currentLoopData = $obat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($item->jumlah > 0): ?>
                                                <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama_obat); ?> (<?php echo e($item->ukuran); ?>)</option>
                                            <?php else: ?>
                                                <option value="<?php echo e($item->id); ?>" disabled><?php echo e($item->nama_obat); ?> (<?php echo e($item->ukuran); ?>)</option>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                   
                                        <input id="jumlah1" placeholder="jumlah" type="number" class="ml-3 form-control <?php $__errorArgs = ['jumlah'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="jumlah_dipakai" value="<?php echo e(old('jumlah')); ?>" required autocomplete="jumlah">
                                    
                                </div>
                                <?php $__errorArgs = ['obatSelect1'];
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
                            <div class="col-md-2">
                                <select id="aturan_pakai" class="form-control <?php $__errorArgs = ['aturan_pakai'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="aturan" required>
                                    <option selected disabled value=""> Aturan </option>
                                    <option value="1x1">1x1</option>
                                    <option value="2x1">2x1</option>
                                    <option value="3x1">3x1</option>
                                    <option value="1x2">1x2</option>
                                    <option value="2x2">2x2</option>
                                    <option value="3x2">3x2</option>
                                </select>
                                <?php $__errorArgs = ['aturan_pakai'];
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
                            <div class="col-md-2">
                                <select id="keterangan_obat" class="form-control <?php $__errorArgs = ['keterangan_obat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="keterangan" required>
                                    <option selected disabled value=""> Keterangan </option>
                                    <option value="Setelah Makan">Setelah Makan</option>
                                    <option value="Sebelum Makan">Sebelum Makan</option>
                                </select>
                                <?php $__errorArgs = ['keterangan_obat'];
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
                            <label for="obatSelect2" class="col-md-0 col-form-label text-md-right"></label>
                            <div class="col-md-6">
                                <p>jika ingin menambahkan lebih dari satu obat<a href="#" class="ml-2" id="tambahObatLink" class="font-italic">Klik Disini</a></p>
                            </div>
                        </div>
                        
                        <div id="formObat" style="display: none;" >
                            

                            <div class="form-group row mt-3">
                                <label for="obatSelect2" class="col-md-1 col-form-label text-md-right"></label>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <select id="obatSelect2" class="col-md-6 form-control select2 <?php $__errorArgs = ['obatSelect1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="obat2">
                                            <option selected disabled value="">Pilih obat</option>
                            
                                            <?php $__currentLoopData = $obat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($item->jumlah > 0): ?>
                                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama_obat); ?> (<?php echo e($item->ukuran); ?>)</option>
                                                <?php else: ?>
                                                    <option value="<?php echo e($item->id); ?>" disabled><?php echo e($item->nama_obat); ?> (<?php echo e($item->ukuran); ?>)</option>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                       
                                            <input id="jumlah2" placeholder="jumlah" type="number" class="ml-3 form-control <?php $__errorArgs = ['jumlah2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="jumlah_dipakai2" value="<?php echo e(old('jumlah2')); ?>" autocomplete="jumlah2">
                                        
                                    </div>
                                    <?php $__errorArgs = ['obatSelect2'];
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
                                <div class="col-md-2">
                                    <select id="aturan_pakai2" class="form-control <?php $__errorArgs = ['aturan_pakai2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="aturan2">
                                        <option selected disabled value=""> Aturan </option>
                                        <option value="1x1">1x1</option>
                                        <option value="2x1">2x1</option>
                                        <option value="3x1">3x1</option>
                                        <option value="1x2">1x2</option>
                                        <option value="2x2">2x2</option>
                                        <option value="3x2">3x2</option>
                                    </select>
                                    <?php $__errorArgs = ['aturan_pakai'];
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

                                <div class="col-md-2">
                                    <select id="keterangan_obat" class="form-control <?php $__errorArgs = ['keterangan_obat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="keterangan2">
                                        <option selected disabled value=""> Keterangan </option>
                                        <option value="Setelah Makan">Setelah Makan</option>
                                        <option value="Sebelum Makan">Sebelum Makan</option>
                                    </select>
                                    <?php $__errorArgs = ['keterangan_obat'];
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
                        

                            <div class="form-group row mt-3">
                                <label for="obatSelect3" class="col-md-1 col-form-label text-md-right"></label>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <select id="obatSelect3" class="col-md-6 form-control select2 <?php $__errorArgs = ['obatSelect1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="obat3" >
                                            <option selected disabled value="">Pilih obat</option>
                            
                                            <?php $__currentLoopData = $obat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($item->jumlah > 0): ?>
                                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama_obat); ?> (<?php echo e($item->ukuran); ?>)</option>
                                                <?php else: ?>
                                                    <option value="<?php echo e($item->id); ?>" disabled><?php echo e($item->nama_obat); ?> (<?php echo e($item->ukuran); ?>)</option>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                       
                                            <input id="jumlah2" placeholder="jumlah" type="number" class="ml-3 form-control <?php $__errorArgs = ['jumlah2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="jumlah_dipakai3" value="<?php echo e(old('jumlah2')); ?>" autocomplete="jumlah2">
                                        
                                    </div>
                                    <?php $__errorArgs = ['obatSelect3'];
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
                                <div class="col-md-2">
                                    <select id="aturan_pakai3" class="form-control <?php $__errorArgs = ['aturan_pakai2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="aturan3">
                                        <option selected disabled value=""> Aturan </option>
                                        <option value="1x1">1x1</option>
                                        <option value="2x1">2x1</option>
                                        <option value="3x1">3x1</option>
                                        <option value="1x2">1x2</option>
                                        <option value="2x2">2x2</option>
                                        <option value="3x2">3x2</option>
                                    </select>
                                    <?php $__errorArgs = ['aturan_pakai'];
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

                                <div class="col-md-2">
                                    <select id="keterangan_obat" class="form-control <?php $__errorArgs = ['keterangan_obat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="keterangan3">
                                        <option selected disabled value=""> Keterangan </option>
                                        <option value="Setelah Makan">Setelah Makan</option>
                                        <option value="Sebelum Makan">Sebelum Makan</option>
                                    </select>
                                    <?php $__errorArgs = ['keterangan_obat'];
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
                        

                            <div class="form-group row mt-3">
                                <label for="obatSelect4" class="col-md-1 col-form-label text-md-right"></label>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <select id="obatSelect4" class="col-md-6 form-control select2 <?php $__errorArgs = ['obatSelect4'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="obat4" >
                                            <option selected disabled value="">Pilih obat</option>
                            
                                            <?php $__currentLoopData = $obat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($item->jumlah > 0): ?>
                                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama_obat); ?> (<?php echo e($item->ukuran); ?>)</option>
                                                <?php else: ?>
                                                    <option value="<?php echo e($item->id); ?>" disabled><?php echo e($item->nama_obat); ?> (<?php echo e($item->ukuran); ?>)</option>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                       
                                            <input id="jumlah2" placeholder="jumlah" type="number" class="ml-3 form-control <?php $__errorArgs = ['jumlah4'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="jumlah_dipakai4" value="<?php echo e(old('jumlah4')); ?>" autocomplete="jumlah4">
                                        
                                    </div>
                                    <?php $__errorArgs = ['obatSelect4'];
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
                                <div class="col-md-2">
                                    <select id="aturan_pakai4" class="form-control <?php $__errorArgs = ['aturan_pakai4'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="aturan4">
                                        <option selected disabled value=""> Aturan </option>
                                        <option value="1x1">1x1</option>
                                        <option value="2x1">2x1</option>
                                        <option value="3x1">3x1</option>
                                        <option value="1x2">1x2</option>
                                        <option value="2x2">2x2</option>
                                        <option value="3x2">3x2</option>
                                    </select>
                                    <?php $__errorArgs = ['aturan_pakai4'];
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

                                <div class="col-md-2">
                                    <select id="keterangan_obat" class="form-control <?php $__errorArgs = ['keterangan_obat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="keterangan4">
                                        <option selected disabled value=""> Keterangan </option>
                                        <option value="Setelah Makan">Setelah Makan</option>
                                        <option value="Sebelum Makan">Sebelum Makan</option>
                                    </select>
                                    <?php $__errorArgs = ['keterangan_obat'];
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


                            <div class="form-group row mt-3">
                                <label for="obatSelect5" class="col-md-1 col-form-label text-md-right"></label>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <select id="obatSelect5" class="col-md-6 form-control select2 <?php $__errorArgs = ['obatSelect5'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="obat5">
                                            <option selected disabled value="">Pilih obat</option>
                            
                                            <?php $__currentLoopData = $obat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($item->jumlah > 0): ?>
                                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama_obat); ?> (<?php echo e($item->ukuran); ?>)</option>
                                                <?php else: ?>
                                                    <option value="<?php echo e($item->id); ?>" disabled><?php echo e($item->nama_obat); ?> (<?php echo e($item->ukuran); ?>)</option>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                       
                                            <input id="jumlah5" placeholder="jumlah" type="number" class="ml-3 form-control <?php $__errorArgs = ['jumlah5'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="jumlah_dipakai5" value="<?php echo e(old('jumlah5')); ?>"  autocomplete="jumlah5">
                                        
                                    </div>
                                    <?php $__errorArgs = ['obatSelect4'];
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
                                <div class="col-md-2">
                                    <select id="aturan_pakai5" class="form-control <?php $__errorArgs = ['aturan_pakai5'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="aturan5">
                                        <option selected disabled value=""> Aturan </option>
                                        <option value="1x1">1x1</option>
                                        <option value="2x1">2x1</option>
                                        <option value="3x1">3x1</option>
                                        <option value="1x2">1x2</option>
                                        <option value="2x2">2x2</option>
                                        <option value="3x2">3x2</option>
                                    </select>
                                    <?php $__errorArgs = ['aturan_pakai5'];
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

                                <div class="col-md-2">
                                    <select id="keterangan_obat" class="form-control <?php $__errorArgs = ['keterangan_obat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="keterangan5">
                                        <option selected disabled value=""> Keterangan </option>
                                        <option value="Setelah Makan">Setelah Makan</option>
                                        <option value="Sebelum Makan">Sebelum Makan</option>
                                    </select>
                                    <?php $__errorArgs = ['keterangan_obat'];
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

                        </div>
                            
                          </div>


                        <div class="form-group row mb-3">
                            <div class="col-md-6 offset-md-4">
                                

                                <button type="submit" class="btn btn-success" id="saveData">
                                    <?php echo e(__('Simpan')); ?>

                                </button>

                                <div id="medicineList"></div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
$(document).ready(function() {
    $('.select2').select2();

    // Tangkap perubahan pada input pencarian
    $('.select2').on('select2:open', function(e) {
        $(this).data('select2').dropdown.$search.attr('placeholder', 'Cari obat...');
    });
});
</script>

<?php $__env->startSection('scripts'); ?>
<script>
    $(document).ready(function() {
      $('.select2').select2();
  
      // Tangkap perubahan pada input pencarian
      $('.select2').on('select2:open', function(e) {
          $(this).data('select2').$dropdown.find('.select2-search__field').attr('placeholder', 'Cari obat...');
      });
  
      var formObat = document.getElementById("formObat");
      var tambahObatLink = document.getElementById("tambahObatLink");
      var isFormObatVisible = false;
  
      tambahObatLink.addEventListener("click", function() {
        if (isFormObatVisible) {
          formObat.style.display = "none";
          isFormObatVisible = false;
        } else {
          formObat.style.display = "block";
          isFormObatVisible = true;
        }
      });
    });
  </script>
<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>







                        

                                                        


<?php echo $__env->make('layouts.mainApp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\PROJEK PPL\PPL-Klinik-Flora\resources\views/dokter/add_mRecord.blade.php ENDPATH**/ ?>