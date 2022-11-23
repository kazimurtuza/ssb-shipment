
@extends('user.auth.layout')

@section('main_content')
    <div class="row m-4">
        <div class="col-sm-12 d-flex justify-content-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add Driver
            </button>
        </div>
    </div>

    <div class="row mobile-row">
        <div class="row mobile-row">
            <div class="col-12 d-flex">
                <div class="card rounded-4 w-100 mobile-card">
                    <div class="card-body mobile-card-body">
                        <div class="post-wrap">
                            <div class="post-header flex-wrap justify-content-between d-flex align-items-center">
                                <div class="post-details margin-right">
                                    <div class="post-header-title">
                                        <p>Customer</p>
                                    </div>
                                </div>
                                <div class="post-reporter margin-right">
                                    <div class="post-header-title">
                                        <p>Phone No.</p>
                                    </div>
                                </div>
                                <div class="post-area margin-right">
                                    <div class="post-header-title">
                                        <p>Email</p>
                                    </div>
                                </div>
                                <div class="post-status margin-right">
                                    <div class="post-header-title text-center">
                                        <p>Status</p>
                                    </div>
                                </div>
                                <div class="post-action margin-right">
                                    <div class="post-header-title">
                                        <span class="text-end"><i class="lni lni-cog"></i></span>
                                    </div>
                                </div>
                            </div>
                            @foreach($driver as $driver_info)
                                <div class="post-body d-flex align-items-center flex-wrap  justify-content-between">
                                    <div class="post-details-box margin-right">

                                        <div class="d-flex align-items-center  gap-3">
                                            <div class="product-box border">
                                                <a href="#"><img src="assets/images/post/1654408204LIolA9P6.jpg" alt="product img"></a>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="progress-wrapper">
                                                    {{--<p class="mb-2"> <a href="#"><span class="cate-post text-red">ফুটবল ফুটবল</span></a> <span--}}
                                                    {{--class="dots1"></span> <span class="ms-3 date-post-p">Oct 15, 2022</span> <span--}}
                                                    {{--class="dots2"></span> <span class="ms-3 date-post-p">14:00 PM</span></p>--}}
                                                    <div class="post-title-popular">
                                                        <a href="#">
                                                            <h4>{{$driver_info->driver_name}}</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mobile-bg-card d-block d-md-none"></div>
                                    <div class="reporter-box margin-right">
                                        <a href="javascript:void(0);">
                                            <div class="reporter-item d-flex align-items-center">
                                                <div class="reporter-img">
                                                    <img src="assets/images/avatars/avatar-11.png" alt="">
                                                </div>
                                                <div class="reporter-name">
                                                    <h4>{{$driver_info->mobile}}</h4>
                                                    <p>Editor</p>
                                                </div>
                                            </div>
                                        </a>


                                    </div>
                                    <div class="area-box margin-right">
                                        <a href="javascript:void(0);"><p class="d-flex align-items-center"><span><i class="bi bi-pin-map-fill"></i></span> {{$driver_info->email}}</p></a>

                                    </div>
                                    <div class="status-box margin-right">
                                        <span>Published</span>
                                        <!-- <span>Pending</span>
                                      <span>Unpublished</span> -->
                                    </div>
                                    <div class="action-box margin-right">
                                        <a href="javascript:void(0);" class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                                           data-bs-toggle="dropdown"><span class="text-end custom-toggle-icon"><i
                                                        class="fadeIn animated bx bx-caret-down-circle"></i></span></a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a class="dropdown-item custom-dropdown-item" href="javascript:void(0);">
                                                    <div class="d-flex align-items-center dropdown-text-box">
                                                        <div class=""><i class="fadeIn animated bx bx-info-circle"></i></div>
                                                        <div class="ms-1 ms-md-3"><span>View on Frontened</span></div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <div class="d-flex align-items-center dropdown-text-box">
                                                        <div class=""><i class="fadeIn animated bx bx-edit"></i></div>
                                                        <div class="ms-1 ms-md-3"><span>Edit</span></div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <div class="d-flex align-items-center dropdown-text-box">
                                                        <div class=""><i class="fadeIn animated bx bx-minus"></i></div>
                                                        <div class="ms-1 ms-md-3"><span>Remove From Slider</span></div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    {{--modal--}}


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Driver</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="{{route('driver.create')}}" >
                    @csrf

                    <div class="modal-body p-3">
                        <div class="row justify-content-center">
                            <div class="col-sm-9">
                                <div class="mb-2">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Pick Up Date</label>
                                    <input type="date" name="pick_up_date" class="form-control">
                                </div>
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Shipping Code</label>
                                    <input type="text" name="shipping_code" class="form-control">
                                </div>

                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Driver</label>
                                    <input type="file" name="photo" class="form-control">
                                </div>

                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection