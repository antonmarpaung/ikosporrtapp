<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<div class="card card-register col-md-3 ms-auto mt-4" style="margin-right:530px;">
        <div class="card-header">
        <a href="<?php echo site_url('dashboard/admin')?>"><i class="fa-solid fa-backward fa-lg"></i> Kembali</div></a>

            <div class="card-body">
                <?php foreach ($admin as $a) { ?>

              <form action="<?php echo site_url('dashboard/admin_update')?>" method="post" enctype="multipart/form-data">
               

                <br>

                <div class="form-group">
                    <label for="adminnama">Nama Admin</label>
                    <input type="text" class="form-control" id="Admin Nama" name="admin_nama" value="<?php echo $a->admin_nama ?>" required>
                </div>

                <br>

                <div class="form-group">
                    <label for="usernameadmin">Username Admin</label>
                    <input type="text" class="form-control" id="username_admin" name="username_admin" value="<?php echo $a->username_admin ?>" required>

                </div>
  <div class="form-group">
                    <input type="hidden" class="form-control" id="" name="id_admin" value="<?php echo $a->id_admin ?>">
                </div>
                <br>

                <div class="form-group">
                    <label for="passwordadmin">Password Admin</label>
                    <input type="text" class="form-control" id="password admin" name="password_admin" value="<?php echo $a->password_admin ?>" required>

                </div>

                <br>

                <div class="form-group">
                <input type="submit" class="btn btn-warning" value="Edit">
                <input type="reset" class="btn btn-light" value="Batal"></a>
                </div>
              </form>
         <?php } ?>
            </div>
        </div>
        </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>