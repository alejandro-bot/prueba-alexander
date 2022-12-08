<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
    <div class="panel panel-default mt-5">
        <div class="panel-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ url('storeProduct') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $id }}">
                            <input type="hidden" name="password" value="123456789">
                            <div class="col-md-3">
                                <input type="text" name="name" placeholder="nombre completo">
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="email" placeholder="correo electronico">
                            </div>
                            <div class="col-md-3">
                                <input type="number" name="quantity" placeholder="cantidad">
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="address" placeholder="direccion">
                            </div>
                            <div class="col-md-12 text-center">
                               <button type="submit" class="btn btn-success">Comprar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div>

</body>

</html>
