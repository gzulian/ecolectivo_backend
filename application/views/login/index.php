<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <title>Ecolectivo</title>
   <!-- =============== app/VENDOR STYLES ===============-->
   <!-- FONT AWESOME-->
   <link rel="stylesheet" href="<?=base_url('resource/template/app/vendor/font-awesome/css/font-awesome.css')?>">
   <!-- SIMPLE LINE ICONS-->
   <link rel="stylesheet" href="<?=base_url('resource/template/app/vendor/simple-line-icons/css/simple-line-icons.css')?>">
   <!-- =============== BOOTSTRAP STYLES ===============-->
   <link rel="stylesheet" href="<?=base_url('resource/template/app/css/bootstrap.css')?>" id="bscss">
   <!-- =============== APP STYLES ===============-->
   <link rel="stylesheet" href="<?=base_url('resource/template/app/css/app.css')?>" id="maincss">
</head>

<body>
   <div class="wrapper">
      <div class="block-center mt-4 wd-xl">
         <!-- START card-->
         <div class="card card-flat">
            <div class="card-header text-center bg-dark">
               <a href="#">
               </a>
            </div>
            <div class="card-body">
               <p class="text-center py-2">.</p>
               <form class="mb-3" action="<?=site_url('admin/index')?>" id="loginForm" novalidate>
                  <div class="form-group">
                     <div class="input-group with-focus">
                        <input class="form-control border-right-0" id="user" type="text" name="user" placeholder="Su nombre de usuario" autocomplete="off" required>
                        <div class="input-group-append">
                           <span class="input-group-text fa fa-user text-muted bg-transparent border-left-0"></span>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="input-group with-focus">
                        <input class="form-control border-right-0" id="pass" type="password" name="pass" placeholder="Su contraseña" required>
                        <div class="input-group-append">
                           <span class="input-group-text fa fa-lock text-muted bg-transparent border-left-0"></span>
                        </div>
                     </div>
                  </div>
                  <div class="clearfix">
                     <div class="checkbox c-checkbox float-left mt-0">
                     </div>
                     <div class="float-right"><a class="text-muted" href="<?=site_url('login/recover')?>">¿Olvidó su contraseña?</a>
                     </div>
                  </div>
                  <button class="btn btn-block btn-primary mt-3" type="submit">Conectar</button>
               </form>
            </div>
         </div>
         <!-- END card-->
         <div class="p-3 text-center">
            <span class="mr-2">&copy;</span>
            <span>2018</span>
            <span class="mr-2">-</span>
            <span>Ecolectivo</span>
            <br>
            <span>Transporte Innova</span>
         </div>
      </div>
   </div>
   <!-- =============== app/VENDOR SCRIPTS ===============-->
   <!-- MODERNIZR-->
   <script src="<?=base_url('resource/template/app/vendor/modernizr/modernizr.custom.js')?>"></script>
   <!-- JQUERY-->
   <script src="<?=base_url('resource/template/app/vendor/jquery/dist/jquery.js')?>"></script>
   <!-- BOOTSTRAP-->
   <script src="<?=base_url('resource/template/app/vendor/bootstrap/dist/js/bootstrap.js')?>"></script>
   <!-- STORAGE API-->
   <script src="<?=base_url('resource/template/app/vendor/js-storage/js.storage.js')?>"></script>
   <!-- PARSLEY-->
   <script src="<?=base_url('resource/template/app/vendor/parsleyjs/dist/parsley.js')?>"></script>
   <!-- =============== APP SCRIPTS ===============-->
   <script src="<?=base_url('resource/template/app/js/app.js')?>"></script>
</body>

</html>