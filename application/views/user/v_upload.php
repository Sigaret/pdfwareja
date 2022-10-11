<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>/assets/img/logo_pdf.ico">
<link rel="icon" type="image/png" href="<?php echo base_url();?>/assets/img/logo_pdf.ico">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>Upload · PDF-Wareja</title>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script>
    
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
                            <a class="dropdown-item" href="#">Hello! <?php echo $user['nama'] ?></a>
                                    <a class="dropdown-item" href="<?php echo base_url();?>user/profile_user">Profile</a><hr>
                                    <a class="dropdown-item" href="<?php echo base_url('login/logout') ?>">Logout</a>                                    
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
                    <h1 class="text-center">ADD </h1>
                    <hr>
                    <?php if (validation_errors() || $er ): ?>               
                     <div class="alert alert-danger" role="alert">
                        <strong> <h3><center> Warning ! </center></h3>
                                <?php echo validation_errors();
                                      echo $er;
                                 ?>                                
                        </strong> 
                    </div>
                    <?php endif ;?>
                    <?php
                        echo form_open_multipart('user/upload_user');
                    ?>
                    <form action='' method="post">
                            <div class="form-group">
                              <label for="title">Title :</label>
                              <input type="text" name="judul" class="form-control ipcyan" id="title" placeholder="">
                            </div>
                            <div class="form-group">
                              <label for="Abstract">Abstract : </label>
                              <textarea class="form-control ipcyan"  name="abstrak" id="Abstract" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                              <label for="tags">Category :</label>
                              <select class="custom-select ipcyan" name="kategori">
                                  <option selected>Choose Catagory</option>
                                  <?php foreach ($kategori as $kat): ?>                                    
                                    <option value="<?php echo $kat->id_kategori?>"><?php echo $kat->nama_kat?></option>
                                  <?php endforeach; ?>
                                </select>
                               <!-- <input type="file" name="file" >                                        -->
                            </div>
                            <div class="form-group">
                                <label for="file">Your File :</label>
                                <div class="custom-file ">                                    
                                        <input type="file" name="file" accept="application/pdf" onchange="ValidateSingleInput(this);" class="custom-file-input form-control">                                       
                                        <label class="custom-file-label " for="customFile">Choose file</label>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label>Tags</label>
                                    <input type="text" name="skill" id="skill" class="form-control ipcyan" />
                                   </div>
                            <div class="text-center">
                                    <button type="submit" name="tambah" class="btn btn-navy text-light btn-lg btn-block w-100">SUBMIT</button>
                            </div>                                                                                    
                          </form>
                          <?php echo form_close(); ?>
                </div>
            </div>            
        </div>
    </div>
</main>

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
<!-- <script src="./assets/js/vendor/jquery.min.js" type="text/javascript"></script> -->
<script src="<?php echo base_url();?>assets/js/vendor/popper.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/vendor/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/functions.js" type="text/javascript"></script>

<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js" type="text/javascript"></script>

<!-- Tags Input -->
<script>
        $(document).ready(function(){
         
         $('#skill').tokenfield({
        //   autocomplete:{
        //    source: ['Numerical','Desaign','HTML','JQuery','Javascript','CSS','Laravel','CakePHP','Symfony','Yii 2','Phalcon','Zend','Slim','FuelPHP','PHPixie','Mysql'],
        //    delay:100
        //   },
          showAutocompleteOnFocus: true
         });
        
         $('#programmer_form').on('submit', function(event){
          event.preventDefault();
         if($.trim($('#skill').val()).length == 0)
          {
           alert("Please Enter Atleast one Skill");
           return false;
          }
          else
          {
           var form_data = $(this).serialize();
           $('#submit').attr("disabled","disabled");
           $.ajax({
            url:"insert.php",
            method:"POST",
            data:form_data,
            beforeSend:function(){
             $('#submit').val('Submitting...');
            },
            success:function(data){
             if(data != '')
             {
              $('#name').val('');
              $('#skill').tokenfield('setTokens',[]);
              $('#success_message').html(data);
              $('#submit').attr("disabled", false);
              $('#submit').val('Submit');
             }
            }
           });
           setInterval(function(){
            $('#success_message').html('');
           }, 5000);
          }
         });
         
        });
        </script>

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
<script>
    var _validFileExtensions = [".pdf"];    
function ValidateSingleInput(oInput) {
    if (oInput.type == "file") {
        var sFileName = oInput.value;
         if (sFileName.length > 0) {
            var blnValid = false;
            for (var j = 0; j < _validFileExtensions.length; j++) {
                var sCurExtension = _validFileExtensions[j];
                if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                    blnValid = true;
                    break;
                }
            }
             
            if (!blnValid) {
                alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _validFileExtensions.join(", "));
                oInput.value = "";
                return false;
            }
        }
    }
    return true;
}
</script>     

</body>
    
</html>

