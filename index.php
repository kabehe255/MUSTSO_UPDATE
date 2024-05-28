<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MustsoUpdate-Group 5</title>
        <link rel="icon" type="image/x-icon" href="./asset/image/images.png" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
       
        <!-- Font Awesome icons (free version)-->
       <style>
        body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
       </style>
    </head>
    
    <body >
        <!-- Navigation-->
  
  <?php include("navbars/navbar.php") ?>
  
        
       
        <!-- Header-->
        <header class="masthead text-center text-white" style="background:black" id="home">
            <div class="masthead-content">
                <div class="container px-5">
                    <h1 class="masthead-heading mb-0">welcome to mustso</h1>
                    <h2 class="masthead-subheading mb-0">update platform</h2>
                    <a class="btn btn-light btn-xl rounded-pill mt-5 " href="components/platform.php">get started</a>
                </div>
            </div>
            <div class="bg-circle-1 bg-circle"></div>
            <div class="bg-circle-2 bg-circle"></div>
            <div class="bg-circle-3 bg-circle"></div>
            <div class="bg-circle-4 bg-circle"></div>
        </header>
      
        <section id="about" >
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="p-5"><img class="img-fluid rounded-circle" width="100%" src="./asset/image/images.png" alt="..." /></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h1 class="display-4">< About Us ></h1>
                            <h2 class="display-4">about Student reporting platform</h2>
                        <p>MUSTSO has prepared the platform where their students will be able to report their immediately or persistent problems at a time
                            throughan online platform so that they will be solved immediately with their respective ministries at mbeya universtuty of science and technology
                        </p> </div>
                    </div>
                </div>
            </div>
        </section>
        
       
         <section  id="team">
         <h1 class="display-4 text-center">< Our Team ></h1>
        
        
           <?php include("components/team.php") ?>
        </section>
       
        <section id="contact">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><?php include ('components/contact.php'); ?></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">< contact us ></h2>
                       <p>Get in touch for more information and support</p> </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-black">
            <?php include ('components/footer.php'); ?>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
