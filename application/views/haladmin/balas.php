<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kontak Forum</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.<?php echo base_url();?>assets/js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">Selamat Datang Admin <br>Objek Wisata Kabupaten Karangasem</div>
   

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Objek Wisata Kabupaten Karangasem</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php echo base_url()?>index.php/admin">Home</a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url()?>index.php/c_kontak_forum">Kontak Forum</a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url()?>index.php/data_lokasi">Lokasi</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>index.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">Objek Wisata Kabupaten Karangasem</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>
                            <strong>BALI</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>


        <section class="content">
      <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>forum</strong>
                    </h2>
                    <hr>

                                    
                    <br></br>                              
                    <form role="form" action="" method="POST">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label>Name</label>
                                <input name="nama" type="text" class="form-control">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Email Address</label>
                                <input name="email" type="email" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea name="ket" class="form-control" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      <!-- /.row -->
    </section>

                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            
                                        </div>
                                        <div class="modal-body">

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <div class="box-body pad">
                                         <textarea id="nama" name="nama" class="form-control" type="text" rows="1" cols="73" required></textarea>
                                         </div>
                                        </div><div class="form-group">
                                            <label>Email</label>
                                            <div class="box-body pad">
                                         <textarea id="email" name="email" class="form-control" type="text" rows="1" cols="73" required></textarea>
                                         </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Ket</label>
                                            <div class="box-body pad">
                                         <textarea id="ket" name="ket" class="form-control" type="text" rows="1" cols="73" required></textarea>
                                         </div>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->

                                    </div>
