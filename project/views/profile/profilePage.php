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
  <div class="container ">
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
<div class="container mt-4">
    <h1>Profile</h1>
    <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-5 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img width="150px" height="150px" src="/project/webroot/photos/<?=$data[0]['photo']?>" alt="photo" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?=$data[0]['login']?></h4>
                      <p class="text-secondary mb-1"><?=$data[0]['role']?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                    <span class="text-secondary"><?=$data[0]['git']?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                    <span class="text-secondary"><?=$data[0]['instagram']?></span>
                  </li>

                </ul>
              </div>
            </div>
            <div class="col-md-7">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$data[0]['fullname']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$data[0]['email']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Adress</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$data[0]['adress']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">About me</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$data[0]['description']?>
                    </div>
                  </div>
                  <?php if($data[0]['id'] === $_SESSION['id']) : ?>
                    <hr>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-secondary " target="__blank" href="/profile/edit">Edit</a>
                      <a class="btn btn-danger " target="__blank" href="/exit">Exit</a>
                    </div>
                  </div>
                  <?php endif ?>
                  <ul class="list-group mt-4">
                    <h4>Your articles</h4>
                  <? foreach($articles as $article) :?>
                    <li class="list-group-item"><a class="btn btn-default" href="/articles/<?=$article['id']?>"><?=$article['title']?></a></li>
                  <? endforeach ?>
                </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    
</body>
</html>