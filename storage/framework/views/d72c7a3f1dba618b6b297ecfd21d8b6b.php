<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Twitter</title>
    <!-- CSS FILE LINK -->
    <link rel="stylesheet" href="style.css" />
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/bf1c643ee2.js" crossorigin="anonymous"></script>
    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
</head>

<body class="">
    <div class="container-fluid container-md">
                   <!--NAVBAR -->
                <nav class=" bg-light xs-nav fixed-bottom    d-sm-none">
                    <div class="container-fluid">
                        <div class="row h-50">
                            <div class="col-3">
                                <span><i class="fa-solid fa-house fs-3 py-3"></i></span>
                            </div>
                            <div class="col-3">
                            <span><i class="fa-solid fa-magnifying-glass fs-2 py-3 "></i></span>
                            </div>
                            <div class="col-3">
                            <span><i class="fa-solid fa-bell fs-2 py-3"></i></span>
                            </div>
                            <div class="col-3 ">
                                <span><i class="fa-solid fa-envelope fs-2 py-3"></i></span>
                            </div>
                        </div>
                    </div>
                </nav>
        <div class="row ">
            <!-- LEFT SIDE BAR -->
            <div
                class="d-none col-sm-2  d-sm-block  col-md-3 col-lg-3 d-flex flex-column text-sm-end text-md-start  align-items-lg-start left_sidebar border-end ">
                <div>
                    <span><i class="fa-brands fa-twitter display-5 text-info py-3  "></i></span>

                </div>
                <div class="d-flex align-items-center justify-content-sm-end justify-content-md-start">
                    <span><i class="fa-solid fa-house fs-3 py-3"></i></span>
                    <p class="d-none d-md-block fs-4 pt-3 ps-2 fw-bold">Home</p>
                </div>
                <div class="d-flex align-items-center d-block d-md-none  justify-content-sm-end justify-content-md-start justify-content-sm-end justify-content-md-start">
                    <span><i class="fa-solid fa-magnifying-glass fs-2 py-3 "></i></span>
                    <!-- <p class="d-none d-lg-block fs-3 pt-3 ps-1">Home</p> -->
                </div>
                <div class="d-flex align-items-center  justify-content-sm-end justify-content-md-start">
                    <span><i class="fa-solid fa-hashtag fs-2 py-3 d-none d-md-block"></i></span>
                    <p class="d-none d-md-block fs-4 pt-3 ps-2">Explore</p>
                </div>
                <div class="d-flex align-items-center  justify-content-sm-end justify-content-md-start">
                    <span><i class="fa-solid fa-bell fs-2 py-3"></i></span>
                    <p class="d-none d-md-block fs-4 pt-3 ps-2">Notifications</p>
                </div>
                <div class="d-flex align-items-center  justify-content-sm-end justify-content-md-start">
                    <span><i class="fa-solid fa-envelope fs-2 py-3"></i></span>
                    <p class="d-none d-md-block fs-4 pt-3 ps-2">Messages</p>
                </div>
                <div class="d-flex align-items-center  justify-content-sm-end justify-content-md-start">
                    <span><i class="fa-solid fa-bookmark fs-2 py-3"></i></span>
                    <p class="d-none d-md-block fs-4 pt-3 ps-2">Bookmark</p>
                </div>
                <div class="d-flex align-items-center  justify-content-sm-end justify-content-md-start">
                    <span><i class="fa-solid fa-file-lines fs-2 py-3"></i></span>
                    <p class="d-none d-md-block fs-4 pt-3 ps-2">List</p>
                </div>
                <div class="d-flex align-items-center  justify-content-sm-end justify-content-md-start">
                    <span><i class="fa-solid fa-user fs-2 py-3"></i></span>
                    <p class="d-none d-md-block fs-4 pt-3 ps-2">Profile</p>
                </div>
                <div class="d-flex align-items-center  justify-content-sm-end justify-content-md-start">
                    <span><i class="fa-solid fa-ellipsis fs-2 py-3"></i></span>
                    <p class="d-none d-md-block fs-4 pt-3 ps-2">More</p>
                </div>
            </div>

            <!-- MAIN SECTION -->
            <div class="col-12 col-sm-10 col-md-9 col-lg-6  main_bar ">
                <div class="row d-flex justify-content-between align-items-center ps-1">
                    <div class="col-1 pt-2">
                        <div><span class="fs-4 fw-bold">Home</span></div>
                    </div>
                    <div class="col-1 me-3">
                        <div><span class="fs-4"><i class="fa-solid fa-star"></i> </span></div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col pt-2 ">
                        <div class="row">
                            <div class="col-2">
                                <img class="rounded-circle" src=" <?php echo e(Vite::asset('routing-tiray/resources/images/profile lala.png')); ?>" alt="" height="50px">
                            </div>
                            <div class="col-9 col-sm-10 ">
                                <input class="border-0 bg  form-control-lg" type="text" placeholder="What's happening?">
                                <div class="ps-3 d-flex text-info">
                                    <p><span><i class="fa-solid fa-earth-americas "></i></span></p>
                                    <p class="fw-bold ps-1 ">Everyone can reply</p>
                                    <hr>
                                </div>
                                <div class="row pb-2 justify-content-center">
                                    <div class="col-9 text-info">
                                        <span class="ps-3"><i class="fa-solid fa-image"></i></span>
                                        <span class="ps-3"><i class="fa-solid fa-gift"></i></span>
                                        <span class="ps-3"><i class="fa-solid fa-face-grin"></i></span>
                                        <span class="ps-3"><i class="fa-solid fa-location-pin"></i></span>
                                    </div>
                                    <div class="col-3 col-sm-2  ">
                                        <a class="text-decoration-none fs-6  fw-bold text-white bg-info py-1 px-3  rounded-pill"
                                            href="#">Tweet</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row  d-flex  justify-content-between align-items-center border">
                            <div class="col-11 col-sm-10 ps-5  pt-1 d-flex pt-2">
                                <span><i class="fa-solid fa-comment"></i></span>
                                <p class="ps-1">Anything u want. <span class="text-info fw-bold ">see
                                        more</span></p>
                            </div>
                            <div class="col-1 col-sm-2 text-end fs-5 pt-2 ps-2">
                                <span><i class="fa-solid fa-xmark"></i></span>
                            </div>
                        </div>
                        <!-- TWEET 1 -->
                        <div class="row mt-1 border d-flex  ">
                            <div class="col-3 mt-2">

                                <img class="rounded-circle" src=" <?php echo e(Vite::asset('routing-tiray/resources/images/profile lala.png')); ?>" alt="" height="50px">
                            </div>
                            <div class="col-9 ">
                                <div class="row d-flex justify-content-between align-items-center ps-1">
                                    <div class="col-10 pt-2 ">
                                        <div>
                                            <p><span class="fw-bold">Tervelatuq </span>@tervelle . 4h</p>
                                        </div>
                                    </div>
                                    <div class="col-1 me-2 ps-0">
                                        <div><span><i class="fa-solid fa-ellipsis fs-5 py-3"></i></span></div>
                                    </div>
                                </div>
                                <div class="col">
                                    DO you think <span class="text-info">#2k24</span> Dimas anjay mabar?
                                    <br>
                                    <div class="row pt-4">
                                        <div class="col"><span><i class="fa-solid fa-comment"></i></span></div>
                                        <div class="col"><span><i class="fa-solid fa-share-from-square"></i></span>
                                        </div>
                                        <div class="col"><i class="fa-solid fa-heart"></i></div>
                                        <div class="col"><span><i class="fa-solid fa-share-nodes"></i></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- TWEET 2 -->
                        <div class="row mt-1 border d-flex  ">
                            <div class="col-3 mt-2">

                                <img class="rounded-circle" src=" <?php echo e(Vite::asset('routing-tiray/resources/images/profile lala.png')); ?>" alt="" height="50px">
                            </div>
                            <div class="col-9 ">
                                <div class="row d-flex justify-content-between align-items-center ps-1">
                                    <div class="col-10 pt-2 ">
                                        <div>
                                            <p><span class="fw-bold">Tervelatuq </span>@tervelle . 8h</p>
                                        </div>
                                    </div>
                                    <div class="col-1 me-2 ps-0">
                                        <div><span><i class="fa-solid fa-ellipsis fs-5 py-3"></i></span></div>
                                    </div>
                                </div>
                                <div class="col">
                                    Hari ini bener-bener hectic huft
                                    <br>
                                    <div class="row pt-4">
                                        <div class="col"><span><i class="fa-solid fa-comment"></i></span></div>
                                        <div class="col"><span><i class="fa-solid fa-share-from-square"></i></span>
                                        </div>
                                        <div class="col"><i class="fa-solid fa-heart"></i></div>
                                        <div class="col"><span><i class="fa-solid fa-share-nodes"></i></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- TWEET 3 -->
                        <div class="row mt-1 border d-flex  ">
                            <div class="col-3 mt-2">

                                <img class="rounded-circle" src=" <?php echo e(Vite::asset('routing-tiray/resources/images/profile lala.png')); ?>" alt="" height="50px">
                            </div>
                            <div class="col-9 ">
                                <div class="row d-flex justify-content-between align-items-center ps-1">
                                    <div class="col-10 pt-2 ">
                                        <div>
                                            <p><span class="fw-bold">Tervelatuq </span>@tervelle . 23h</p>
                                        </div>
                                    </div>
                                    <div class="col-1 me-2 ps-0">
                                        <div><span><i class="fa-solid fa-ellipsis fs-5 py-3"></i></span></div>
                                    </div>
                                </div>
                                <div class="col">
                                    Bisa ga <span class="text-info">#INDONESIA</span> menang
                                    <br>
                                    <div class="row pt-4">
                                        <div class="col"><span><i class="fa-solid fa-comment"></i></span></div>
                                        <div class="col"><span><i class="fa-solid fa-share-from-square"></i></span>
                                        </div>
                                        <div class="col"><i class="fa-solid fa-heart"></i></div>
                                        <div class="col"><span><i class="fa-solid fa-share-nodes"></i></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- TWEET 4 -->
                        <div class="row mt-1 border d-flex  ">
                            <div class="col-3 mt-2">

                                <img class="rounded-circle" src=" <?php echo e(Vite::asset('routing-tiray/resources/images/profile lala.png')); ?>" alt="" height="50px">
                            </div>
                            <div class="col-9 ">
                                <div class="row d-flex justify-content-between align-items-center ps-1">
                                    <div class="col-10 pt-2 ">
                                        <div>
                                            <p><span class="fw-bold">Tervelatuq </span>@tervelle . 1h</p>
                                        </div>
                                    </div>
                                    <div class="col-1 me-2 ps-0">
                                        <div><span><i class="fa-solid fa-ellipsis fs-5 py-3"></i></span></div>
                                    </div>
                                </div>
                                <div class="col">
                                    Kamu kira <span class="text-info">#KITA</span> bakal bersatu?
                                    <br>
                                    <div class="row pt-4">
                                        <div class="col"><span><i class="fa-solid fa-comment"></i></span></div>
                                        <div class="col"><span><i class="fa-solid fa-share-from-square"></i></span>
                                        </div>
                                        <div class="col"><i class="fa-solid fa-heart"></i></div>
                                        <div class="col"><span><i class="fa-solid fa-share-nodes"></i></span></div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <!-- TWEET 5 -->
                        <div class="row mt-1 border d-flex  ">
                            <div class="col-3 mt-2">

                                <img class="rounded-circle" src=" <?php echo e(Vite::asset('/resources/images/profile lala.png')); ?>"alt="" height="50px">
                            </div>
                            <div class="col-9 ">
                                <div class="row d-flex justify-content-between align-items-center ps-1">
                                    <div class="col-10 pt-2 ">
                                        <div>
                                            <p><span class="fw-bold">Tervelatuq </span>@tervelle . 23h</p>
                                        </div>
                                    </div>
                                    <div class="col-1 me-2 ps-0">
                                        <div><span><i class="fa-solid fa-ellipsis fs-5 py-3"></i></span></div>
                                    </div>
                                </div>
                                <div class="col">
                                    Bismillah <span class="text-info">#2k24</span> dipermudah segala hal
                                    <br>
                                    <div class="row pt-4">
                                        <div class="col"><span><i class="fa-solid fa-comment"></i></span></div>
                                        <div class="col"><span><i class="fa-solid fa-share-from-square"></i></span>
                                        </div>
                                        <div class="col"><i class="fa-solid fa-heart"></i></div>
                                        <div class="col"><span><i class="fa-solid fa-share-nodes"></i></span></div>
                                    </div>

                                </div>

                            </div>
                        </div>



                    </div>
                </div>
            </div>
            <!-- RIGHT SIDE BAR -->
            <div class="col-lg-3 d-none d-lg-block  w-25 h-25 right_side_bar">
                <div class="">
                    <div class="bg-opacity-10 bg-black rounded-pill">
                        <div class="row d-flex align-items-center ">
                            <div class="col-2 text-end fs-4">
                                <span><i class="fa-solid fa-magnifying-glass ps-4"></i></span>
                            </div>
                            <div class="col-10"><input type="text"
                                    class="form-control-lg border-0 me-1 w-75 bg-transparent"
                                    placeholder="Search Twitter"></div>
                        </div>
                    </div>
                    <div class="row bg-opacity-10 bg-black mx-1 my-2 pb-3 rounded-3">
                        <div class="col">
                            <div class="trending">
                                <p class="fs-6 fw-bold py-2">Trends for you</p>
                                <div class="row">
                                    <div class="col-9">
                                        <p class="m-0">Trending in Indonesia</p>
                                    </div>
                                    <div class="col-3 text-end">
                                        <span><i class="fa-solid fa-ellipsis pe-2"></i></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="fs-6 fw-bold mb-0">Fadil Jaidi</p>
                                        <p class="">12.7k Tweets</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-9">
                                        <p class="m-0">Artist . Trending</p>
                                    </div>
                                    <div class="col-3 text-end">
                                        <span><i class="fa-solid fa-ellipsis pe-2"></i></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="fs-6 fw-bold mb-0">#TikTok</p>
                                        <p class="">101k Tweets</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-9">
                                        <p class="m-0">Trending in Indonesia</p>
                                    </div>
                                    <div class="col-3 text-end">
                                        <span><i class="fa-solid fa-ellipsis pe-2"></i></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="fs-6 fw-bold mb-0">Jatinangor</p>
                                        <p class="">132k Tweets</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-9">
                                        <p class="m-0">Trending in Indonesia</p>
                                    </div>
                                    <div class="col-3 text-end">
                                        <span><i class="fa-solid fa-ellipsis pe-2"></i></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="fs-6 fw-bold mb-0">#JUICYLUICY</p>
                                        <p class="">8,104 Tweets</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-9">
                                        <p class="m-0">Trending in Indonesia</p>
                                    </div>
                                    <div class="col-3 text-end">
                                        <span><i class="fa-solid fa-ellipsis pe-2"></i></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="fs-6 fw-bold mb-0">Aldi Taher</p>
                                        <p class="">141k Tweets</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-9">
                                        <p class="m-0">Trending in Indonesia</p>
                                    </div>
                                    <div class="col-3 text-end">
                                        <span><i class="fa-solid fa-ellipsis pe-2"></i></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="fs-6 fw-bold mb-0">#MARVEL</p>
                                        <p class="">2,449 Tweets</p>
                                    </div>
                                </div>

                                <span class="text-info">Show more</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
</body>

</html>
<?php /**PATH C:\Users\BAKPAO\Tery\SEMESTER 3\PAW\PRAKTIKUM 11\routing-tiray\resources\views/Twitter.blade.php ENDPATH**/ ?>