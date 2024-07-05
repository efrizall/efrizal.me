<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Upload</title>
</head>
<body>
     @if (session()->has('success'))
          {{ session('success') }}
     @endif
     <form action="{{route('uploadDok')}}" method="post" enctype="multipart/form-data">
          @csrf
          <input type="file" id="dok" name="dok">
          <button type="submit">Simpan</button>
     </form>
</body>
</html>