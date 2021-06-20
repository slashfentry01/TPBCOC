<?php
include("init.php");

include 'adminTopbar.php';


if(isset($_POST['but_upload'])){
    
    

    $name = $_FILES['file']['name'];
    $target_dir = "product_images/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);

    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif");

    if( in_array($imageFileType,$extensions_arr) ){

        // echo $_POST["product_name"];
        // echo $_POST["product_desc"];
        // echo $_POST["product_keywords"];
        // echo $_POST["product_port"];
        // echo $_POST["product_cat"];
        $query = "SELECT MAX(`product_port`) FROM `products` WHERE 1";
            $result = mysqli_query($conn, $query);

            if ($result->num_rows > 0) {
            // output data of each row
                while($row = $result->fetch_assoc()) {
                    //$test = $row["product_port"];
                    // echo count($row);
                    // print_r($row);
                    $latestPortNumber = $row["MAX(`product_port`)"];
                }
            }


        $productName =  $_POST["product_name"];
        $productDesc =  $_POST["product_desc"];
        $productKeywords =  $_POST["product_keywords"];
        $productCat =  $_POST["product_cat"];
        $productPort = $latestPortNumber + 1;
        $query = "insert into products(product_title, product_desc, product_image, product_keywords, product_port, product_state, category) values('$productName','$productDesc', '".$name."', '$productKeywords',  '$productPort', 'in', 'test')";
        mysqli_query($conn,$query);
        
        // $query= $conn->products("INSERT INTO products VALUES (?,?,?,?,?,?,?)"); //prepared statement
        // $query->bind_param("sssssss", $productName,$productDesc, $name, $productKeywords, "1", "in" , $productCat); //bind the parameters
        // $query->execute();


        // Upload file
        move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

    }


}

?>

<header class="masthead">
    <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-10">
                        <h2>Evidence List</h2>
                    </div>
                    <div class="col-2">
                        <a href="#" data-toggle="modal" data-target="#add_product_modal" class="btn btn-primary btn-sm">Add Evidence</a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>Case ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Port Number</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="product_list">
                        </tbody>
                    </table>
                </div>
                </main>
            </div>
        </div>



        <!-- Add evidence Modal start -->
        <div class="modal fade" id="add_product_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Evidence</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST" id="add-product-form" enctype="multipart/form-data">
                            <div class="row">

                                <div class="col-12">
                                    <div class="form-group">
                                        <h6>Evidence Name</h6>
                                        <input type="text" name="product_name" class="form-control" placeholder="Enter evidence name">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <h6>Evidence Description</h6>
                                        <textarea class="form-control" name="product_desc" placeholder="Enter evidence description"></textarea>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <h6>Evidence Case-Id</h6>
                                        <input type="text" name="product_keywords" class="form-control" placeholder="Enter evidence case-id">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                    <br>
                                        <h6>Category</h6>
                                        <input type="text" name="product_cat" class="form-control" placeholder="Enter evidence category">
                                    </div>
                                </div>

                                <input type="hidden" name="add_product" value="1">
                                <div class="col-12">
                                    <button type="submit" name="but_upload" class="btn btn-primary add-product">Add Evidence</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add evidence Modal end -->

        <!-- Edit evidence Modal start -->
        <div class="modal fade" id="edit_product_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="edit-product-form" enctype="multipart/form-data">
                            <div class="row">

                                <div class="col-12">
                                    <div class="form-group">
                                        <h6>Evidence Name</h6>
                                        <input type="text" name="e_product_name" class="form-control" placeholder="Enter evidence name">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <h6>Evidence Description</h6>
                                        <textarea class="form-control" name="e_product_desc" placeholder="Enter evidence description"></textarea>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <h6>Evidence Case-Id</h6>
                                        <input type="text" name="e_product_keywords" class="form-control" placeholder="Enter evidence case-id">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <h6>Evidence Image <small>(format: jpg, jpeg, png)</small></h6>
                                        <input type="file" name="e_product_image" class="form-control">
                                        <img src="" class="img-fluid" width="50">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <h6>Evidence Port Number</h6>
                                        <input type="text" name="e_product_port" class="form-control" placeholder="Enter evidence port number">
                                    </div>
                                </div>

                                <input type="hidden" name="pid">
                                <input type="hidden" name="edit_product" value="1">
                                <div class="col-12">
                                    <button type="button" class="btn btn-primary submit-edit-product">Update Evidence</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



    </div>
    </div>
    </div>
    </div>
</header>

<script type="text/javascript" src="../js/investigator.js"></script>
<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>