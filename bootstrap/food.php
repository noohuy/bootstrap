<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Food</title>
    <link rel="stylesheet" href="admin.css">

</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md ">
                    <nav class="navbar navbar-expand-lg  ">
                        <div class="container" style=" display: inline;">
                            <ul class="nav justify-content-center ul-cuatoi">
                                <li class="nav-item li-cuatoi">
                                    <a class="nav-link a-cuatoi" aria-current="page" href="Home.php">Home</a>
                                </li>
                                <li class="nav-item li-cuatoi">
                                    <a class="nav-link a-cuatoi" href="admin.php">Admin</a>
                                </li>
                                <li class="nav-item li-cuatoi">
                                    <a class="nav-link a-cuatoi" href="category.php">Category</a>
                                </li>
                                <li class="nav-item li-cuatoi">
                                    <a class="nav-link a-cuatoi" href="food.php">Food</a>
                                </li>
                                <li class="nav-item li-cuatoi">
                                    <a class="nav-link a-cuatoi" href="orderfood.php">Order</a>
                                </li>
                                <li class="nav-item li-cuatoi">
                                    <a class="nav-link a-cuatoi" href="#">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

        </div>

    </header>

    <main>
        <div class="container-fluid bg">
            <div class="row">
                <h3 style="padding: 3% 7%;">Manager Food</h3>
            </div>
            <div class="container-fluid btn-cuatoi">
                <button class="btn btn-primary" style="margin: 0 6%;" type="button">Add Category</button>
            </div>
            <div class="container-fluid table-cuatoi">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">SN</th>
                            <th scope="col">Title</th>
                            <th scope="col">Price</th>
                            <th scope="col">Image</th>
                            <th scope="col">Featured</th>
                            <th scope="col">Active</th>
                            <th scope="col">Actions</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">1</td>
                            <td>Dumplings Specials</td>
                            <td>$5.00</td>
                            <th><img class=" img-cuatoi" src="img/menu-momo.jpg" alt=""></th>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td><button type="button" class="btn btn-success">Update Food</button>  <button type="button" class="btn btn-danger">Delete Food</button></td>

                        </tr>
                        <tr>
                        <td scope="row">2</td>
                            <td>Best Burger</td>
                            <td>$4.00</td>
                            <th><img class=" img-cuatoi" src="img/burger.jpg" alt=""></th>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td><button type="button" class="btn btn-success">Update Food</button>  <button type="button" class="btn btn-danger">Delete Food</button></td>

                        </tr>
                        <tr>
                        <td scope="row">3</td>
                            <td>Smoky BBQ Pizza</td>
                            <td>$6.00</td>
                            <th><img class=" img-cuatoi" src="img/menu-pizza.jpg" alt=""></th>
                            <td>No</td>
                            <td>Yes</td>
                            <td><button type="button" class="btn btn-success">Update Food</button>  <button type="button" class="btn btn-danger">Delete Food</button></td>

                        </tr>
                        <tr>
                        <td scope="row">4</td>
                            <td>Sadeko Momo</td>
                            <td>$6.00</td>
                            <th><img class=" img-cuatoi" src="img/menu-momo.jpg" alt=""></th>
                            <td>No</td>
                            <td>Yes</td>
                            <td><button type="button" class="btn btn-success">Update Food</button>  <button type="button" class="btn btn-danger">Delete Food</button></td>

                        </tr>
                        <td scope="row">5</td>
                            <td>Mixed Pizza</td>
                            <td>$10.00</td>
                            <th><img class=" img-cuatoi" src="img/menu-pizza.jpg" alt=""></th>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td><button type="button" class="btn btn-success">Update Food</button>  <button type="button" class="btn btn-danger">Delete Food</button></td>

                        </tr>
                        <td scope="row">6</td>
                            <td>Sed ipsum cillum in</td>
                            <td>$52.00</td>
                            <th><img class=" img-cuatoi" src="" alt=""></th>
                            <td>No</td>
                            <td>No</td>
                            <td><button type="button" class="btn btn-success">Update Food</button>  <button type="button" class="btn btn-danger">Delete Food</button></td>

                        </tr>
                    
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <footer>
        <div class="container-fluid bg-cuatoi">
            <div class="row">
                <div class="col-md text-center">
                    <p> 2020 All right reserved, Food House. Developed  By - <a href="#" class="a-cuatoi">CSE485</a></p>
                </div>
            </div
        </div

    </footer
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    
</body>
</html>