<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            /* The Modal (background) */
            .modal {
                display: none;
                /* Hidden by default */
                position: fixed;
                /* Stay in place */
                z-index: 1;
                /* Sit on top */
                padding-top: 100px;
                /* Location of the box */
                left: 0;
                top: 0;
                width: 100%;
                /* Full width */
                height: 100%;
                /* Full height */
                overflow: auto;
                /* Enable scroll if needed */
                background-color: rgb(0, 0, 0);
                /* Fallback color */
                background-color: rgba(0, 0, 0, 0.4);
                /* Black w/ opacity */
            }

            /* Modal Content */
            .modal-content {
                background-color: #fefefe;
                margin: auto;
                padding: 20px;
                border: 1px solid #888;
                width: 80%;
            }

            /* The Close Button */
            .close {
                color: #aaaaaa;
                float: right;
                font-size: 28px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: #000;
                text-decoration: none;
                cursor: pointer;
            }
        </style>
    </head>

    <body>

        <h2>Modal Example</h2>

        <!-- Trigger/Open The Modal -->
        <button id="myBtn">Open Modal</button>

        <!-- The Modal -->
        <div id="myModal" class="modal">
            <!-- Modal content -->
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
                                    <input type="text" name="product_name" class="form-control"
                                        placeholder="Enter evidence name">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <h6>Evidence Description</h6>
                                    <textarea class="form-control" name="product_desc"
                                        placeholder="Enter evidence description"></textarea>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <h6>Evidence Case-Id</h6>
                                    <input type="text" name="product_keywords" class="form-control"
                                        placeholder="Enter evidence case-id">
                                </div>
                            </div>

                            <div class="col-12">
                                <input type="file" name="file" class="form-control-file"
                                    id="exampleFormControlFile1">
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <br>
                                    <h6>Category</h6>
                                    <input type="text" name="product_cat" class="form-control"
                                        placeholder="Enter evidence category">
                                </div>
                            </div>

                            <input type="hidden" name="add_product" value="1">
                            <div class="col-12">
                                <button type="submit" name="but_upload" class="btn btn-primary add-product">Add
                                    Evidence</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the button that opens the modal
            var btn = document.getElementById("myBtn");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal 
            btn.onclick = function() {
                modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>

    </body>
</html>