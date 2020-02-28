<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Store - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background:linear-gradient(rgba(47, 23, 15, 0.65), rgba(47, 23, 15, 0.65)), url('assets/img/bg.jpg');">
    <section class="page-section cta">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-11 col-md-12 col-lg-12 col-xl-12 mx-auto">
                    <div class="cta-inner text-center rounded p-3">
                        <h2 class="section-heading mb-5"><span class="section-heading-upper">Come On In</span><span class="section-heading-lower">To-do list</span></h2>
                        <form action="/todo/update" method="post">
                            {{ csrf_field() }}
                            <div class="form-row mb-xl-0 mb-lg-0 mb-md-0 mb-sm-0 mb-3">
                                <div class="col-md-4 col-lg-3 col-xl-3">
                                    <div>
                                        
                                        <div class="form-group">
                                            <input type="text" name="id" value="">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control form-control-lg text-size" name="nameTodo" placeholder="Isi To-Do"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3 col-xl-1">
                                    <div class="text-right text-sm-right text-md-left text-lg-left text-xl-left"><button class="btn btn-primary btn-sm text-size" type="submit">Tambah</button></div>
                                </div>
                            </div>
                        </form>
                        </div>
                        <p class="address mb-5"><em><strong>1116 Orchard Street</strong><span><br>Golden Valley, Minnesota</span></em></p>
                        <p class="address mb-0"><small><em>Call Anytime</em></small><span><br>(317) 585-8468</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/current-day.js"></script>

</body>

</html>