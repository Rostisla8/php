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
<div class=" text-center mt-5 ">
    <h1 >Create article</h1> 
</div>
<div class="row ">
<div class="col-lg-7 mx-auto">
<div class="card mt-2 mx-auto p-4 bg-light">
    <div class="card-body bg-light">

    <div class = "container">
  <form action="/create" method="POST" id="contact-form" role="form">
    <div class="controls">

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_name">Title</label>
                    <input id="form_name" type="text" class="form-control" placeholder="Please enter title" required="required" data-error="required." name="title">
                    
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message">Message *</label>
                    <textarea id="form_message" class="form-control" placeholder="Write your message here." rows="4" required="required" data-error="Please, leave a message." name="post"></textarea
                        >
                    </div>
                </div>
            <div class="col-md-12">
                
                <input type="submit" class="btn btn-secondary btn-send mt-3  
                    " value="Send Message" >      
        </div>  
        </div>
    </div>
</form>
</div>
 </div>
</div>
</div>
</div>
</div>
</body>
</html>