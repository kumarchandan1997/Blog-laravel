<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Blog</title>
</head>
<body>
<button type="button" class="btn btn-success">  <a href="{{ url('blog_create') }}" class="btn btn-primary float-end">Add Blog</a></button>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Slag</th>
      <th scope="col">Image</th>
      <th scope="col">Short Des</th>
      <th scope="col">Meta Title</th>
      <th scope="col">Meta des</th>
      <th scope="col">Meta Keyword</th>
      <th scope="col">Og Title</th>
      <th scope="col">Og Des</th>
      <th scope="col">Og Image</th>
      <th scope="col">Date</th>
      <th scope="col">Show</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($blog as $item)
    <tr>
       <td>{{$item->id}}</td>
       <td>{{$item->title}}</td>
       <td>{{$item->des}}</td>
       <td>{{$item->slag}}</td>
       <td>
       <img src="{{ asset('blog/image/'.$item->image) }}" width="70px" height="70px" alt="Image">
       </td>
       <td>{{$item->short_des}}</td>
       <td>{{$item->meta_title}}</td>
       <td>{{$item->meta_des}}</td>
       <td>{{$item->meta_keyword}}</td>
       <td>
       <img src="{{ asset('blog/og_image/'.$item->og_image) }}" width="70px" height="70px" alt="Image">
       </td>
       <td>{{$item->og_des}}</td>
       <td>{{$item->og_image}}</td>
       <td>{{$item->date}}</td>
       <td>
        <a href="{{ url('blog_show/'.$item->id) }}" class="btn btn-primary btn-sm">Show</a>
          </td>
       <td>
        <a href="{{ url('blog_edit/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
          </td>
         <td>
          {{-- <a href="{{ url('blog_delete/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a> --}}
          <form action="{{ url('blog_delete/'.$item->id) }}" method="POST">
          @csrf
         @method('DELETE')
         <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        </form>
        </td> 
    </tr>
    @endforeach
    <tr>
     
    </tr>
    <tr>
      
    </tr>
  </tbody>
</table>
</body>
</html>