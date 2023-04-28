<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <base href="/asignment_web/">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="favicon.png">
    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <!-- Bootstrap CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="public/css/tiny-slider.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">
    <title>Electronic devices</title>
</head>

<body>
    <!-- Start Header/Navigation -->
    <?php require_once "./app/views/default/block/header.php" ?>


    <?php require_once "./app/views/default/" . $data['Page'] . ".php" ?>

    <!-- Start Footer Section -->
    <?php require_once "./app/views/default/block/footer.php"; ?>
    <!-- End Footer Section -->


    <script src="public/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="public/js/tiny-slider.js"></script> -->
    <script src="public/js/custom.js"></script>
    <!-- <script src="public/js/activePage.js"></script> -->
    <script
    src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <!-- <script type="text/javascript">
        $(document).ready(function() {
            $('li').on('click', function(){
                $(this).siblings.removeClass('active');
                $(this).addClass('active');
            })
        })
    </script> -->
</body>

</html>