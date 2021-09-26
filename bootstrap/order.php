<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>wowfood orderorder</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-7 img-cuatoi ">
                    <img src="img/logowow.png" alt="">
                </div>
                <div class="col-md ">
                    <nav class="navbar navbar-expand-lg  ">
                        <div class="container-fluid">
                            <ul class="nav justify-content-center ul-cuatoi">
                                <li class="nav-item li-cuatoi">
                                    <a class="nav-link a-cuatoi" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item li-cuatoi">
                                    <a class="nav-link a-cuatoi" href="#">Categories</a>
                                </li>
                                <li class="nav-item li-cuatoi">
                                    <a class="nav-link a-cuatoi" href="#">Foods</a>
                                </li>
                                <li class="nav-item li-cuatoi">
                                    <a class="nav-link a-cuatoi">Contacts</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container-fluid">
            <div class="row bg">
                <div class="col-md-12 text-center ">
                    <h3 style= " color: white; margin-top: 5%;">Fill this form to confirm your order</h3>
                </div>
                <div class=" col-md-12 des">
                    <form style="margin: 2% auto;" action="">
                        <fieldset>
                            <legend style= "text-align: center;">Selected Food</legend>
                            <div class="">
                                <img src="img/menu-pizza.jpg" alt="">
                            </div>
                            <div class="des-form">
                                <h4 style="margin-bottom :6px;">Food Title</h4>
                                <strong>$2.3</strong>
                                <br>
                                <strong>Quantity</strong>
                                <br><br>
                                <input class="quantity" type="number" value="1">
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="delivery">
                    <form class="delivery-food">
                        <fieldset class="delivery-form">
                            <legend style="text-align: center;">Delivery Details</legend>
                            <label for="fname">Full Name</label><br>
                            <input type="text" id="fname" name="fname" value="" placeholder="E.g. No"><br>
                            <label for="phone">Phone Number</label><br>
                            <input type="tel" id="phone" name="lname" value="" placeholder="E.g. 0377******"><br>
                            <label for="email">Email</label><br>
                            <input type="email" id="email" name="fname" value="" placeholder="E.g. Noohuy1500@gmal.com"><br>
                            <label for="adress">Adress</label><br>
                            <input type="text" id="adress" name="fname" value="" placeholder="E.g. Street, City, Country"><br><br>
                            <a href="#" class= " btn btn-search"> Confirm order </a>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </main>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="list-inline" style=" text-align: center; margin: 2%;">
                        <li class="list-inline-item">
                            <a href="#"><img src="https://img.icons8.com/nolan/50/facebook-new.png"/></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><img src="https://img.icons8.com/nolan/50/instagram-new.png"/></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><img src="https://img.icons8.com/nolan/50/twitter-circled.png"/></a>
                        </li>
                    </ul>
                    <div class="container text-center">
                        <p>All rights reserved. Designed by <a href="#" class= "a-cuatoi">CSE.TLU</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>


</body>
</html>