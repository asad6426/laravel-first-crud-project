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
                        <th>Semester Id</th>
                        <th>Batch</th>
                        <th>Level Term</th>
                        <th>Course Code</th>
                        <th>Course Title</th>
                    </tr>
                    @foreach($room as $row)
                        <tr>
                            <td>{{ $row->semester_id }}</td>
                            <td>{{ $row->batch }}</td>
                            <td>{{ $row->level_term }}</td>
                            <td>{{ $row->course_code }}</td>
                            <td>{{ $row->course_title }}</td>
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
