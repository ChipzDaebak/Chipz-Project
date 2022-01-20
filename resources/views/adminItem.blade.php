<!DOCTYPE html>
<html lang="en">
  <head>
    @include('adminstyle')

    <style type="text/css">
        .title{
            color:white; 
            padding-top: 25px; 
            font-size: 25px;
        }

        label{
            width: 150px;
            display: inline-block;
        }
    </style>

  </head>
  <body>

      @include('scrollbar')
      @include('navbar')

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">
                <h1 class="title">Add Products</h1>

                @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        {{session()->get('message')}}
                    </div>
                @endif

                <form action="{{url('productupload')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="padding: 17px;">
                        <label>Product Name: </label>
                        <input style="color:black;" type="text" name="title" placeholder="Input your product" required="">
                    </div>

                    <div style="padding: 17px;">
                        <label>Product Price: </label>
                        <input style="color:black;" type="number" name="price" placeholder="Input product price" required="">
                    </div>

                    <div style="padding: 17px;">
                        <label>Product Description: </label>
                        <input style="color:black;" type="text" name="desc" placeholder="Input product description" required="">
                    </div>

                    <div style="padding: 17px;">
                        <label>Product Quantity: </label>
                        <input style="color:black;" type="text" name="qty" placeholder="Input product quantity" required="">
                    </div>

                    <div style="padding: 17px;">
                        <input type="file" name="file">
                    </div>

                    <div style="padding: 17px;">
                        <input class="btn btn-success" type="submit">
                    </div>
                </form>
            </div>
        </div>
          <!-- partial -->
        @include('adminscript')
  </body>
</html>