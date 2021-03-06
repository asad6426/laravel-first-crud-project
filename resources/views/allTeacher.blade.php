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
            <a href="{{ route('course') }}" class="btn btn-danger">Add course</a>
            <a href="{{ route('all.course') }}" class="btn btn-info">All Course</a>

        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <table class="table table-responsive">
                    <tr>
                        <th>Teacher's Id</th>
                        <th>Teacher's Name</th>
                        <th>Teacher's Iniial Name</th>
                        <th>Email</th>
                        <th>Phone number</th>
                        <th>Maximum Credit</th>
                        <th>Off Day One</th>
                        <th>Off Day Two</th>
                    </tr>
                    @foreach($room as $row)
                        <tr>
                            <td>{{ $row->tid }}</td>
                            <td>{{ $row->t_name }}</td>
                            <td>{{ $row->t_i_name }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->phone_number }}</td>
                            <td>{{ $row->max_cr }}</td>
                            <td>{{ $row->day_off }}</td>
                            <td>{{ $row->day_off2 }}</td>
                        </tr>
                    @endforeach
                </table>
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
