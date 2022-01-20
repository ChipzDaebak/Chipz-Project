<!DOCTYPE html>
<html lang="en">
  <head>
    @include('adminstyle')
  </head>
  <body>

      @include('scrollbar')
      @include('navbar')

        <!-- partial -->
        @include('adminbody')
          <!-- partial -->
        @include('adminscript')
  </body>
</html>