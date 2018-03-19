<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mail Box</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="speech-input.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h2 class="text-center text-success"> WELCOME <?php echo $_SESSION['vmail']; ?> </h2>
  </div>

<div class="container" style="padding:0">
    <nav class="navbar navbar-default">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#demos">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="compose.php" class="btn btn-primary btn-tweet">Compose</a>
        </div>

        <div class="collapse navbar-collapse" id="demos">
          <form class="navbar-form navbar-right" role="search">
            <div class="input-group">
              <input type="text" class="speech-input" placeholder="Search.." name="eng-input">
            </div>
          </form>

        </div>

    </nav>
 </div>
    <div class="container list">
        <div class="row">
            <div class="col-md-12">

                <h1 class="page-header">
                    Mail Inbox
                </h1>

                <div class="media highlight">
                    <a class="media-left" href="#">
                        <img src="image1.jpg" alt=""  class="img-circle">
                    </a>
                    <div class="media-body">
                         <span class="mail-sender"><h5>hello <?php echo  $_SESSION['vmail']; ?>

                         </h5></span>
                        <h2 class="media-heading"><a href="http://hongkiat.com/blog/a">mail from <?php echo $_SESSION['name']; ?> </a></h2>
                        <p><h4>Sample email for testing purpose and still having connection to other link.. </h4></p>
                        <div class="share">
                            <button class="btn btn-primary btn-tweet" type="button">
                                OPEN MAIL
                            </button>
                          </div>
                    </div>
                </div>

                 <div class="media">
                    <a class="media-left" href="#">
                        <img src="image1.jpg" alt=""  class="img-circle">
                    </a>
                    <div class="media-body">
                         <span class="mail-sender"><h5>hello <?php echo $_SESSION['vmail']; ?> </h5></span>
                        <h2 class="media-heading"><a href="http://hongkiat.com/blog/a">Sample Mail Colum 2</a></h2>
                        <p><h4>Again Sample email for testing purpose and still having connection to other link.. </h4></p>
                        <div class="share">
                            <button class="btn btn-primary btn-tweet" type="button">
                                OPEN MAIL
                            </button>
                          </div>
                    </div>
                </div>

                  <div class="media">
                    <a class="media-left" href="#">
                        <img src="image1.jpg" alt=""  class="img-circle">
                    </a>
                    <div class="media-body">
                         <span class="mail-sender"><h5>Nomination</h5></span>
                        <h2 class="media-heading"><a href="http://hongkiat.com/blog/a">Yes again subject</a></h2>
                        <p><h4>No no no Sample email for testing purpose and still having connection to other link.. </h4></p>
                        <div class="share">
                            <button class="btn btn-primary btn-tweet" type="button">
                                OPEN MAIL
                            </button>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="help">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Keyboard Shortcut</h4>
          </div>

          <div class="modal-body">
            <table>
                <tr>
                    <td width="80"><span class="label label-default">?</span></td>
                    <td width="200">Help</td>
                    <td width="60"><span class="label label-default">t</span></td>
                    <td width="200">Tweet Post</td>
                </tr>
                <tr>
                    <td><span class="label label-default">/</span></td>
                    <td>Search Mail</td>
                </tr>
                <tr>
                    <td><span class="label label-default">j</span> or <span class="label label-default">k</span></td>
                    <td>Highlight Mail</td>
                </tr>
            </table>

          </div>
        </div>
      </div>
    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/mousetrap/1.4.6/mousetrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/mousetrap/1.4.6/mousetrap-bind-dictionary.min.js"></script>
    <script src="js/script.js"></script>
    <script src="speech-input.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

</body>
</html>