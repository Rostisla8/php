<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light text-white bg-dark ">
  <div class="container">
    <a class="navbar-brand text-white" href="/articles"><b>O</b>TS<b>O</b>S<b>O</b>CIAL NETWORK</a></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item active">
        <a  class="nav-link text-white"  href="/articles">Home</a>
        </li>
        <li class="nav-item text-white">
        <a class="nav-link text-white" href="/profile">Profile</a>
        </li>
        <li class="nav-item text-white">
          <a class="nav-link text-white" href="/users">Users</a>
        </li>
        <li class="nav-item text-white">
          <a class="nav-link text-white" href="/contacts">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-3">
    <h1><?=$article[0]['title']?></h1>
<div class="card mt-3">
  <div class="card-header">
    Content
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p><?=$article[0]['content']?></p>
      <footer class="blockquote-footer">date <cite title="Source Title"><?=$article[0]['date']?></cite></footer>
    </blockquote>
  </div>
</div>
<div class = "row">
    <div class="col-md-6">
    <?php
if($article[0]['userid'] === $uid){
print  "<button onclick='location.href=\"/articles/delete/" . $article[0]['id'] . "\"'; type='button' class='btn btn-danger btn-lg mt-3'>Delete</button>";
}
?>
<button onclick="location.href='/articles';" type="button" class="btn btn-secondary btn-lg md-3 mt-3 ">Back</button>
    </div>
  </div>
</div>
</body>
</html>