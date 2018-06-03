<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <title>Ecolevtivo</title>
   <!-- =============== VENDOR STYLES ===============-->
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
               <a href="<?=site_url('login')?>" >
                  <img class="block-center rounded" src="" alt="Logo">
               </a>
            </div>
            <div class="card-body">
               <p class="text-center py-2">Recuperar contraseña</p>
               <form>
                  <p class="text-center">En tu correo recibirás las indicaciones para reestrablecer la contraseña</p>
                  <div class="form-group">
                     <label class="text-muted" for="resetInputEmail1">Correo eléctronico</label>
                     <div class="input-group with-focus">
                        <input class="form-control border-right-0" id="resetInputEmail1" type="email" placeholder="ejemplo@ecolectivo.cl" autocomplete="off">
                        <div class="input-group-append">
                           <span class="input-group-text fa fa-envelope text-muted bg-transparent border-left-0"></span>
                        </div>
                     </div>
                  </div>
                  <button class="btn btn-danger btn-block" type="submit">Recuperar</button>
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
            <span>Transporte innova</span>
         </div>
      </div>
   </div>
   <!-- =============== VENDOR SCRIPTS ===============-->
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