<?php $__env->startSection('content'); ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">QR CODES</h4>
    <div class="card">
        <div class="card-header">My QR</div>
       <div class="card-body">
           <?php if(session()->has('message')): ?>
               <div class="alert alert-success text-center" role="alert"> <?php echo e(session()->get('message')); ?></div>
           <?php endif; ?>
           <div class="table-responsive text-nowrap">
               <div class="col-md-3 mb-2 mr-5" style=" margin-left: 10px;">

                   <a href="<?php echo e(route('qr.create')); ?>"><button type="button" class="btn btn-primary">Create</button></a>
               </div>
               <table class="table contact-table" id="qrTable">
                   <thead>
                   <tr>
                       <th>Name</th>
                       <th>Designation</th>
                       <th>Image</th>
                       <th>Company</th>
                       <th>Phnoe 1</th>
                       <th>Phnoe 2</th>
                       <th>Email</th>
                       <th>Website</th>
                       <th>Googlemap Link</th>
                       <th>Address</th>
                       <th>url</th>
                       <th>QR</th>
                       <th>Is redirect</th>
                       <th>Actions</th>
                   </tr>
                   </thead>
                   <tbody class="table-border-bottom-0">
                   <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <tr>
                           <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo e($contact->name); ?></strong></td>
                           <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo e($contact->designation); ?></strong></td>
                           <td>
                               <img src="<?php echo e(asset('/storage/contact-images/'.$contact->image)); ?>" width="50" height="50">
                           </td>
                           <td><?php echo e($contact->company); ?></td>
                           <td><?php echo e($contact->phone_1); ?></td>
                           <td><?php echo e($contact->phone_2); ?></td>
                           <td><?php echo e($contact->email); ?></td>
                           <td><?php echo e($contact->website_link); ?></td>
                           <td><?php echo e($contact->google_map_link); ?></td>
                           <td><?php echo $contact->address; ?></td>
                           <td>
                               <a href="<?php echo e(route('qr.show',$contact->unique_id)); ?>" target="_blank" class="btn btn-primary">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-browser-edge" viewBox="0 0 16 16">
                                       <path d="M9.482 9.341c-.069.062-.17.153-.17.309 0 .162.107.325.3.456.877.613 2.521.54 2.592.538h.002c.667 0 1.32-.18 1.894-.519A3.838 3.838 0 0 0 16 6.819c.018-1.316-.44-2.218-.666-2.664l-.04-.08C13.963 1.487 11.106 0 8 0A8 8 0 0 0 .473 5.29C1.488 4.048 3.183 3.262 5 3.262c2.83 0 5.01 1.885 5.01 4.797h-.004v.002c0 .338-.168.832-.487 1.244l.006-.006a.594.594 0 0 1-.043.041Z"/>
                                       <path d="M.01 7.753a8.137 8.137 0 0 0 .753 3.641 8 8 0 0 0 6.495 4.564 5.21 5.21 0 0 1-.785-.377h-.01l-.12-.075a5.45 5.45 0 0 1-1.56-1.463A5.543 5.543 0 0 1 6.81 5.8l.01-.004.025-.012c.208-.098.62-.292 1.167-.285.129.001.257.012.384.033a4.037 4.037 0 0 0-.993-.698l-.01-.005C6.348 4.282 5.199 4.263 5 4.263c-2.44 0-4.824 1.634-4.99 3.49Zm10.263 7.912c.088-.027.177-.054.265-.084-.102.032-.204.06-.307.086l.042-.002Z"/>
                                       <path d="M10.228 15.667a5.21 5.21 0 0 0 .303-.086l.082-.025a8.019 8.019 0 0 0 4.162-3.3.25.25 0 0 0-.331-.35c-.215.112-.436.21-.663.294a6.367 6.367 0 0 1-2.243.4c-2.957 0-5.532-2.031-5.532-4.644.002-.135.017-.268.046-.399a4.543 4.543 0 0 0-.46 5.898l.003.005c.315.441.707.821 1.158 1.121h.003l.144.09c.877.55 1.721 1.078 3.328.996Z"/>
                                   </svg>
                               </a>
                           </td>
                           <td><img src="<?php echo e(asset($contact->qr)); ?>" width="50" height="50"></td>
                           <td>
                               <?php if($contact->is_redirect == 1): ?>
                                   <span class="badge bg-success">WEBSITE</span>
                               <?php else: ?>
                                   <span class="badge bg-danger">CONTACT</span>
                               <?php endif; ?>
                           </td>
                           <td class="text-center">
                               <div class="dropdown">
                                   <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                       <i class="bx bx-dots-vertical-rounded"></i>
                                   </button>
                                   <div class="dropdown-menu">
                                       <a class="dropdown-item" href="<?php echo e(route('qr.edit',$contact->unique_id)); ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                       <a class="dropdown-item" href="<?php echo e(route('qr.delete',$contact->unique_id)); ?>"><i class="bx bx-trash me-1"></i> Delete</a>
                                   </div>
                               </div>
                           </td>
                       </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   </tbody>
               </table>
           </div>
       </div>
   </div>
</div>

<script>
    $(document).ready( function () {
        $('#qrTable').DataTable({
            "responsive": true,
        });
    } );
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\qr-donkey\resources\views/qr/index.blade.php ENDPATH**/ ?>