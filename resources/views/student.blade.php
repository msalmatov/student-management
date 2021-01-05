<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Student management system</title>
  </head>
  <body>
    @if($layout == 'index')
        <div class='container-fluid'>
            <div class="row">
                <section class="col">
                    @include("studentlist")
                </section>
                <section class="col"></section>
            </div>
        </div>
    @elseif($layout == 'create')
        <div class='container-fluid'>
            <div class="row">
                <section class="col">
                    @include("studentlist")
                </section>
                <section class="col">
                    <form action={{ url('/store') }} method="post">
                        @csrf
                        <div class="mb-3">
                            <label >CNE</label>
                            <input name="cne" type="text" class="form-control" placeholder="Enter cne">
                        </div>
                        <div class="mb-3">
                            <label >First Name</label>
                            <input name="firstName" type="text" class="form-control" placeholder="Enter the first name">
                        </div>
                        <div class="mb-3">
                            <label >Second Name</label>
                            <input name="secondName" type="text" class="form-control" placeholder="Enter the second name">
                        </div>
                        <div class="mb-3">
                            <label >Age</label>
                            <input name="age" type="text" class="form-control" placeholder="Enter the age">
                        </div>
                        <div class="mb-3">
                            <label >Speciality</label>
                            <input name="speciality" type="text" class="form-control" placeholder="Enter Speciality">
                        </div>
                        <input type="submit" class="btn btn-info" value="Save" />
                        <input type="reset" class="btn btn-warning" value="Reset" />
                    </form>
                </section>
            </div>
        </div>
    @elseif($layout == 'show')
        <div class='container-fluid'>
            <div class="row">
                <section class="col">
                    @include("studentlist")
                </section>
                <section class="col"></section>
            </div>
        </div>
    @elseif($layout == 'edit')
        <div class='container-fluid'>
            <div class="row">
                <section class="col">
                    @include("studentlist")
                </section>
                <section class="col">
                    <form action={{ url('/update/'.$student->id) }} method="post">
                        @csrf
                        <div class="mb-3">
                            <label >CNE</label>
                            <input value="{{ $student->cne }}" name="cne" type="text" class="form-control" placeholder="Enter cne">
                        </div>
                        <div class="mb-3">
                            <label >First Name</label>
                            <input value="{{ $student->firstName }}" name="firstName" type="text" class="form-control" placeholder="Enter the first name">
                        </div>
                        <div class="mb-3">
                            <label >Second Name</label>
                            <input value="{{ $student->secondName }}" name="secondName" type="text" class="form-control" placeholder="Enter the second name">
                        </div>
                        <div class="mb-3">
                            <label >Age</label>
                            <input value="{{ $student->age }}" name="age" type="text" class="form-control" placeholder="Enter the age">
                        </div>
                        <div class="mb-3">
                            <label >Speciality</label>
                            <input value="{{ $student->speciality }}" name="speciality" type="text" class="form-control" placeholder="Enter Speciality">
                        </div>
                        <input type="submit" class="btn btn-info" value="Update" />
                        <input type="reset" class="btn btn-warning" value="Reset" />
                    </form>
                </section>
            </div>
        </div>
    @endif
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>