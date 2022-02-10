<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?=base_url('css/bootstrap.min.css');?>">
</head>
<body>  
<div class="container">

<div class="panel panel-default" style="margin-top:100px;" >
    <div class="panel-body">
        <div class="col-md-6">
            <h3>Halaman Login</h3>
            <p>Silahkan masuk dengan akun anda !</p>
            <form method="POST">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="txtUser" class="form-control" placeholder="Masukan username" autofocus autocomplete="no"/>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="txtPass" class="form-control" placeholder="Masukan password"/>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-block">Login</button>
                </div>
            </form>
        </div>
        <div class="col-md-6" style="background-image:url('/hotel.jpg'); height:300px;background-size:auto;background-repeat:no-repeat">

        </div>
    </div>
</div>

</div>
</body>
</html>
