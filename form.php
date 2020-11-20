<!DOCTYPE html>
<html>

<head>
  <title>Comment Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="card-header bg-info text-white d-flex justify-content-between">
     <h3>เพิ่ม</h4>
     <a href="index.php" class="btn btn-warning">กลับ</a>
  </div>
    <form action="insert.php" method="post" id="CommentForm">
      <div class="form-group mt-5">
        <label class="m-3" for="name">Name</label>
        <input type="text" class="form-control" name="name" id="idName" placeholder="Enter Name">
        <label class="m-3" for="comment">Comment</label>
        <textarea rows="5" class="form-control" cols="10" name="comment" id="idComment"
          placeholder="Enter Comment"></textarea><br>
        <label class="m-3" for="link">Link</label>
        <input type="text" class="form-control" name="link" id="idLink" placeholder="Enter Link">
        <input class="btn btn-success mt-5" type="submit" id="commentBtn">
      </div>
    </form>
  </div>
</body>
</html>
