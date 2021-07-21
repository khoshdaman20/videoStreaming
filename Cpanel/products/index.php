<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>مدیریت </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="../FormCreators/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../FormCreators/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="../FormCreators/assets/css/structure.css" rel="stylesheet" type="text/css" class="structure" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="../FormCreators/plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="../FormCreators/plugins/table/datatable/dt-global_style.css">
    <!-- END PAGE LEVEL STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="../FormCreators/assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="../FormCreators/assets/css/components/custom-modal.css" rel="stylesheet" type="text/css" />
    <link href="../FormCreators/plugins/animate/animate.css" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->

    <!-- END PAGE LEVEL PLUGINS -->


</head>

<body class="sidebar-noneoverflow">

    <!--  BEGIN NAVBAR  -->
    <?php include '../Navbar.php'; ?>
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
                            <button type="button" class="btn btn-warning mb-2 mr-2" data-toggle="modal" data-target=".bd-example-modal-lg">جدید</button>
                            <div class="table-responsive mb-4 mt-4">

                                <table id="zero-config" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <?php
                                            $conn = new mysqli("localhost", "markerla_markerla", "oDkE9+H%_G1(", "markerla_Marker");
                                            if ($conn->connect_error) {
                                                die("Connection failed: " . $conn->connect_error);
                                            }
                                            $sql = "SELECT * FROM formbuilders f join translate t on f.ID = t.Form_ID where TableName = 'product'";
                                            $conn->set_charset("utf8");
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
                                                // output data of each row

                                                while ($row = $result->fetch_assoc()) {
                                                    echo "<th> " . $row["FA"] . " </th>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                            $conn->close();
                                            ?>

                                            <th class="no-content"></th>
                                            <th class="no-content"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $conn = new mysqli("localhost", "markerla_markerla", "oDkE9+H%_G1(", "markerla_Marker");
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }
                                        $sql = "SELECT * FROM product";
                                        $conn->set_charset("utf8");
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {


                                            while ($row = $result->fetch_assoc()) {

                                                echo "<tr>";
                                                $finfo = $result->fetch_fields();

                                                foreach ($finfo as $val) {
                                                    echo "<td>" . $row[$val->name] . "</td>";
                                                }
                                                echo "<td><svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-x-circle table-cancel'><circle cx='12' cy='12' r='10'></circle><line x1='15' y1='9' x2='9' y2='15'></line><line x1='9' y1='9' x2='15' y2='15'></line></svg></td>";
                                                echo "<td><svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-edit'><path d='M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7'></path><path d='M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z'></path></svg></td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "0 results";
                                        }

                                        $conn->close();
                                        ?>



                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
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



    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <script src="../FormCreators/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="../FormCreators/bootstrap/js/popper.min.js"></script>
    <script src="../FormCreators/bootstrap/js/bootstrap.min.js"></script>
    <script src="../FormCreators/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../FormCreators/assets/js/app.js"></script>

    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="../FormCreators/plugins/highlight/highlight.pack.js"></script>
    <script src="../FormCreators/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!--  BEGIN CUSTOM SCRIPT FILE  -->
    <script src="assets/js/scrollspyNav.js"></script>
    <script>
        $('#yt-video-link').click(function() {
            var src = 'https://www.youtube.com/embed/YE7VzlLtp-4';
            $('#videoMedia1').modal('show');
            $('<iframe>').attr({
                'src': src,
                'width': '560',
                'height': '315',
                'allow': 'encrypted-media'
            }).css('border', '0').appendTo('#videoMedia1 .video-container');
        });
        $('#vimeo-video-link').click(function() {
            var src = 'https://player.vimeo.com/video/1084537';
            $('#videoMedia2').modal('show');
            $('<iframe>').attr({
                'src': src,
                'width': '560',
                'height': '315',
                'allow': 'encrypted-media'
            }).css('border', '0').appendTo('#videoMedia2 .video-container');
        });
        $('#videoMedia1 button, #videoMedia2 button').click(function() {
            $('#videoMedia1 iframe, #videoMedia2 iframe').removeAttr('src');
        });
    </script>
    <!--  END CUSTOM SCRIPT FILE  -->
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
                <form action="back\<?php echo  $_GET["pages"] ?>.php" method="post">
                    <div class="modal-body">
                        <?php
                        $conn = new mysqli("localhost", "markerla_markerla", "oDkE9+H%_G1(", "markerla_Marker");
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        $sql = "SELECT * FROM formbuilders f join translate t on f.ID = t.Form_ID where TableName = 'product'";
                        $conn->set_charset("utf8");
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            echo "<input style ='margin:10px' id='t-text' type='hidden' name='Action' value='Insert' class='form-control' required='' autocomplete='off'>";
                            while ($row = $result->fetch_assoc()) {
                                if ($row["EN"] <> "ID")
                                    echo "<input style ='margin:10px' id='t-text' type='text' name=" . $row["EN"] . " placeholder='" . $row["FA"] . "' class='form-control' required='' autocomplete='off'>";
                            }
                        } else {
                            echo "0 results";
                        }
                        $conn->close();
                        ?>


                    </div>
                    <div class=" modal-footer">
                        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> نادیده
                            گرفتن</button></button>
                        <button type="submit" class="btn btn-primary">ذخیره</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal -->


    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="../FormCreators/plugins/table/datatable/datatables.js"></script>
    <script>
        $('#zero-config').DataTable({
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>'
                },
                "sInfo": "صفحه _PAGE_ از _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "جستجو کنید...",
                "sLengthMenu": "نتایج :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7
        });
    </script>
    <!-- END PAGE LEVEL SCRIPTS -->
</body>

</html>