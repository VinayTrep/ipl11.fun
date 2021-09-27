
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>ipl fun</title>
    <style>
        * {
            font-family: 'Roboto', sans-serif;
        }

        body {
            background-image: linear-gradient(to right,
                    #FFDEE9,
                    #FFDEE9,
                    #BAFDFB,
                    #B5FFFC);
        }

        .border-gray {
            border: 2px solid #707070;
        }

        .img-style {
            max-width: 100%;
            height: 8vh;
        }

        .font-h2 {
            font-size: 6vw;
        }

        .font-p {
            font-size: 4vw;
        }

        .font-p2 {
            font-size: 3vw;
        }

        .font-p3 {
            font-size: 3.5vw;
        }

        @media screen and (min-width:575px) {
            .font-h2 {
                font-size: 4vw;
            }

            .font-p {
                font-size: 3vw;
            }

            .font-p2 {
                font-size: 1.6vw;
            }

            .font-p3 {
                font-size: 2vw;
            }
        }

        @media screen and (min-width:764px) {
            .font-h2 {
                font-size: 3vw;
            }

            .font-p {
                font-size: 1.5vw;
            }

            .font-p2 {
                font-size: 1.5vw;
            }

            .font-p3 {
                font-size: 1.5vw;
            }
        }

        @media screen and (min-width:850px) {
            .font-h2 {
                font-size: 2vw;
            }

            .font-p {
                font-size: 1vw;
            }

            .font-p2 {
                font-size: 1vw;
            }

            .font-p3 {
                font-size: 1vw;
            }
        }
    </style>
</head>

<body>
<?php
    $team = isset($_REQUEST['letter'])? $_REQUEST['letter']:'';
    $dir = "ipl/$team";
    $fi = new FilesystemIterator($dir, FilesystemIterator::SKIP_DOTS);
    $fileCount = iterator_count($fi);
    $x = rand(1,$fileCount);
    ?>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v11.0"
        nonce="AfyYtbte"></script>
    <div class="container my-3">
        <div class="card col-sm-8 col-md-5 mx-auto text-center border-gray">
            <img src="images/IPL.logo.svg" alt="" class="img-style mx-auto">
            <h2 class="font-h2 py-1">You've Selected:&nbsp;<?php print strtoupper($team); ?></h2>
            <p class="font-p">😍🎵 Enjoy the music! 🎵😍</p>
            <p class="text-danger font-p2">😍😍 Don't forget to share with all your friends 😍😍</p>

            <!-- to add video -->
            <video height="auto" controls autoplay muted>
                <source src="ipl/<?php print $team?>/<?php print $x; ?>.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <!-- end  -->

            <p class="font-p3 mt-2">😍❤️ It's NEW,Spread it on all groups ❤️😍</p>

            <!-- adding icons -->
            <div class="row m-0 justify-content-center">
                <a href="whatsapp://send?text= 🙏  IPL Festival 🙏%0A%0A%20
                Select first letter of your Name 😋%0A%0A%20
                Enjoy the IPL Status Videos 🎷🎷🎷%0A%0A%20
                Don't forget to share it with all your friends 😍😍%0A%0A%20
                http://ipl11.fun 😍 Its NEW, Spread it on all all groups 😍" target="_blank">
                    <img src="images/WhatsApp.svg.png" alt="Whatsapp" class="img-style">
                </a>
                <div class="" data-href="http://ipl11.fun/" data-layout="button" data-size="small"><a target="_blank"
                        href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fipl11.fun%2F&amp;src=sdkpreparse"
                        class="fb-xfbml-parse-ignore"><img src="images/Facebook-logo.png" alt="Insta"
                            class="img-style"></a></div>
            </div>
            <a href="index.php" class="btn btn-primary mx-auto my-3">Go to home</a>
            <div class="border p-1 mb-2"><a href="index.php" class="text-muted">&copy; ipl11.fun</a></div>
        </div>
        <!-- end of adding icons -->

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>