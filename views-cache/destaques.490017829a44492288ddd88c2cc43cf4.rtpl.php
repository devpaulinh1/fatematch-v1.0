<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>FateMatch: início</title>
  <link href="../../resources/css/bootstrap-5.2.1-dist/bootstrap.min.css" rel="stylesheet" />
  <link href="../../resources/css/main.css" rel="stylesheet" />
  <link href="../../resources/css/header.css" rel="stylesheet" />
  <link href="../../resources/css/body.css" rel="stylesheet" />
  <link href="../../resources/css/footer.css" rel="stylesheet" />
  <link href="../../resources/css/image.css" rel="stylesheet" />
  <link href="../../resources/css/input.css" rel="stylesheet" />
  <link href="../../resources/css/button.css" rel="stylesheet" />
  <link href="../../resources/css/modal.css" rel="stylesheet" />
</head>

<body>
  <script type="text/javascript" src="../../resources/js/bootstrap-5.2.1-dist/bootstrap.bundle.min.js"></script>
  <div class="container-fluid">
    <div class="header">
      <div class="brandAndnav">
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <a class="navbar-brand">
              <img src="../../views/images/logo.png" alt="logo" width="30" height="24" />
            </a>
            <a class="nav-link" aria-current="page">FateMatch</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <img src="../../views/icons/menu.png" alt="menu" width="30" height="24" />
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link disabled" aria-current="page" href="cadastro.html">Cadastre-se</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="destaques.html">Destaques</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="login.html">Entrar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="salas.html">Salas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="perfil.html">Perfil</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <div class="section2 row g-0">
      <div class="boxOne col-12 col-lg-5">
        <div class="firstGame mt-3">
          <img src="../../views/images/firstGame.jpg" class="d-block w-100" alt="firstGame" />
        </div>
        <div class="secondGame mt-3">
          <img src="../../views/images/secondGame.jpg" class="d-block w-100" alt="secondGame" />
        </div>
      </div>
      <div class="boxTwo row g-0 col-12 col-lg-7">
        <div class="firstGroup col-12 col-md-5 offset-lg-1 mt-3 position-relative" data-bs-toggle="modal"
          data-bs-target="#modalGroup">
          <div class="title col-12 py-1">Jogo 01</div>
          <div class="banner col-12">
            <img src="../../views/images/groupOne.jpg" class="d-block w-100" alt="groupOne" />
          </div>
          <div class="details col-12 mb-4 py-1">Detalhes</div>
          <div class="sectionHour col-12 row g-0 mb-3">
            <div class="clock col-3">
              <img src="../../views/icons/clock.png" alt="clock" width="25" height="19" />
            </div>
            <div class="hour col-9">00:00</div>
          </div>
          <div class="sectionDay col-12 row g-0 mb-5 pb-5">
            <div class="calendar col-3">
              <img src="../../views/icons/calendar.png" alt="calendar" width="25" height="19" />
            </div>
            <div class="day col-9">Segunda-feira</div>
          </div>
          <div class="sectionPlayer2 col-12 row g-0 py-1 position-absolute bottom-0 start-0">
            <div class="players col-3 offset-1">
              <img src="../../views/icons/players.png" alt="players" width="25" height="19" />
            </div>
            <div class="number col-3">0/0</div>
            <div class="view col-4 offset-1">
              <img src="../../views/icons/eye.png" alt="eye" width="25" height="19" />
            </div>
          </div>
        </div>
        <div class="secondGroup col-12 col-md-5 offset-md-2 offset-lg-1 mt-3 position-relative"
          data-bs-toggle="modal" data-bs-target="#modalGroup">
          <div class="title col-12 py-1">Jogo 02</div>
          <div class="banner col-12">
            <img src="../../views/images/groupTwo.jpg" class="d-block w-100" alt="groupTwo" />
          </div>
          <div class="details col-12 mb-4 py-1">Detalhes</div>
          <div class="sectionHour col-12 row g-0 mb-3">
            <div class="clock col-3">
              <img src="../../views/icons/clock.png" alt="clock" width="25" height="19" />
            </div>
            <div class="hour col-9">00:00</div>
          </div>
          <div class="sectionDay col-12 row g-0 mb-5 pb-5">
            <div class="calendar col-3">
              <img src="../../views/icons/calendar.png" alt="calendar" width="25" height="19" />
            </div>
            <div class="day col-9">Segunda-feira</div>
          </div>
          <div class="sectionPlayer2 col-12 row g-0 py-1 position-absolute bottom-0 start-0">
            <div class="players col-3 offset-1">
              <img src="../../views/icons/players.png" alt="players" width="25" height="19" />
            </div>
            <div class="number col-3">0/0</div>
            <div class="view col-4 offset-1">
              <img src="../../views/icons/eye.png" alt="eye" width="25" height="19" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright mt-3">
      <small>© 2022 Fatematch</small>
    </div>
  </div>
  <!-- modal -->
  <div class="modal fade modal-xl" id="modalGroup" tabindex="-1" aria-labelledby="modalGroup" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body row g-0">
          <div class="boxOne col-12 col-lg-7">
            <div class="title col-12 py-1">Jogo 06</div>
            <div class="banner col-12">
              <img src="../../views/images/groupSix.jpg" class="d-block w-100" alt="groupSix" />
            </div>
            <div class="groupPlayersThree col-12 row g-0 py-1 mb-4">
              <div class="players col-3 offset-3">
                <img src="../../views/icons/players.png" alt="players" width="25" height="19" />
              </div>
              <div class="number col-3">0/0</div>
            </div>
            <div class="sectionUser col-12 row g-0">
              <div class="user col-3 col-sm-2 mb-3">
                <img src="../../views/icons/user.png" alt="user" width="25" height="19" />
              </div>
              <div class="nickname col-9 col-sm-4 mb-3">Jogador 01</div>
              <div class="bars2 col-3 col-sm-2 mb-3">
                <img src="../../views/icons/bars.png" alt="bars" width="25" height="19" />
              </div>
              <div class="stars2 col-9 col-sm-4 mb-3">
                <img src="../../views/icons/star.png" alt="star" width="18" height="12" />
                <img src="../../views/icons/star.png" alt="star" width="18" height="12" />
                <img src="../../views/icons/star.png" alt="star" width="18" height="12" />
                <img src="../../views/icons/star.png" alt="star" width="18" height="12" />
                <img src="../../views/icons/star.png" alt="star" width="18" height="12" />
              </div>
              <div class="user col-3 col-sm-2 mb-3">
                <img src="../../views/icons/user.png" alt="user" width="25" height="19" />
              </div>
              <div class="nickname col-9 col-sm-4 mb-3">Jogador 02</div>
              <div class="bars2 col-3 col-sm-2 mb-3">
                <img src="../../views/icons/bars.png" alt="bars" width="25" height="19" />
              </div>
              <div class="stars2 col-9 col-sm-4 mb-3">
                <img src="../../views/icons/star.png" alt="star" width="18" height="12" />
                <img src="../../views/icons/star.png" alt="star" width="18" height="12" />
                <img src="../../views/icons/star.png" alt="star" width="18" height="12" />
                <img src="../../views/icons/star.png" alt="star" width="18" height="12" />
                <img src="../../views/icons/star.png" alt="star" width="18" height="12" />
              </div>
              <div class="user col-3 col-sm-2 mb-3">
                <img src="../../views/icons/user.png" alt="user" width="25" height="19" />
              </div>
              <div class="nickname col-9 col-sm-4 mb-3">Jogador 03</div>
              <div class="bars2 col-3 col-sm-2 mb-3">
                <img src="../../views/icons/bars.png" alt="bars" width="25" height="19" />
              </div>
              <div class="stars2 col-9 col-sm-4 mb-3">
                <img src="../../views/icons/star.png" alt="star" width="18" height="12" />
                <img src="../../views/icons/star.png" alt="star" width="18" height="12" />
                <img src="../../views/icons/star.png" alt="star" width="18" height="12" />
                <img src="../../views/icons/star.png" alt="star" width="18" height="12" />
                <img src="../../views/icons/star.png" alt="star" width="18" height="12" />
              </div>
              <div class="user col-3 col-sm-2 mb-3">
                <img src="../../views/icons/user.png" alt="user" width="25" height="19" />
              </div>
              <div class="nickname col-9 col-sm-4 mb-3">Jogador 04</div>
              <div class="bars2 col-3 col-sm-2 mb-3">
                <img src="../../views/icons/bars.png" alt="bars" width="25" height="19" />
              </div>
              <div class="stars2 col-9 col-sm-4 mb-3">
                <img src="../../views/icons/star.png" alt="star" width="18" height="12" />
                <img src="../../views/icons/star.png" alt="star" width="18" height="12" />
                <img src="../../views/icons/star.png" alt="star" width="18" height="12" />
                <img src="../../views/icons/star.png" alt="star" width="18" height="12" />
                <img src="../../views/icons/star.png" alt="star" width="18" height="12" />
              </div>
              <div class="user col-3 col-sm-2 mb-3">
                <img src="../../views/icons/user.png" alt="user" width="25" height="19" />
              </div>
              <div class="nickname col-9 col-sm-4 mb-3">Jogador 05</div>
              <div class="bars2 col-3 col-sm-2 mb-3">
                <img src="../../views/icons/bars.png" alt="bars" width="25" height="19" />
              </div>
              <div class="stars2 col-9 col-sm-4 mb-3">
                <img src="../../views/icons/star.png" alt="star" width="18" height="12" />
                <img src="../../views/icons/star.png" alt="star" width="18" height="12" />
                <img src="../../views/icons/star.png" alt="star" width="18" height="12" />
                <img src="../../views/icons/star.png" alt="star" width="18" height="12" />
                <img src="../../views/icons/star.png" alt="star" width="18" height="12" />
              </div>
            </div>
          </div>
          <div class="boxTwo col-12 col-lg-5">
            <div class="details col-12 mb-4 py-1">Detalhes</div>
            <div class="sectionHour col-12 row g-0 mb-3">
              <div class="clock col-3">
                <img src="../../views/icons/clock.png" alt="clock" width="25" height="19" />
              </div>
              <div class="hour col-9">00:00</div>
            </div>
            <div class="sectionDay col-12 row g-0 mb-3">
              <div class="calendar col-3">
                <img src="../../views/icons/calendar.png" alt="calendar" width="25" height="19" />
              </div>
              <div class="day col-9">Segunda-feira</div>
            </div>
            <div class="sectionClassification col-12 row g-0 mb-3">
              <div class="bars col-3">
                <img src="../../views/icons/bars.png" alt="bars" width="25" height="19" />
              </div>
              <div class="stars col-9">
                <img src="../../views/icons/star.png" alt="star" width="18" height="12" />
                <img src="../../views/icons/star.png" alt="star" width="18" height="12" />
                <img src="../../views/icons/star.png" alt="star" width="18" height="12" />
                <img src="../../views/icons/star.png" alt="star" width="18" height="12" />
                <img src="../../views/icons/star.png" alt="star" width="18" height="12" />
              </div>
            </div>
            <div class="groupCode col-12 row g-0 mb-4">
              <div class="search col-3">
                <img src="../../views/icons/search.png" alt="search" width="25" height="19" />
              </div>
              <div class="code col-9">#0</div>
            </div>
            <div class="comments col-12 mb-4 py-1">Comentário</div>
            <div class="sectionComments col-12 row g-0 mb-4">
              <div class="comment col-3">
                <img src="../../views/icons/comment.png" alt="comment" width="25" height="19" />
              </div>
              <div class="text col-9">
                What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the
                printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an
                unknown printer took a galley of type and scrambled it to make
                a type specimen book.
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success" name="btnEntrar">
            Entrar na sala
          </button>
          <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal" name="btnSair">
            Sair da sala
          </button>
          <button type="submit" class="btn btn-info" data-bs-dismiss="modal" name="btnEditar">
            Editar da sala
          </button>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
