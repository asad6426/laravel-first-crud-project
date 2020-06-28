<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/semester.css') }}">

    <title>post</title>
</head>

<body>
    <a href="{{ url('/') }}" class="btn btn-info asad">Home</a>
    <div class="container p-5">
        <div class="col-lg-4"></div>
        <div class="container col-lg-8 ">
            <a href="{{ route('teacher') }}" class="btn btn-danger">Add Teacher</a>
            <a href="{{ route('all.teacher') }}" class="btn btn-info">All Teacher</a>

        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <form class="col-lg-7" action="{{ route('teacher.info') }}" method="post">
                    @csrf
                    <div class=" control-group">
                        <div class="form-group floating-label-form-group control">
                            <label for="">Teachers Id</label>
                            <input type="text" class="form-control" placeholder="Teachers Id" name="tid" required>
                        </div>
                    </div>
                    <div class=" control-group">
                        <div class="form-group floating-label-form-group control">
                            <label for="">Teachers Name</label>
                            <input type="text" class="form-control" placeholder="Teachers name" name="t_name" required>
                        </div>
                    </div>
                    <div class=" control-group">
                        <div class="form-group floating-label-form-group control">
                            <label for="">Teachers Inicial Name</label>
                            <input type="text" class="form-control" placeholder="Teachers Inicial Name" name="t_i_name"
                                required>
                        </div>
                    </div>
                    <div class=" control-group">
                        <div class="form-group floating-label-form-group control">
                            <label for="">Teachers Email</label>
                            <input type="text" class="form-control" placeholder="Teachers Email" name="email" required>
                        </div>
                    </div>
                    <div class=" control-group">
                        <div class="form-group floating-label-form-group control">
                            <label for="">Teachers Phone Number</label>
                            <input type="text" class="form-control" placeholder="Teachers Phone Number"
                                name="phone_number" required>
                        </div>
                    </div>
                    <div class=" control-group">
                        <div class="form-group floating-label-form-group control">
                            <label for="">Teachers Maximum Credit</label>
                            <input type="text" class="form-control" placeholder="Teachers Maximum Credit" name="max_cr"
                                required>
                        </div>
                    </div>
                    <div class=" control-group">
                        <div class="form-group floating-label-form-group control">
                            <label for="">Teachers Day Off 1</label>
                            <input type="text" class="form-control" placeholder="Teachers Day Off 1" name="day_off"
                                required>
                        </div>
                    </div>
                    <div class=" control-group">
                        <div class="form-group floating-label-form-group control">
                            <label for="">Teachers Day Off 2</label>
                            <input type="text" class="form-control" placeholder="Teachers Day Off 2" name="day_off2"
                                required>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" id="sendMessageButton">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>
