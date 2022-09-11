<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Kelas di <?php echo e(config('app.name')); ?></title>
    <!-- Css only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>

  <body>
    <div class="container">
    <h1>Daftar Kelas di <?php echo e(config('app.name')); ?></h1>
    <a href="grade/create" class="btn btn-primary">Tambah Kelas</a>
    <table class="table table bordered table-striped">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Kelas</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Edit | Hapus</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $no => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e(++$no); ?></td>
                <td><?php echo e($item->grade); ?></td>
                <td><?php echo e($item->amount); ?></td> 
                <td>
                  <form action="<?php echo e(route('grade.destroy' , $item->id)); ?>" onsubmit="return confirm('Apakah anda yakin ?')" method="POST">
                      
                      <a class="btn btn-primary" href="<?php echo e(route('grade.edit' , $item->id)); ?>">Edit</a>
                      <?php echo csrf_field(); ?>
                      <?php echo method_field('DELETE'); ?>
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                  </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
      </table>
  </div>  
    
    <!-- JavaScript Bundle with popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">.</script>
  </body>
</html><?php /**PATH C:\xampp\htdocs\appsekolah\resources\views/grades/index.blade.php ENDPATH**/ ?>