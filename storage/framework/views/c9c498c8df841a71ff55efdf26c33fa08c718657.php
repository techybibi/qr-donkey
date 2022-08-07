<?php $__env->startSection('content'); ?>
<div class="container-xxl flex-grow-1 container-p-y">

    <!-- Basic Layout -->
    <div class="row">

      <div class="col-xl">
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Create QR</h5>
          </div>
            <?php if(session()->has('message')): ?>
              <div class="alert alert-success text-center" role="alert"> <?php echo e(session()->get('message')); ?></div>
            <?php endif; ?>
          <div class="card-body">
            <form action="<?php echo e(route('qr.store')); ?>" method="POST" id="form_id" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
              <div class="mb-3">
                <label class="form-label" for="name">Name</label>
                <div class="input-group input-group-merge">
                  <input type="text" class="form-control" name="name" id="name-title" aria-describedby="basic-icon-default-name" required>
                </div>
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-danger"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
                <div class="mb-3">
                    <label class="form-label" for="name">Designation</label>
                    <div class="input-group input-group-merge">
                        <input type="text" class="form-control" name="designation" id="designation" aria-describedby="basic-icon-default-name" required>
                    </div>
                    <?php $__errorArgs = ['designation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-danger"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
              <div class="mb-3">
                <label class="form-label" for="basic-icon-default-email">Image</label>
                <div class="input-group input-group-merge">
                  <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                  <input type="file" id="image" name="image" class="form-control" aria-describedby="basic-icon-default-email2">
                </div>
                <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-danger"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="mb-3">
                <label class="form-label" for="company">Company</label>
                <div class="input-group input-group-merge">
                  <input type="text" class="form-control" name="company" id="company" >
                </div>
                <?php $__errorArgs = ['company'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-danger"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
                <div class="mb-3">
                    <label class="form-label" for="company">Email</label>
                    <div class="input-group input-group-merge">
                        <input type="text" class="form-control" name="email" id="email" >
                    </div>
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-danger"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
              <div class="mb-3">
                <label class="form-label" for="phone1">Phone 1</label>
                <div class="input-group input-group-merge">
                  <input type="text" class="form-control" name="phone1" id="phone1" >
                </div>
                <?php $__errorArgs = ['phone1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-danger"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="mb-3">
                <label class="form-label" for="phone2">Phone 2</label>
                <div class="input-group input-group-merge">
                  <input type="text" class="form-control" name="phone2" id="phone2" >
                </div>
                <?php $__errorArgs = ['phone2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-danger"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="mb-3">
                <label class="form-label" for="website_link">Website</label>
                <div class="input-group input-group-merge">
                  <input type="text" class="form-control" name="website_link" id="website" >
                </div>
                <?php $__errorArgs = ['website_link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-danger"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="mb-3">
                <label class="form-label" for="google_map_link">Google map link</label>
                <div class="input-group input-group-merge">
                  <input type="text" class="form-control" name="google_map_link" id="google_map_link" >
                </div>
                <?php $__errorArgs = ['google_map_link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-danger"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>


              <div class="mb-3">
                <label class="form-label" for="address">Address</label>
                <div class="input-group input-group-merge">

                  <textarea name="address" id="address"class="form-control">

                  </textarea>
                </div>
                <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-danger"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="mb-3">
                <label class="form-label" for="is_redirect">Is redirect</label>
                    <div class="form-check mt-3">
                        <input name="is_redirect" class="form-check-input" type="radio" value="1" id="yes">
                        <label class="form-check-label" for="yes"> Yes </label>
                      </div>
                    <div class="form-check mt-3">
                        <input name="is_redirect" class="form-check-input" type="radio" value="0" id="no" checked>
                        <label class="form-check-label" for="no"> No </label>
                      </div>
                <?php $__errorArgs = ['is_redirect'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-danger"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>

              <button type="submit" class="btn btn-primary">Create</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<script>
    CKEDITOR.replace( 'address' );
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\qr-donkey\resources\views/qr/create.blade.php ENDPATH**/ ?>