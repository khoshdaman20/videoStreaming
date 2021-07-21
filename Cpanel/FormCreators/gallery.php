<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>گالری</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/structure.css" rel="stylesheet" type="text/css" class="structure" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="plugins/file-upload/file-upload-with-preview.min.css" rel="stylesheet" type="text/css" />

    <style>
        div.gallery {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;
            width: 180px;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }
    </style>


    <link href="assets/css/components/custom-modal.css" rel="stylesheet" type="text/css" />
    <link href="plugins/animate/animate.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="styles.css">
    <!-- END PAGE LEVEL STYLES -->

<body class="sidebar-noneoverflow" data-spy="scroll" data-target="#navSection" data-offset="100">
    <!--  BEGIN NAVBAR  
    -->
    <?php include '../Navbar.php';
    ?>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <?php include '../Sidebar.php'; ?>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="page-header">
                    <div class="page-title">
                        <h3></h3>
                    </div>
                </div>

                <div class="row layout-top-spacing" id="cancel-row">

                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">


                            <div class="page-header">
                                <div class="page-title">
                                    <h3>بارگذاری </h3>
                                </div>
                            </div>
                            <div class="page-header">
                                <div class="page-title">
                                    <button type="button" class="btn btn-warning mb-2 mr-2" data-toggle="modal" data-target=".bd-example-modal-lg">جدید</button>

                                </div>
                            </div>

                            <div class="modal-body">

                                <?php

                                $conn = new mysqli("localhost", "markerla_markerla", "oDkE9+H%_G1(", "markerla_Marker");
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }
                                $sql = "select * from gallery";
                                $conn->set_charset("utf8");
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {

                                        echo "<div class='gallery'>
                                            <a target='_blank' href='/Cpanel/FormCreators/uploads/" . $row["url"] . "'>
                                                <img src='/Cpanel/FormCreators/uploads/" . $row["url"] . "' alt='Cinque Terre' width='600' height='400'>
                                            </a>
                                            <div class='desc'>" . $row["title"] . "</div>
                                        </div>";
                                    }
                                }

                                ?>









                                <div class="footer-wrapper">
                                    <div class="footer-section f-section-1">
                                        <p class=""> © کپی رایت</p>
                                    </div>
                                    <div class="footer-section f-section-2">

                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!--  END CONTENT AREA  -->

                        </div>
                        <!-- END MAIN CONTAINER -->

                        <!-- Modal -->
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myLargeModalLabel"></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                            </svg>
                                        </button>
                                    </div>
                                    <form action="upload.php" method="post" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="row layout-top-spacing">

                                                <div id="fuSingleFile" class="col-lg-12 layout-spacing">
                                                    <div class="statbox widget box box-shadow">
                                                        <div class="widget-header">
                                                            <div class="row">
                                                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="widget-content widget-content-area">
                                                            <input style='margin:10px' id='t-text' type='text' name='Action' placeholder="عنوان عکس" class='form-control' required='' autocomplete='off'>
                                                            <div class="custom-file-container" data-upload-id="myFirstImage">
                                                                <label>بارگذاری <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                                                <label class="custom-file-container__custom-file">
                                                                    <input name="fileToUpload" id="fileToUpload" type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                                                </label>
                                                                <div class="custom-file-container__image-preview"></div>
                                                            </div>



                                                        </div>

                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <div class=" modal-footer">
                                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> نادیده
                                                گرفتن</button></button>
                                            <button type="submit" class="btn btn-primary" name="submit">ذخیره</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->

                        <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
                        <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
                        <script src="bootstrap/js/popper.min.js"></script>
                        <script src="bootstrap/js/bootstrap.min.js"></script>
                        <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
                        <script src="plugins/blockui/jquery.blockUI.min.js"></script>
                        <script src="assets/js/app.js"></script>

                        <script>
                            $(document).ready(function() {
                                App.init();
                            });
                        </script>
                        <script src="plugins/highlight/highlight.pack.js"></script>
                        <script src="assets/js/custom.js"></script>
                        <!-- END GLOBAL MANDATORY SCRIPTS -->

                        <!-- BEGIN PAGE LEVEL PLUGINS -->
                        <script src="assets/js/scrollspyNav.js"></script>
                        <script src="plugins/file-upload/file-upload-with-preview.min.js"></script>

                        <script>
                            //First upload
                            var firstUpload = new FileUploadWithPreview('myFirstImage')
                            //Second upload
                            var secondUpload = new FileUploadWithPreview('mySecondImage')
                        </script>
                        <!-- END PAGE LEVEL PLUGINS -->
</body>

</html>