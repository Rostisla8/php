<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./project/webroot/users.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
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
<div class="event-schedule-area-two bg-color pad100 mt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="home" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <?foreach($data as $user) : ?>
                                        <tr class="inner-box">
                                        <th scope="row">
                                            <div class="">
                                                <span><?=$user['id']?></span>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="event-img">
                                                <img class="users_photo" src="/project/webroot/photos/<?=$user['photo']?>" alt="photo" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="event-wrap">
                                                <h3><a href="#"><?=$user['login']?></a></h3>
                                                <div class="meta">
                                                    <div class="organizers">
                                                        <p><b><?=$user['fullname']?></b></p>
                                                    </div>
                                                    <div class="categories">
                                                        <p><?=$user['role']?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="primary-btn">
                                                <a class="btn btn-secondary" href="#">Follow</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
            <!-- /col end-->
        </div>
        <!-- /row end-->
    </div>
</div>
</body>
</html>