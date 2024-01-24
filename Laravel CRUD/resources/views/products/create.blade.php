<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Product</title>
</head>

<body>
    <div style="width: 50%; margin: 50px auto; ">
        <h1>Create Product</h1>
        <a href="{{ route('product.index') }}">
            <button class="btn btn-secondary"
                style="padding: 0px 20px; cursor: pointer; margin: 10px 0px; background: none; color: blue;">Back</button>
        </a>
        <div>
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>

            @endif
        </div>
        <form method="post" action="{{ route('product.store') }}">
            @csrf
            @method('post')

            <div class="form-group">
                <label for="productName">Product Name</label>
                <input name="name" type="text" class="form-control" id="product_name" placeholder="Product Name">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input name="description" type="text" class="form-control" id="description"
                    placeholder="Product Description">
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input name="price" type="number" class="form-control" id="price" placeholder="Product Price">
            </div>

            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input name="qty" type="number" class="form-control" id="quantity" placeholder="Product Quantity">
            </div>

            <button type="submit" class="btn btn-primary" style="padding: 5px 20px; cursor: pointer">Create</button>
        </form>
    </div>

</body>

</html>
