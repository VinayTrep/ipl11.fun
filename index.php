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
    <title>IPL</title>
    <style>
        .img {
            max-width: 100%;
            height: 4vh;
        }

        .img-style {
            max-width: 100%;
            height: 9vh;
        }

        .letter-style {
            max-width: 100%;
            height: 10vh;
        }

        h1 {
            font-size: 5vw
        }

        p {
            font-size: 2.90vw;
        }

        h2 {
            font-size: 4vw;
        }

        body {
            background-image: linear-gradient(to right,
                    rgba(255, 222, 233, 1),
                    rgba(255, 222, 233, 1),
                    rgba(186, 253, 251, 1),
                    rgba(181, 255, 252, 1));
        }

        @media screen and (min-width:575px) {
            p {
                font-size: 1.7vw;
            }

            h1 {
                font-size: 3vw;
            }

            h2 {
                font-size: 2.5vw;
            }
        }

        @media screen and (min-width:768px) {
            h1 {
                font-size: 2.6vw;
            }

            p {
                font-size: 1.5vw;
            }

            h2 {
                font-size: 2vw;
            }

            .letter-style {
                max-width: 100%;
                height: 13vh;
            }

            .img {
                max-width: 100%;
                height: 7vh;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid my-3">
        <div class="card col-sm-8 col-md-6 mx-auto text-center" style="border: 2px solid #707070;">
            <img src="images/IPL-logo.svg" alt="IPL LOGO" class="card-img-top mx-auto mt-1 img">
            <h1 class="pt-3">😘Choose Your Favourite Team😘</h1>
            <p class="py-2 text-danger">🎵😍 Let's see which music plays for you at the moment 😍🎵</p>
            <!-- Teams -->
            <div class="row justify-content-center">
                <form action="team.php" class="">
                    <input type="hidden" name="letter" value="csk" />
                    <button type="submit" class="border-0 bg-white">
                        <img src="images/CSK@2x.png" alt="CSK" type="submit" class="img-style">
                    </button>
                </form>
                <form action="team.php" class="">
                    <input type="hidden" name="letter" value="rcb" />
                    <button type="submit" class="border-0 bg-white">
                        <img src="images/RCB@2x.png" alt="RCB" type="submit" class="img-style">
                    </button>
                </form>
                <form action="team.php" class="">
                    <input type="hidden" name="letter" value="mi" />
                    <button type="submit" class="border-0 bg-white">
                        <img src="images/MI@2x.png" alt="MI" type="submit" class="img-style">
                    </button>
                </form>
                <form action="team.php" class="">
                    <input type="hidden" name="letter" value="srh" />
                    <button type="submit" class="border-0 bg-white">
                        <img src="images/SRH@2x.png" alt="SRH" class="img-style" type="submit">
                    </button>
                </form>
            </div>
            <div class="row justify-content-center ">
                <form action="team.php" class="">
                    <input type="hidden" name="letter" value="rr" />
                    <button type="submit" class="border-0 bg-white">
                        <img src="images/RR@2x.png" type="submit" class="img-style">
                    </button>
                </form>

                <form action="team.php" class="">
                    <input type="hidden" name="letter" value="dc" />
                    <button type="submit" class="border-0 bg-white">
                        <img src="images/DC@2x.png" type="submit" class="img-style">
                    </button>
                </form>

                <form action="team.php" class="">
                    <input type="hidden" name="letter" value="pbks" />
                    <button type="submit" class="border-0 bg-white">
                        <img src="images/PKBS@2x.png" type="submit" class="img-style">
                    </button>
                </form>

                <form action="team.php" class="">
                    <input type="hidden" name="letter" value="kkr" />
                    <button type="submit" class="border-0 bg-white">
                        <img src="images/KKR@2x.png" type="submit" class="img-style">
                    </button>
                </form>
            </div>
            <!-- end teams  -->
            <!-- Alphabets -->
            <h2 class="py-3">😍❤️ Choose first letter of your name ❤️😍</h2>
            <div class="row justify-content-center">
                <form action="redirect.php" class="">
                    <input type="hidden" name="letter" value="A" />
                    <button type="submit" class="border-0 bg-white p-0">
                        <img src="images/A.svg" type="submit" class="letter-style">
                    </button>
                </form>
                <form action="redirect.php" class="">
                    <input type="hidden" name="letter" value="B" />
                    <button type="submit" class="border-0 bg-white p-0">
                        <img src="images/B.svg" type="submit" class="letter-style">
                    </button>
                </form>
                <form action="redirect.php" class="">
                    <input type="hidden" name="letter" value="C" />
                    <button type="submit" class="border-0 bg-white p-0">
                        <img src="images/C.svg" type="submit" class="letter-style">
                    </button>
                </form>
                <form action="redirect.php" class="">
                    <input type="hidden" name="letter" value="D" />
                    <button type="submit" class="border-0 bg-white p-0">
                        <img src="images/D.svg" type="submit" class="letter-style">
                    </button>
                </form>
            </div>
            <div class="row justify-content-center">
                <form action="redirect.php" class="">
                    <input type="hidden" name="letter" value="E" />
                    <button type="submit" class="border-0 bg-white p-0">
                        <img src="images/E.svg" type="submit" class="letter-style">
                    </button>
                </form>
                <form action="redirect.php" class="">
                    <input type="hidden" name="letter" value="F" />
                    <button type="submit" class="border-0 bg-white p-0">
                        <img src="images/F.svg" type="submit" class="letter-style">
                    </button>
                </form>
                <form action="redirect.php" class="">
                    <input type="hidden" name="letter" value="G" />
                    <button type="submit" class="border-0 bg-white p-0">
                        <img src="images/G.svg" type="submit" class="letter-style">
                    </button>
                </form>
                <form action="redirect.php" class="">
                    <input type="hidden" name="letter" value="H" />
                    <button type="submit" class="border-0 bg-white p-0">
                        <img src="images/H.svg" type="submit" class="letter-style">
                    </button>
                </form>
            </div>
            <div class="row justify-content-center">
                <form action="redirect.php" class="">
                    <input type="hidden" name="letter" value="I" />
                    <button type="submit" class="border-0 bg-white p-0">
                        <img src="images/I.svg" type="submit" class="letter-style">
                    </button>
                </form>
                <form action="redirect.php" class="">
                    <input type="hidden" name="letter" value="J" />
                    <button type="submit" class="border-0 bg-white p-0">
                        <img src="images/J.svg" type="submit" class="letter-style">
                    </button>
                </form>
                <form action="redirect.php" class="">
                    <input type="hidden" name="letter" value="K" />
                    <button type="submit" class="border-0 bg-white p-0">
                        <img src="images/K.svg" type="submit" class="letter-style">
                    </button>
                </form>
                <form action="redirect.php" class="">
                    <input type="hidden" name="letter" value="L" />
                    <button type="submit" class="border-0 bg-white p-0">
                        <img src="images/L.svg" type="submit" class="letter-style">
                    </button>
                </form>
            </div>
            <div class="row justify-content-center">
                <form action="redirect.php" class="">
                    <input type="hidden" name="letter" value="M" />
                    <button type="submit" class="border-0 bg-white p-0">
                        <img src="images/M.svg" type="submit" class="letter-style">
                    </button>
                </form>
                <form action="redirect.php" class="">
                    <input type="hidden" name="letter" value="N" />
                    <button type="submit" class="border-0 bg-white p-0">
                        <img src="images/N.svg" type="submit" class="letter-style">
                    </button>
                </form>
                <form action="redirect.php" class="">
                    <input type="hidden" name="letter" value="O" />
                    <button type="submit" class="border-0 bg-white p-0">
                        <img src="images/O.svg" type="submit" class="letter-style">
                    </button>
                </form>
                <form action="redirect.php" class="">
                    <input type="hidden" name="letter" value="P" />
                    <button type="submit" class="border-0 bg-white p-0">
                        <img src="images/P.svg" type="submit" class="letter-style">
                    </button>
                </form>
            </div>
            <div class="row justify-content-center">
                <form action="redirect.php" class="">
                    <input type="hidden" name="letter" value="Q" />
                    <button type="submit" class="border-0 bg-white p-0">
                        <img src="images/Q.svg" type="submit" class="letter-style">
                    </button>
                </form>
                <form action="redirect.php" class="">
                    <input type="hidden" name="letter" value="R" />
                    <button type="submit" class="border-0 bg-white p-0">
                        <img src="images/R.svg" type="submit" class="letter-style">
                    </button>
                </form>
                <form action="redirect.php" class="">
                    <input type="hidden" name="letter" value="S" />
                    <button type="submit" class="border-0 bg-white p-0">
                        <img src="images/S.svg" type="submit" class="letter-style">
                    </button>
                </form>
                <form action="redirect.php" class="">
                    <input type="hidden" name="letter" value="T" />
                    <button type="submit" class="border-0 bg-white p-0">
                        <img src="images/T.svg" type="submit" class="letter-style">
                    </button>
                </form>
            </div>
            <div class="row justify-content-center">
                <form action="redirect.php" class="">
                    <input type="hidden" name="letter" value="U" />
                    <button type="submit" class="border-0 bg-white p-0">
                        <img src="images/U.svg" type="submit" class="letter-style">
                    </button>
                </form>
                <form action="redirect.php" class="">
                    <input type="hidden" name="letter" value="V" />
                    <button type="submit" class="border-0 bg-white p-0">
                        <img src="images/V.svg" type="submit" class="letter-style">
                    </button>
                </form>
                <form action="redirect.php" class="">
                    <input type="hidden" name="letter" value="W" />
                    <button type="submit" class="border-0 bg-white p-0">
                        <img src="images/W.svg" type="submit" class="letter-style">
                    </button>
                </form>
                <form action="redirect.php" class="">
                    <input type="hidden" name="letter" value="X" />
                    <button type="submit" class="border-0 bg-white p-0">
                        <img src="images/X.svg" type="submit" class="letter-style">
                    </button>
                </form>
            </div>
            <div class="row justify-content-center">
                <form action="redirect.php" class="">
                    <input type="hidden" name="letter" value="Y" />
                    <button type="submit" class="border-0 bg-white p-0">
                        <img src="images/Y.svg" type="submit" class="letter-style">
                    </button>
                </form>
                <form action="redirect.php" class="">
                    <input type="hidden" name="letter" value="Z" />
                    <button type="submit" class="border-0 bg-white p-0">
                        <img src="images/Z.svg" type="submit" class="letter-style">
                    </button>
                </form>
            </div>
            <!-- End Alphabets  -->
            <div class="border p-1 mb-2">&copy; ipl11.fun</div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>