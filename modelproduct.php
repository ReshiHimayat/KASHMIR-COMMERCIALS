<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Products</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="Seller Heading.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="seller.js"></script>
    <style>
        #btnAdd {
            margin-left: 650px;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    include('dbconfig.php');
    ?>
    <div class="nav">
        <div class="logo">
            <div><a href="Home.html"><img src="Logo.jpg" alt=""></div>
            <div>
                <h3>Kashmir Commercials Seller Hub</h3></a>
            </div>
        </div>
        <nav>
            <ul>
                <li> <a href="Home.html">Home </a> </li>
                <li> <a href="#">Profile</a> </li>
                <li> <a href="#">logOut</a> </li>
            </ul>
        </nav>
    </div>
    <!-- Button trigger modal -->
    <button type="button" id="btnAdd" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
        Add Products
    </button>
    <div class="container-fluid">
        <?php
        if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
            echo '<h2 class="bg-Primary text-white">' . $_SESSION['success'] . '</h2>';
            unset($_SESSION['success']);
        }
        if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
            echo '<h2 class="bg-danger text-white">' . $_SESSION['status'] . '</h2>';
            unset($_SESSION['status']);
        }
        ?>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Seller Add Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="uploadproductcode.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">

                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control" name="category" id="product">
                                <option value="" selected="selected">Select Category</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Sub Category</label>
                            <select class="form-control" name="subcategory" id="category">
                                <option value="" selected="selected">Please select sub Category</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Product</label>
                            <select class="form-control" name="product" id="subcategory">
                                <option value="" selected="selected">Please select Product</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" class="form-control" name="productname" id="PName" placeholder="Enter Product Name" required>
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" name="image" id="images" required>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" class="form-control" name="price" id="Price" placeholder="Enter Product Price" required>
                        </div>
                        <div>
                            <label>Quantity</label>
                            <input type="text" class="form-control" name="quantity" id="Quantity" placeholder="Enter Product Quantity" required>
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Upload Product</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>