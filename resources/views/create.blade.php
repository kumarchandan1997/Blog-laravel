<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form action="{{ url('blog_store') }}" method="POST" enctype="multipart/form-data">
 @csrf
  <div class="form-group">
    <label>Title</label>
    <input type="text" name="title" class="form-control"  placeholder="">
  </div>
  <br>
  <div class="form-group">
    <label>Description</label>
    <input type="text" name="des" class="form-control"  placeholder="">
  </div>
  <br>
  <div class="form-group">
    <label>slug</label>
    <input type="text" name="slug" class="form-control"  placeholder="">
  </div>
  <br>
  <div class="form-group">
    <label>Image</label>
    <input type="file" name="image" class="form-control"  placeholder="">
  </div>
  <br>
  <div class="form-group">
    <label>Short Description</label>
    <input type="text" name="short_des" class="form-control"  placeholder="">
  </div>
  <br>
  
  <div class="form-group">
    <label>Meta Title</label>
    <input type="text" name="meta_title" class="form-control"  placeholder="">
  </div>
  <br>
  <div class="form-group">
    <label>Meta Description</label>
    <input type="text" name="meta_des" class="form-control"  placeholder="">
  </div>
  <br>
  <div class="form-group">
    <label>Meta Keyword</label>
    <input type="text" name="meta_keyword" class="form-control"  placeholder="">
  </div>
  <br>
  <div class="form-group">
    <label>Og Title</label>
    <input type="text" name="og_title" class="form-control"  placeholder="">
  </div>
  <br>
  <div class="form-group">
    <label>Og Description</label>
    <input type="text" name="og_des" class="form-control"  placeholder="">
  </div>
  <br>
  <div class="form-group">
    <label>Og Image</label>
    <input type="file" name="og_image" class="form-control"  placeholder="">
  </div>
  <br>
  <div class="form-group">
    <label>Date</label>
    <input type="date" name="date" class="form-control"  placeholder="">
  </div>
  <br>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>