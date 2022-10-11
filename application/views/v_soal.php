<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>/assets/img/logo_pdf.ico">
<link rel="icon" type="image/png" href="<?php echo base_url();?>/assets/img/logo_pdf.ico">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

<title>Soal · PDF-Wareja</title>
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

    
</head>    
<body>
     <!--Navbar  -->
        <!-- navbar dark -->
<nav class="navbar  navbar-expand-lg navbar-light fixed-top bg-orange ">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url();?>">

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
                                <input type="text" class ="form-control iput input-round" name="search"  placeholder="Search...">
                                <i class="fa fa fa-search fa-lg fa-fw" aria-hidden="true"></i>
                            </div>                         
                            <input type="submit" name="submit" value="Submit" hidden> 
                        </form>                      
                    </ul>
                </div>
                <ul class="navbar-nav ml-auto d-flex align-items-center">
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>">HOME <span class="sr-only">(current)</span></a></li>
                        <li class="nav-item dropdown active"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CATEGORY</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item active bg-orange" href="<?php echo base_url();?>soal">Soal</a>
                                <a class="dropdown-item" href="<?php echo base_url();?>modul">Modul</a>
                                <a class="dropdown-item" href="<?php echo base_url();?>jm">Jurnal/Makalah</a>
                            </div>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>donate">DONATE <span class="fa fa-heart"></span> </a></li>
                        </li>
                <!-- </ul> -->
                <!-- <ul class=""> -->
                        <li class="nav-item active" >
                        <span class="nav-link" href="#">
                        <a class="btn btn-navy text-light btn-round "  href="<?php echo base_url('login');?>"><i class="fas fa-sign-in-alt"></i> LOGIN</a>  
                        </span>
                        </li>
                </ul>
            </div>
        </div>
        </nav><!-- Akhir Navbar -->

<main>
<!-- jumbotron with background image -->
<div class="jumbotron jumbotron-md jumbotron-fluid overlay overlay-blue" style=" background-image:url(<?php echo base_url();?>assets/img/demo/exam2.jpg); background-position: center center; background-size:cover; background-repeat: no-repeat; background-attachment: fixed;">
	<div class="container text-center text-white h-100">
		<h1 class="display-2"><strong>QUIZ-UTS <br> UAS-TUGAS</strong></h1>
		<h5 class="font-weight-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia blanditiis eligendi qui perspiciatis optio inventore nihil!</h5>
	</div>
	<p class="bottom-align-text-absolute">
		<!-- <span class="d-block text-center text-white">Made with <i class="fas fa-heart text-danger"></i> by WOW Themes</span> -->
	</p>
</div>    

<div class="container">
    <div class="row justify-content-center">
         <!-- Konten -->
         <div class="col-lg-8 "> 
                <!-- Foreach -->
                <?php
                    foreach ($data as $u)  :                          
                    ?>
                        <div class="col-lg-12 info-panel">
                            <div class="row">
                              <div class="col-lg-1">                                    
                              </div>  
                              <div class="col-lg-9">
                                  <a><h4 > <?php echo $u->judul_b; ?> </h4></a> 
                                  <p><?=$u->abstrak;?></p>                                          
                                      <label> <span class="fa fa-user-circle "></span> <?=$u->nama;?> | Category : <?=$u->nama_kat;?> | <span class="fa fa-eye"></span> <?=$u->viewed;?>  </label>
                                      <br>
                                      <label> <span class="fa fa-tags"></span> Tags : 
                                      <?php
                                          if (empty($u->tags)):
                                    ?>
                                    -
                                     <?php  else :  
                                          $tags = $u->tags;
                                          $tags_ar= explode(',',$tags);
                                          foreach ($tags_ar as $x=> $val) : ?>
                                          <a class="badge badge-pill badge-info hv" href="#"><?php echo $val ?> </a>
                                          <?php endforeach; endif;?>                                                                                         
                                    </label>
                                    <br>
                                      <a href="<?php echo base_url();?>home/download/<?php echo $u->id_berkas?>" class="btn btn-outline-navy btn-round"> <span class="fa fa-download"></span> Download</a>
                                      <a href="<?php echo base_url();?>viewer_pdf/tampil_c/<?php echo $u->id_berkas;?>/<?php echo url_title($u->judul_b);?>" class="btn btn-outline-orange btn-round "> <span class="fa fa-file"></span> Preview</a>
                              </div> 
                              </div>
                        </div>
                        <!-- End Foreach -->
                            <?php endforeach; ?>
                  <!-- END Foreach -->

                  <!-- Pagging -->
                  <!-- <div class="row justify-content-center">                                                                        
                        <nav aria-label="Page navigation text-center">
                                <ul class="pagination top ">
                                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                                </ul>
                        </nav>
                    </div> -->

              </div>
    </div>
</div>
        
</main>

            <!-- Footer -->
            <div class="mt-5"></div>
    <!-- Footer -->
<!-- light footer -->
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1440 126" style="enable-background:new 0 0 1440 126;" xml:space="preserve">
<path class="bg-orange" d="M685.6,38.8C418.7-11.1,170.2,9.9,0,30v96h1440V30C1252.7,52.2,1010,99.4,685.6,38.8z"></path>
</svg>
<footer class="bg-orange pb-5">
<div class="container">
	<div class="row">
		<div class="col-12 col-md">
			<i class="fas fa-copyright text-light"></i>
			<small class="d-block mt-3 mb-3 text-muted">© 2019 PDFWareja</small>
		</div>
		<div class="col-6 ">
			<h5 class="mb-4 text-light">About</h5>
			<p class="text-light text-justify">PDFWareja adalah sebuah web file-sharing yang berisi konten-konten seputar
                    perkuliahan. PDFWareja terdiri dari 2 kata, yaitu “PDF” dan “Wareja”. PDF adalah
                    singkatan dari “Portable Document Format”, sebuah format file yang dikembangkan
                    oleh Adobe yang bertujuan untuk menampilkan suatu dokumen, yang berisi teks dan
                    gambar.</p>
		</div>
		<div class="col-6 col-md">
			<h5 class="mb-4 text-light">Our Team</h5>
			<ul class="list-unstyled text-small">
                <li>
                    <a class="text-muted" data-toggle="collapse"  role="button" aria-expanded="false" aria-controls="collapseExample"href="#">Ivan</a>
                    <!-- <div class="collapse" id="collapseExample">
                            <ul class="text-small" style="list-style-type:none;">
                                    <li><a class="text-light" > <i class="fa fa-instagram"></i> Cool stuff</a></li>
                                    <li><a class="text-light" >Random feature</a></li>
                                    <li><a class="text-muted" >Team feature</a></li>
                                    <li><a class="text-muted" >Stuff for developers</a></li>
                                </ul>
                    </div>                 -->
                </li>
				<li><a class="text-muted" >Adit</a></li>
				<li><a class="text-muted" >Dedot</a></li>				
			</ul>
		</div>
	</div>
</div>
</footer>

<!-- Javascript -->
<script src="<?php echo base_url();?>assets/js/vendor/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>/assets/js/vendor/popper.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>/assets/js/vendor/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>/assets/js/functions.js" type="text/javascript"></script>

</body>
    
</html>

