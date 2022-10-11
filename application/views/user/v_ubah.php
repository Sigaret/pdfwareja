<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>/assets/img/logo_pdf.ico">
<link rel="icon" type="image/png" href="<?php echo base_url();?>/assets/img/logo_pdf.ico">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>Update · PDF-Wareja</title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>
   
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,600,700" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet"> 
    

 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<!-- CSS -->
<link href="<?php echo base_url();?>assets/css/main.css" rel="stylesheet"/>
<link href="<?php echo base_url(); ?>assets/css/vendor/aos.css" rel="stylesheet"/>
<link href="<?php echo base_url();?>assets/css/mycss.css" rel="stylesheet"/>

<!-- Tags Input Plugin -->
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/css/tagsinput.css" rel="stylesheet" type="text/css">
    
</head>    
<body>
     <!--Navbar  -->
        <!-- navbar dark -->
<nav class="navbar  navbar-expand-lg navbar-light fixed-top bg-orange ">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url();?>user/home_user">

                <i class="fas fa-file mr-2"></i><strong>PDF</strong>Wareja</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown-1" aria-controls="navbarNavDropdown-1" aria-expanded="false" aria-label="Toggle navigation" >
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown-1">
                <div class="col-lg-5">
                    <ul class="navbar-nav md-12 .mr-auto">                                                        
                        <!-- <input type="text" class="form-control input-round"  id="search"placeholder="Search"> fa fa-search-->
                        <form action="<?php echo base_url('search/hasil')?>" action="GET">
                            <div class="inputWithIcon">
                                <input type="text" class ="form-control iput-user input-round" name="search"  placeholder="Search...">
                                <i class="fa fa fa-search fa-lg fa-fw" aria-hidden="true"></i>
                            </div>                         
                            <input type="submit" name="submit" value="Submit" hidden> 
                        </form>      
                                              
                    </ul>
                </div>
                <ul class="navbar-nav ml-auto d-flex align-items-center">
                        <li class="nav-item "><a class="nav-link" href="<?php echo base_url();?>user/home_user">HOME <span class="sr-only">(current)</span></a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CATEGORY</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="<?php echo base_url();?>user/soal_user">Soal</a>
                                <a class="dropdown-item" href="<?php echo base_url();?>user/modul_user">Modul</a>
                                <a class="dropdown-item" href="<?php echo base_url();?>user/jm_user">Jurnal/Makalah</a>
                            </div>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>user/donate_user">DONATE <span class="fa fa-heart"></span> </a></li>
                            <a class="btn btn-outline-greenteal btn-round active" href="<?php echo base_url();?>user/upload_user"><i class="fas fa-upload"></i> Upload</a>  
                            
                        </li>
                <!-- </ul> -->
                <!-- <ul class=""> -->
                        <li class="nav-item  dropdown" >
                        <a class="nav-link dropdown" id="navbarDropdownMenuLink" href="#"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="iconbox iconsmall rounded-circle bg-dark text-white border-0"><i class="fa fa-user-circle"></i></span> 
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="<?php echo base_url();?>user/profile_user">Profile</a><hr>
                                    <a class="dropdown-item" href="#">Logout</a>                                    
                                </div>
                        </a>
                        </li>
                </ul>
            </div>
        </div>
        </nav><!-- Akhir Navbar -->

<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="box-upload">
                    <h1 class="text-center">UPDATE </h1>
                    <hr>
                    <?php
                        echo form_open_multipart('user/profile_user/updateSave');
                    ?>
                    <form action='' method="post">
                            <?php
                                foreach ($data as $u):
                                 ?>
                            <input name="id" class="input-huge" type="hidden" value="<?php echo $u->id_berkas?>">
                            <div class="form-group">
                              <label for="title">Title :</label>
                              <input type="text" name="judul" class="form-control ipcyan" id="title" value="<?php echo $u->judul_b?>">
                            </div>
                            <div class="form-group">
                              <label for="Abstract">Abstract : </label>
                              <textarea class="form-control ipcyan"  name="abstrak" value="" id="Abstract" rows="3"><?php echo $u->abstrak?></textarea>
                            </div>
                            <div class="form-group">
                              <label for="tags">Category :</label>
                              <select class="custom-select ipcyan" name="kategori">
                                  <option selected>Choose Catagory</option>                                  
                                  <?php foreach ($kategori as $kat): ?>    
                                    <?php if($kat->id_kategori == $u->id_kategori): ?>                                
                                    <option value="<?php echo $kat->id_kategori?>" selected><?php echo $kat->nama_kat?></option>
                                    <?php else : ?>
                                        <option value="<?php echo $kat->id_kategori?>" selected><?php echo $kat->nama_kat?></option>
                                    <?php endif;?>
                                  <?php endforeach; ?>
                                </select>
                               <!-- <input type="file" name="file" >                                        -->
                            </div>
                            <div class="text-center">
                                    <button type="submit" name="ubah" class="btn btn-navy text-light btn-lg btn-block w-100">SUBMIT</button>
                            </div>
                            <?php endforeach; ?>                                                                                    
                          </form>
                          <?php echo form_close(); ?>
                </div>
            </div>            
        </div>
    </div>
</main>

    <!-- minimal footer -->
<footer class="bg-orange pb-5 pt-4 top sticky">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-12">			
                    <span class="d-block mt-3 text-black">©	2019 Anchor Bootstrap UI Kit, made with <i class="fas fa-heart text-danger"></i> by <a target="_blank" href="https://www.wowthemes.net">WowThemes.net</a>. 
                    </span>
                </div>
            </div>
        </div>
        </footer>
            <!-- Akhir Footer -->

<!-- Javascript -->
<!-- <script src="./assets/js/vendor/jquery.min.js" type="text/javascript"></script> -->
<script src="<?php echo base_url();?>assets/js/vendor/popper.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/vendor/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/functions.js" type="text/javascript"></script>

<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js" type="text/javascript"></script>

<!-- Tags Input -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
<script src="<?php echo base_url();?>assets/js/tags/tagsinput.js"></script>

<!-- choose file -->
<script>
        bsCustomFileInput.init()
  
        var btn = document.getElementById('btnResetForm')
        var form = document.querySelector('form')
        btn.addEventListener('click', function() {
          form.reset()
        })
      </script>
<script>
        var tags = $('#select').val();

</script>      

</body>
    
</html>

