@extends('user.auth.layout')

@section('main_content')

<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
    <div class="col">
        <div class="card rounded-4">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="">
                        <p class="mb-1">Today's Posts</p>
                        <h4 class="mb-0">5.8K</h4>
                        <p class="mb-0 mt-2 font-13"><strong style="font-weight: 500;color:#009688;"><i
                                    class="bi bi-arrow-up"></i><span>22.5%</strong> from last week</span></p>
                    </div>
                    <div class="ms-auto widget-icon bg-primary text-white">
                        <i class="lni lni-blogger"></i>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="col">
        <div class="card rounded-4">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="">
                        <p class="mb-1">Published Post </p>
                        <h4 class="mb-0">9,786</h4>
                        <p class="mb-0 mt-2 font-13"><strong style="font-weight: 500;color:#009688;"><i
                                    class="bi bi-arrow-up"></i><span>13.2%</strong> from last week</span></p>
                    </div>
                    <div class="ms-auto widget-icon bg-color-three text-white">
                        <i class="lni lni-blogger"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card rounded-4">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="">
                        <p class="mb-1">Pending Post</p>
                        <h4 class="mb-0">50</h4>
                        <p class="mb-0 mt-2 font-13"><strong style="font-weight: 500;color:#ff3030;"><i
                                    class="lni lni-arrow-down"></i><span>12.3%</strong> from last week</span></p>
                    </div>
                    <div class="ms-auto widget-icon bg-orange text-white">
                        <i class="lni lni-library"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card rounded-4">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="">
                        <p class="mb-1">Draft</p>
                        <h4 class="mb-0">853</h4>
                        <p class="mb-0 mt-2 font-13"><strong style="font-weight: 500;color:#009688;"><i
                                    class="bi bi-arrow-up"></i><span>32.7%</strong> from last week</span></p>
                    </div>
                    <div class="ms-auto widget-icon bg-info text-white">
                        <i class="fadeIn animated bx bx-pencil"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!--end row-->
<div class="row">
    <div class="col-12 col-lg-8 col-xl-8 d-flex">
        <div class="card w-100 rounded-4">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <h6 class="mb-0">Visitor This Month</h6>
                    <div class="fs-5 ms-auto dropdown">
                        <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i
                                class="bi bi-three-dots"></i></div>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                    <div class="">
                        <h4 class="text-success mb-0">9,279</h4>
                        <p class="mb-0">Today Visitor</p>
                    </div>
                    <div class="vr"></div>
                    <div class="">
                        <h4 class="text-black mb-0">555,629</h4>
                        <p class="mb-0">Monthly visitor</p>
                    </div>
                </div>
                <div id="chart1"></div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4 col-xl-4 d-flex">
        <div class="row">
            <div class="col-12">
                <div class="card rounded-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1">Schedule Post</p>
                                <h4 class="mb-0">853</h4>
                                <p class="mb-0 mt-2 font-13"><strong style="font-weight: 500;color:#009688;"><i
                                            class="bi bi-arrow-up"></i><span>32.7%</strong> from last week</span></p>
                            </div>
                            <div class="ms-auto widget-icon bg-color-two text-white">
                                <i class="lni lni-timer"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card rounded-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1">Rss Feeds</p>
                                <h4 class="mb-0">853</h4>
                                <p class="mb-0 mt-2 font-13"><strong style="font-weight: 500;color:#009688;"><i
                                            class="bi bi-arrow-up"></i><span>32.7%</strong> from last week</span></p>
                            </div>
                            <div class="ms-auto widget-icon bg-danger text-white">
                                <i class="lni lni-rss-feed"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card rounded-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1">Total Reporters</p>
                                <h4 class="mb-0">853</h4>
                                <p class="mb-0 mt-2 font-13"><strong style="font-weight: 500;color:#009688;"><i
                                            class="bi bi-arrow-up"></i><span>32.7%</strong> from last week</span></p>
                            </div>
                            <div class="ms-auto widget-icon bg-color-five text-white">
                                <i class="bi bi-person-lines-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card rounded-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1">Total Users</p>
                                <h4 class="mb-0">853</h4>
                                <p class="mb-0 mt-2 font-13"><strong style="font-weight: 500;color:#009688;"><i
                                            class="bi bi-arrow-up"></i><span>32.7%</strong> from last week</span></p>
                            </div>
                            <div class="ms-auto widget-icon bg-color-two text-white">
                                <i class="lni lni-users"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 col-lg-6 col-xl-6 d-flex">
        <div class="card rounded-4 w-100">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <h6 class="mb-0">Visitor By Countries</h6>
                    <div class="fs-5 ms-auto dropdown">

                        <!--  <ul class="dropdown-menu">
                           <li><a class="dropdown-item" href="#">Action</a></li>
                           <li><a class="dropdown-item" href="#">Another action</a></li>
                           <li>
                             <hr class="dropdown-divider">
                           </li>
                           <li><a class="dropdown-item" href="#">Something else here</a></li>
                         </ul> -->
                    </div>
                </div>
                <div id="world-map" style="height: 242px;"></div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center">
                    <tbody>
                    <tr>
                        <td><i class="flag-icon flag-icon-bd"></i></td>
                        <td><i class="bi bi-circle-fill me-2 text-success"></i> Bangladesh</td>
                        <td>
                            <p class="mb-0"> <span class="fw-bold">72,000</span> Visitors </p>
                        </td>
                        <td>30%</td>
                    </tr>
                    <tr>
                        <td><i class="flag-icon flag-icon-gb"></i></td>
                        <td><i class="bi bi-circle-fill me-2 text-primary"></i> Russia</td>
                        <td>
                            <p class="mb-0"> <span class="fw-bold">28,000</span> Visitors</p>
                        </td>
                        <td>40%</td>
                    </tr>
                    <tr>
                        <td><i class="flag-icon flag-icon-au"></i></td>
                        <td><i class="bi bi-circle-fill me-2 text-warning"></i> Australia</td>
                        <td>
                            <p class="mb-0"> <span class="fw-bold">58,000</span> Visitors</p>
                        </td>
                        <td>60%</td>
                    </tr>
                    <tr>
                        <td><i class="flag-icon flag-icon-in"></i></td>
                        <td><i class="bi bi-circle-fill me-2 text-secondary"></i> India</td>
                        <td>
                            <p class="mb-0"> <span class="fw-bold">68,000</span> Visitors</p>
                        </td>
                        <td>55%</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 col-xl-6 d-flex">
        <div class="card rounded-4 w-100">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <h6 class="mb-0">Most Popular Article</h6>

                </div>
                <div class="">
                    <div class="d-flex align-items-scenter gap-3  p-card ">
                        <div class="product-box border">
                            <img src="assets/images/post/1654411238AS3FmMEN.jpg" alt="product img">
                        </div>
                        <div class="flex-grow-1">
                            <div class="progress-wrapper">
                                <p class="mb-2"><span class="cate-post text-red">বাণিজ্য-অন্যান্য</span>
                                    <span class="ms-3 date-post-p">Jun 5, 2022</span><span class="float-end fw-bold visitor-p">4,216 <span>Visitor</span></span></p>
                                <div class="post-title-popular">
                                    <h4>দেশেই তৈরি হচ্ছে সিরিশ কাগজ</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center gap-3  p-card ">
                        <div class="product-box border">
                            <img src="assets/images/post/1654410704WtUmoE7z.jpg" alt="product img">
                        </div>
                        <div class="flex-grow-1">
                            <div class="progress-wrapper">
                                <p class="mb-2"><span class="cate-post text-red">অর্থনীতি</span>  <span
                                        class="ms-3 date-post-p">Jun 5, 2022</span><span class="float-end fw-bold visitor-p">10,216 <span>Visitor</span></span></p>
                                <div class="post-title-popular">
                                    <h4>কৃষিতে ভর্তুকি থেকে ধীরে ধীরে সরে আসা উচিত: পরিকল্পনামন্ত্রী</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center  gap-3 p-card ">
                        <div class="product-box border">
                            <img src="assets/images/post/1654410369xxEcOpur.jpg" alt="product img">
                        </div>
                        <div class="flex-grow-1">
                            <div class="progress-wrapper">
                                <p class="mb-2"><span class="cate-post text-red">অর্থনীতি</span> <span class="dots1"></span> <span
                                        class="ms-3 date-post-p">Jun 5, 2022</span><span class="float-end fw-bold visitor-p">4,216 <span>Visitor</span></span></p>
                                <div class="post-title-popular">
                                    <h4>ভর্তুকি আসছে ৮৩ হাজার কোটি টাকার</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center  gap-3 p-card ">
                        <div class="product-box border">
                            <img src="assets/images/post/1654409933l4ZhrQ0B.jpg" alt="product img">
                        </div>
                        <div class="flex-grow-1">
                            <div class="progress-wrapper">
                                <p class="mb-2"><span class="cate-post text-red">স্বাস্থ্য ও পরিবেশ-অন্যান্য</span> <span
                                        class="dots1"></span> <span class="ms-3 date-post-p">Jun 5, 2022</span><span class="float-end fw-bold visitor-p">4,216
                        <span>Visitor</span></span></p>
                                <div class="post-title-popular">
                                    <h4>যুদ্ধজয়ের পর আরও সমৃদ্ধিশালী ইউক্রেনের জন্ম হবে</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center  gap-3 p-card ">
                        <div class="product-box border">
                            <img src="assets/images/post/1654408204LIolA9P6.jpg" alt="product img">
                        </div>
                        <div class="flex-grow-1">
                            <div class="progress-wrapper">
                                <p class="mb-2"><span class="cate-post text-red">ফুটবল</span> <span class="dots1"></span> <span
                                        class="ms-3 date-post-p">Jun 5, 2022</span><span class="float-end fw-bold visitor-p">4,216 <span>Visitor</span></span></p>
                                <div class="post-title-popular">
                                    <h4>আর্জেন্টিনার কাছে হারের ক্ষতে জার্মান-মলম ইতালির</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<!--end row-->
@endsection