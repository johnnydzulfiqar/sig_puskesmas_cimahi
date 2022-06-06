<html>
<script type="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" src="js/bootstrap.min.js"></script>
<script type="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" src="js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">
<style>
    body {
        background-image: url("https://image.winudf.com/v2/image/Y29tLkxpdmVXYWxscGFwZXJzVUEuYXBwMDQ1NV9zY3JlZW5fMl9iNW9sMDNqeA/screen-2.jpg?fakeurl=1&type=.jpg");
        background-color: #000
    }

    .card {
        width: 400px;
        border: none
    }

    .btr {
        border-top-right-radius: 5px !important
    }

    .btl {
        border-top-left-radius: 5px !important
    }

    .btn-dark {
        color: #fff;
        background-color: #0d6efd;
        border-color: #0d6efd
    }

    .btn-dark:hover {
        color: #fff;
        background-color: #0d6efd;
        border-color: #0d6efd
    }

    .nav-pills {
        display: table !important;
        width: 100%
    }

    .nav-pills .nav-link {
        border-radius: 0px;
        border-bottom: 1px solid #0d6efd40
    }

    .nav-item {
        display: table-cell;
        background: #0d6efd2e
    }

    .form {
        padding: 10px;
        height: 300px
    }

    .form input {
        margin-bottom: 12px;
        border-radius: 3px
    }

    .form input:focus {
        box-shadow: none
    }

    .form button {
        margin-top: 20px
    }
</style>

<body>
    <div class="d-flex justify-content-center align-items-center mt-5">
        <div class="card">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item text-center"> <a class="nav-link active btl" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Login</a> </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="form px-4 pt-5">
                        <form class="" action="cek_login.php" method="post">
                            <input type="text" name="username" class="form-control" placeholder="username">
                            <input type="password" name="password" class="form-control" placeholder="password">
                            <button class="btn btn-dark btn-block" type="submit">Login</button>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                </div>
            </div>
        </div>
    </div>
</body>

</html>