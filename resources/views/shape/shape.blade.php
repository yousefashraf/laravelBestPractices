<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container p-5">
        <form action="{{url('measure')}}" method="GET">
            <div class="form-group">
              <label for="">Shape</label>
              <input type="text"
                class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
              <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
        </form>
    </div>

    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>
