<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">



    <style>
        .glyphicon {
            margin-right: 5px;
        }

        .thumbnail {
            margin-bottom: 20px;
            padding: 0px;
            -webkit-border-radius: 0px;
            -moz-border-radius: 0px;
            border-radius: 0px;
        }

        .item.list-group-item {
            float: none;
            width: 100%;
            background-color: #fff;
            margin-bottom: 10px;
        }

        .item.list-group-item:nth-of-type(odd):hover,
        .item.list-group-item:hover {
            background: #428bca;
        }

        .item.list-group-item .list-group-image {
            margin-right: 10px;
        }

        .item.list-group-item .thumbnail {
            margin-bottom: 0px;
        }

        .item.list-group-item .caption {
            padding: 9px 9px 0px 9px;
        }

        .item.list-group-item:nth-of-type(odd) {
            background: #eeeeee;
        }

        .item.list-group-item:before,
        .item.list-group-item:after {
            display: table;
            content: " ";
        }

        .item.list-group-item img {
            float: left;
        }

        .item.list-group-item:after {
            clear: both;
        }

        .list-group-item-text {
            margin: 0 0 11px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="well well-sm">
            <strong>Display</strong>
            <div class="btn-group">
                <a href="#" id="list" class="btn btn-default btn-sm"><span
                        class="glyphicon glyphicon-th-list">
                    </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                        class="glyphicon glyphicon-th"></span>Grid</a>
            </div>
        </div>
        <div id="products" class="row list-group">
            @foreach ($products as $product)
                <div class="item  col-xs-4 col-lg-4">
                    <div class="thumbnail">
                        <img class="group list-group-image" src="{{ $product->image }}" alt="" />
                        <div class="caption text-center">
                            <h4 class="group inner list-group-item-heading">{{ $product->name }}</h4>
                            <p class="group inner list-group-item-text">{{ $product->description }}</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-12">
                                    <p class="lead">Precio: {{ number_format($product->price, 0) }}</p>
                                </div>
                                <div class="col-xs-12 col-md-12">
                                    <p class="lead">Cantidad: {{ $product->quantity }}</p>
                                </div>
                                <div class="col-xs-12 col-md-12">
                                    <a href="{{ url('show-product/'.$product->id) }}" class="btn btn-success">comprar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#list').click(function(event) {
                event.preventDefault();
                $('#products .item').addClass('list-group-item');
            });
            $('#grid').click(function(event) {
                event.preventDefault();
                $('#products .item').removeClass('list-group-item');
                $('#products .item').addClass('grid-group-item');
            });
        });
    </script>
</body>

</html>
