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

        {{-- request errors --}}
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach

        {{-- measure shape space --}}
        <form action="{{url('measure')}}" method="GET">

            {{-- select shape --}}
            <div class="form-group">
                <label for="shape">Shape</label>
                <select class="custom-select " name="shape" id="shape">
                    <option selected>Select</option>
                    <option value="Square">Square</option>
                    <option value="Rectangle">Rectangle</option>
                    <option value="Circle">Circle</option>
                </select>
            </div>

            {{-- square, rectangle length --}}
            <div class="form-group m-2">
              <label for="length">Lenght</label>
              <input type="number"
                  class="form-control form-control-sm" name="length" id="length" aria-describedby="lengthId" placeholder="Length">
              <small id="lengthId" class="form-text text-muted">square length</small>
            </div>

            {{-- rectangle width --}}
            <div class="form-group m-2">
              <label for="width">Width</label>
              <input type="number"
                  class="form-control form-control-sm" name="width" id="width" aria-describedby="widthId" placeholder="width">
              <small id="widthId" class="form-text text-muted">rectangle width</small>
            </div>

            {{-- submit measure form --}}
            <button type="submit mt-2" class="btn btn-primary">Submit</button>

        </form>
    </div>

    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>
