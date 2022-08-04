<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./links/mete.php" ?>


</head>

<body>

    <div class="Navbar">
        <?php include ".//includes/navbar.php " ?>
    </div>


    <div class="bodysection">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 com-sm-12 col-xs-12 mx-auto px-3">

                    <div class="heading text-center">
                        <h1>How can we help you?</h1>
                        <h6>Search here to get answers to your questions</h6>






                        <form id="form">
                            <div class="input-group">
                                <input type="text" name="d_url" required class="form-control rounded mx-auto mt-3"
                                    placeholder="Paste The Link Here" id="url" aria-label="Search"
                                    aria-describedby="search-addon" />
                                <button type="submit" class="btn btn-success mt-3">Search </button>
                            </div>
                        </form>

                        <p class="pp">By using our service you accept our <strong> Terms of Service </strong> and
                            Privacy
                            Policy</p>


                        <div class="spinner-border text-info" role="status">
                            <span class="visually-hidden ">Loading...</span>
                        </div>







                    </div>





                </div>




            </div>

        </div>

    </div>




    </div>


    <!-- here we can make image section -->

    <div class="another">
        <div class="container">
            <div class="row order border-dark">
                <div class="col-lg-10 col-md-12 col-xs-12 col-sm-12 mx-auto b">

                    <!-- Now for sections -->

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 text-center mt-3">
                            <div class="image">
                                <img src="./img/1.png" alt="image"><br>
                                <p class="description mt-2" style="padding:3px 10px;margin:0px 30px">cjcd cdcbkjba cem
                                    fefnekfmefef fefenf fefnwe fefnlwef
                                    cjcd cdcbkjba cem fefnekfmefef fefenf fefnwe fefnlwef
                                </p>
                            </div>

                        </div>


                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 mt-3">
                            <div class="text">

                                <table class="table border border-dark  rounded-1">
                                    <thead class=py-2>
                                        <tr>
                                            <th scope="col"><button class="btn btn-primary w-100 ">Video</button></th>
                                            <th></th>
                                            <th scope="col"><button class="btn btn-primary w-100 ">Audio</button></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Size</th>
                                            <th class="text-center" scope="col">Status</th>



                                        </tr>
                                        <tr>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td><button class="btn btn-success w-100">Download</button></td>
                                        </tr>
                                        <tr>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td><button class="btn btn-success w-100">Download</button></td>
                                        </tr>
                                        <tr>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td><button class="btn btn-success w-100">Download</button></td>
                                        </tr>


                                    </tbody>
                                </table>

                            </div>
                        </div>





                    </div>


                </div>
            </div>
        </div>






    </div>


    <!-- end of text section -->
    <div class="container">
        <?php include "./includes/text.php" ?>
    </div>

    <!-- now for banner -->
    <?php include "./includes/banners.php" ?>



    <!-- Footer section -->
    <div class="footter">
        <?php include "./includes/footer.php" ?>
    </div>





    <script>
    (function() {
        const form = document.getElementById('form');
        form.addEventListener('submit', function(e) {
            // Prevent default behavior
            e.preventDefault();
            // Create payload as new FormData object
            const payload = new FormData(form);
            // Post the payload using Fetch
            fetch('http://127.0.0.1:5000/youtube', {
                    method: 'POST',
                    body: payload,
                })
                .then(res => res.json())
                .then(data => console.log(data))
        })
    })()
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>