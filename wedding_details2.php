<?php include 'admin/include/init.php'; ?>
<?php
$id = $_GET['id'];
$blogspot = EventWedding::find_by_id($id);

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Wedding Planner</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="https://cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <style>
        body {
            margin-top: 6%;
            background:url("https://c4.wallpaperflare.com/wallpaper/408/736/896/flowers-background-tree-pink-wallpaper-preview.jpg");
            background-size:cover;
        }
    

        .navbar-light .navbar-brand {
            color: #1a1a1a;
            font-weight: bold;
            line-height: 22px;
        }

        .navbar {
            font-weight: 700;
            padding: 12px;
            font-style: normal;
            font-size: 14px;
            text-transform: uppercase;
            color: black;
            border-bottom: 1px solid #ddd;
        }

        li.nav-item > a.nav-link {
            color: black !important;
            font-weight: bold !important;
        }

        #review {
            font-size: 16px;
            font-weight: bold;
            margin-right: 5px;
        }


        .navbar-expand-lg .navbar-nav .nav-link {
            padding-right: .9rem;
        }

        .navbar-brand {
            margin-left: 20px;
            width: 200px;
        }

        img.img-fluid.img-custom {
            width: 344px;
            height:230px;
        }
        .btn.btn-sm.btn-light.active:hover {
            background: white;
        }
        .list-group-item:first-child {
            border-top-left-radius: 0rem;
            border-top-right-radius: 0rem;
        }
    </style>
</head>
<body>

<?php include 'include/nav.php'; ?>

<div class="container">

    <div class="row">

        <div class="col-md-12 p-0" style="margin-bottom: 20px;"> <!-- border:1px solid rgba(0,0,0,.125) -->
            <h3 class="h5 text-uppercase text-center text-muted mt-4">Wedding at Taj Faluknama Palace </h3>
            <h2 class="h2 text-uppercase text-center mb-4">WONDERLAND WEDDING HALL</h2>
            <div class="text-center">
                <img src="admin/upload/events/pic8.JPG" class="img-fluid rounded-circle" style="width:270px;height:350px;" alt="">
            </div>
            <h5 class="h5 text-uppercase text-center mt-3">MR.Nithin &amp; MRS. Shalini Kandukuri</h5>
            <div class="font-weight-light text-center mb-3" style="font-size:16px;"> Taj Faluknama Palace</div>
        </div><!-- end of col-md-8 p-0 pl-3 -->
    </div>
</div><!-- end of container -->



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>

<script>

    $(document).ready(function () {
        $('#wedding_date').datepicker();
    });
</script>
</body>
</html>