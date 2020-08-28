<!DOCTYPE html>
<html lang="en">

<head>

  @include('Frontend/layouts/head')

</head>

<body>

  @include('Frontend/layouts/nav')

  <!-- Page Header -->
  @include('Frontend/layouts/pageheader')
  <!-- Main Content -->
    @section('main-content')
        @show

  <!-- Footer -->
 @include('Frontend/layouts/footer')
</body>

</html>
