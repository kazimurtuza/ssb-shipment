<!-- Bootstrap 5 Starter template -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
            crossorigin="anonymous"
    />

    <title>Hello, world!</title>
</head>
<style>

    .btn-color{
        background-color: #0e1c36;
        color: #fff;

    }

    .profile-image-pic{
        height: 200px;
        width: 200px;
        object-fit: cover;
    }



    .cardbody-color{
        background-color: #ebf2fa;
    }

    a{
        text-decoration: none;
    }

</style>
<body>


<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="text-center text-dark mt-5">Registration Form</h2>
            {{--<div class="text-center mb-5 text-dark">Made with bootstrap</div>--}}
            <div class="card my-5 ">

                <form  method="post" action="{{route('user.register')}}" class="card-body cardbody-color p-lg-5">

                @csrf
                    <div class="text-center">
                        <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                             width="200px" alt="profile">
                    </div>

                    <div class="mb-3">
                        <input type="text" name="name" name="text" class="form-control" id="Username" aria-describedby="emailHelp"
                               placeholder="Name" required>
                    </div>
                 <div class="mb-3">
                        <input type="text" name="phone" name="text" class="form-control" id="Username" aria-describedby="emailHelp"
                               placeholder="Phone" required>
                    </div>
                <div class="mb-3">
                        <input type="text" name="email" class="form-control" id="Username" aria-describedby="emailHelp"
                               placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control" id="password" placeholder="password" required>
                    </div>
                    <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100">Registered</button></div>
                    {{--<div id="emailHelp" class="form-text text-center mb-5 text-dark">Not--}}
                        {{--Registered? <a href="#" class="text-dark fw-bold"> Create an--}}
                            {{--Account</a>--}}
                    {{--</div>--}}
                </form>
            </div>

        </div>
    </div>
</div>




<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"
></script>


</body>
</html>














