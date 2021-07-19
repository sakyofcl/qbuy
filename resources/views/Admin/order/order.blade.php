<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orders | Qbuy.lk</title>
    <!----------------------------[ Css Library ]---------------------------->
    @include('/admin/Component/Link/css')
    <style>
        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid transparent;
            border-radius: 0;
        }

        .mailbox-widget .custom-tab .nav-item .nav-link {
            border: 0;
            color: #fff;
            border-bottom: 3px solid transparent;
        }

        .mailbox-widget .custom-tab .nav-item .nav-link.active {
            background: #e8e8e8;
            border-radius: 0;
            color: #fff;
            border-bottom: 3px solid #007bff;
        }

        .no-wrap td,
        .no-wrap th {
            white-space: nowrap;
        }

        .table td,
        .table th {
            padding: .9375rem .4rem;
            vertical-align: top;
            border-top: 1px solid rgba(120, 130, 140, .13);
        }

        .font-light {
            font-weight: 300;
        }

        .wrapper {
            margin: 0 auto;
        }

        .search_bar {
            height: 48px;
            border: 3px solid rgba(131, 149, 179, 0.3);
            display: flex;
            padding-left: 24px;
            padding-right: 4px;
            justify-content: space-between;
            box-shadow: 0 12px 20px 0 rgba(131, 149, 179, 0);
            transition: 0.2s ease box-shadow, 0.2s ease border;
            align-items: center;
        }



        .search_bar.focus {
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            border-bottom: none;
            box-shadow: none;
        }

        .search_input {
            height: 42px;
            padding: 0;
            padding-left: 8px;
            border: 0;
            width: calc(100% - 96px);
            font-size: 16px;
            line-height: 30px;
            letter-spacing: 0.5px;
            font-weight: 300;
            background-color: #fff;
            font-family: inherit;
        }

        .search_input:focus {
            outline: none;
            outline-offset: none;
        }

        .search_input .search_input:hover~.search_bar {
            box-shadow: 1px 1px 1px #0000;
        }

        .search_icone {
            width: 56px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 34px;
            border-radius: 12px;
            border: none;
            background-color: #fff;
            transition: 0.4s background-color;
            cursor: pointer;
        }

        .search_icone:hover {
            background-color: #e8f0fe;
        }

        .search_icone .ico {
            width: 100%;
            color: black;
            font-size: 20px;
        }

        @media screen and (max-width: 768px) {
            .wrapper {
                padding: 0 20px;
            }
        }
    </style>
</head>



<body id="RT-Dashboard">

    <!----------------------------[ Wrapper ]---------------------------->

    <div id="wrapper" class="bg-gray">

        <!----------------------------[ Sidebar ]---------------------------->
        @include('/admin/Component/Sidebar/RT-Sidebar')
        <!----------------------------[ End Sidebar ]------------------------>

        <div id="content-wrapper" class="d-flex flex-column bg-gray">

            <!----------------------------[ Main Content ]---------------------------->
            <div id="content">

                <!----------------------------[ Header ]---------------------------->
                @include('/admin/Component/Header/header')
                <!----------------------------[ End Header ]------------------------>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    @include('/admin/Component/breadcrumb')

                    <!-- breadcrumb -->
                    <?php
                    $path = [
                        ['name' => 'home', 'link' => '/']
                    ];
                    echo breadcrumb('Order', $path);
                    ?>
                    <!-- end breadcrumb -->


                    <div class="content">

                        <div class="card mb-4">
                            <div class="card-body">
                                <div id="example_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">

                                    <div class="row p-2 d-flex alight-items-center ml-0 mr-0 mb-3">
                                        <div class="col-md-3 pt-1 pb-1 d-flex justify-content-between align-items-center">
                                            <p class="pr-2 mt-2">
                                                Show
                                            </p>
                                            <select class="form-control h-100">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                            <p class="pl-2 mt-2">
                                                Entries
                                            </p>
                                        </div>

                                        <div class="col-md-6">
                                            <form>
                                                <div class="wrapper">
                                                    <div class="search_bar">
                                                        <input id="search" type="text" class="search_input" placeholder="search...">
                                                        <button class="search_icone" type="submit">
                                                            <i class="fas fa-search ico"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="col-md-3 pt-1 pb-1 d-flex justify-content-center">
                                            <a href="addproduct">
                                                <button type="button" class="btn btn-danger mr-1 h-100">
                                                    <i class="fas fa-plus mr-1"></i>
                                                    <span>Add New<span>
                                                </button>
                                            </a>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">


                                            <div class="card">
                                                <div class="card-body bg-light  mailbox-widget pb-0 pt-0">

                                                    <ul class="nav nav-tabs custom-tab border-bottom-0 " id="myTab" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active  p-3" id="inbox-tab" data-toggle="tab" aria-controls="inbox" href="#new" role="tab" aria-selected="true">
                                                                <span class="d-block d-md-none"><i class="ti-email"></i></span>
                                                                <span class="d-none d-md-block font-weight-bold text-dark text-capitalize">New
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link p-3" id="sent-tab" data-toggle="tab" aria-controls="sent" href="#accept" role="tab" aria-selected="false">
                                                                <span class="d-block d-md-none"><i class="ti-export"></i></span>
                                                                <span class="d-none d-md-block font-weight-bold text-dark text-capitalize">Accepted
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a class="nav-link p-3" id="spam-tab" data-toggle="tab" aria-controls="spam" href="#complete" role="tab" aria-selected="false">
                                                                <span class="d-block d-md-none"><i class="ti-panel"></i></span>
                                                                <span class="d-none d-md-block font-weight-bold text-dark text-capitalize">Completed
                                                                </span>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>


                                                <div class="tab-content" id="myTabContent">

                                                    <div class="tab-pane fade show active" id="new" role="tabpanel" aria-labelledby="profile-tab">
                                                        dsd
                                                    </div>
                                                    <div class="tab-pane fade" id="accept" role="tabpanel" aria-labelledby="profile-tab">
                                                        dasd
                                                    </div>
                                                    <div class="tab-pane fade" id="complete" role="tabpanel" aria-labelledby="profile-tab">
                                                        dsadas
                                                    </div>
                                                </div>


                                            </div>
                                            <div id="action-message" class="dataTables_processing card d-none">
                                                Processing...</div>
                                        </div>
                                    </div>

                                    <div class="row d-flex alight-items-center ml-0 mr-0 mt-3">
                                        <div class="col-md-12 d-flex justify-content-center align-items-center">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination">
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Previous">
                                                            <span aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                                                        </a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Next">
                                                            <span aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End Page Content -->

            </div>
            <!----------------------------[ End Main Content ]---------------------------->

            <!----------------------------[ Footer ]---------------------------->
            @include('/admin/Component/Footer/footer')

        </div>
    </div>

    <!----------------------------[ End Wrapper ]---------------------------->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!----------------------------[ Javascript Library ]---------------------------->
    @include('/admin/Component/Link/js')
    <script src="/assets/Backend/js/category/category.js"></script>

</body>





</html>