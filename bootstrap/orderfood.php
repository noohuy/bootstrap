<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Order</title>
    <link rel="stylesheet" href="admin-order.css">

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
                <h3 style="padding: 3% 7%;">Manager Order</h3>
            </div>
            <div class="container-fluid table-cuatoi">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">SN</th>
                            <th scope="col">Food</th>
                            <th scope="col">Price</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Total</th>
                            <th scope="col">Order Date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Email</th>
                            <th scope="col">Adress</th>
                            <th scope="col">Actions</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">1</td>
                            <td>Mixed Pizza</td>
                            <td>10.00</td>
                            <td>2</td>
                            <td>20.00</td>
                            <td>2020-11-30 04:07:17</td>
                            <td style="color:green">Delivered</td>
                            <td>Jana Bush</td>
                            <td>+1(562) 101-2028</td>
                            <td>tydujy@mailinator.com</td>
                            <td>Minima iure ducimus</td>
                            <td><button type="button" class="btn btn-success">Update Order</button></td>

                        </tr>
                        <tr>
                            <td scope="row">2</td>
                            <td>Best Burger</td>
                            <td>4.00</td>
                            <td>4</td>
                            <td>16.00</td>
                            <td>2020-11-30 03:52:43</td>
                            <td style="color:green">Delivered</td>
                            <td>Kelly Dillard</td>
                            <td>+1(908) 914-3106</td>
                            <td>fexekihor@mailinator.com</td>
                            <td>Incidunt ipsum ad d</td>
                            <td><button type="button" class="btn btn-success">Update Order</button></td>

                        </tr>
                        <tr>
                            <td scope="row">3</td>
                            <td>Sadeko Momo</td>
                            <td>6.00</td>
                            <td>3</td>
                            <td>18.00</td>
                            <td>2020-11-30 03:49:48</td>
                            <td style="color:red">Cancelled</td>
                            <td>Bradley Farrell</td>
                            <td>+1(576) 504-4657</td>
                            <td>zuhafiq@mailinator.com</td>
                            <td>Duis aliqua Qui for</td>
                            <td><button type="button" class="btn btn-success">Update Order</button></td>
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