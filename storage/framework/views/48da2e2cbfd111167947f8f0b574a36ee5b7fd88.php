<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Kelas</title>
    <!-- Hanun Shabrina XI IPA U5 -->
    <!-- Css only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>

  <body>
    <div class="container">
      <h1>Edit Data Kelas</h1>
    <div>
        <form action="<?php echo e(route('grade.update', $grade->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-2">
                <input type="text" name="grade" class="form-control" value="<?php echo e($grade->grade); ?>" placeholder="Nama Kelas">
            </div>
            <div class="mb-2">
                <input type="number" name="amount" class="form-control" value="<?php echo e($grade->amount); ?>" placeholder="Jumlah Siswa">
            </div>
            <div class="mb-2">
            <input type="reset" class="btn btn-secondary"> &nbsp; <input type="submit" value="Update" class="btn btn-primary">
        </div>
        </form>
    </div>
</div><?php /**PATH C:\xampp\htdocs\appsekolah\resources\views/grades/edit.blade.php ENDPATH**/ ?>