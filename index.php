<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>My Links</title>
  </head>
  <body class="background">
    <div class="container">
      <div class="drop">
        <div class="box">
          <div class="spaced">
            <div class="row">
              <div class="squiggle">&#8275;</div>
            </div>
            <div class="row">
                <div style="color: #ac53df;" class="h3 arrow">&rsaquo;</div>
                <div class="ls">ls</div>
            </div>
            <div class="row links" id="container-ls">
              <?php

              $user = 'root';
              $password = '';
              $db = 'links';

              $conn = new mysqli('localhost', $user, $password, $db);

              if($conn-> connect_error) {
                die("connection failed; ". $conn-> connect_error);
              }

              $sql_ls = "SELECT Linkname, LinkUrl FROM `tbl_links` WHERE LinkOption = 'ls'";
              $result = mysqli_query($conn, $sql_ls);

              $result_count = 0;

              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<div class=\"item-list\"><a href=" . $row["LinkUrl"] . ">" . $row["Linkname"] . "</a></div>";
                }
                echo "<div class=\"none-link item-list\" style=\"user-select: auto;\">entertainment</div>";
                echo "<div class=\"none-link item-list\" style=\"user-select: auto;\">work</div>";
              }

              $conn->close();
              ?>
            </div>
            <div class="spacer"></div>
            <div class="row">
              <div class="squiggle">&#8275;</div>
            </div>
            <div class="row">
                <div style="color: #ac53df;" class="h3 arrow">&rsaquo;</div>
                <div class="ls">ls entertainment</div>
            </div>
            <div class="row links" id="container-entertainment">
              <?php

              $user = 'root';
              $password = '';
              $db = 'links';

              $conn = new mysqli('localhost', $user, $password, $db);

              if($conn-> connect_error) {
                die("connection failed; ". $conn-> connect_error);
              }

              $sql_entertainment = "SELECT Linkname, LinkUrl FROM `tbl_links` WHERE LinkOption = 'entertainment'";
              $result = mysqli_query($conn, $sql_entertainment);

              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<div class=\"item-list\"><a href=" . $row["LinkUrl"] . ">" . $row["Linkname"] . "</a></div>";
                }
              }

              $conn->close();
              ?>
            </div>
            <div class="spacer"></div>
            <div class="row">
              <div class="squiggle">&#8275;</div>
            </div>
            <div class="row">
                <div style="color: #ac53df;" class="h3 arrow">&rsaquo;</div>
                <div class="ls">ls .work</div>
            </div>
            <div class="row links" id="container-work">
              <?php

              $user = 'root';
              $password = '';
              $db = 'links';

              $conn = new mysqli('localhost', $user, $password, $db);

              if($conn-> connect_error) {
                die("connection failed; ". $conn-> connect_error);
              }

              $sql_work = "SELECT Linkname, LinkUrl FROM `tbl_links` WHERE LinkOption = 'work'";
              $result = mysqli_query($conn, $sql_work);

              if (mysqli_num_rows($result) > 0) {
                echo "<div class=\"none-link item-list\" style=\"user-select: auto;\">dev</div>";
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<div class=\"item-list\"><a href=" . $row["LinkUrl"] . ">" . $row["Linkname"] . "</a></div>";
                }
              }

              $conn->close();
              ?>
            </div>
            <div class="spacer"></div>
            <div class="phone-hide row">
              <div class="squiggle">&#8275;</div>
            </div>
            <div class="phone-hide row">
                <div style="color: #ac53df;" class="h3 arrow">&rsaquo;</div>
                <div class="ls">ls dev</div>
            </div>
            <div class="row links" id="container-dev">
              <?php

              $user = 'root';
              $password = '';
              $db = 'links';

              $conn = new mysqli('localhost', $user, $password, $db);

              if($conn-> connect_error) {
                die("connection failed; ". $conn-> connect_error);
              }

              $sql_dev = "SELECT Linkname, LinkUrl FROM `tbl_links` WHERE LinkOption = 'dev'";
              $result = mysqli_query($conn, $sql_dev);

              $hack_link = "";

              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  if ($row["Linkname"] === "0x00sec" || $row["Linkname"] === "pwndb") {
                    $hack_link = "hack-link";
                  } else {
                    $hack_link = "";
                  }
                  echo "<div class=\"item-list $hack_link\"><a href=" . $row["LinkUrl"] . ">" . $row["Linkname"] . "</a></div>";
                }
              }

              $conn->close();
              ?>
            </div>
            <div class="spacer"></div>
            <div class="phone-hide row">
              <div class="squiggle">&#8275;</div>
            </div>
            <div class="phone-hide row">
                <div style="color: #ac53df;" class="h3 arrow">&rsaquo;</div>
                <div class="ls">ls design</div>
            </div>
            <div class="row links" id="container-design">
              <?php

              $user = 'root';
              $password = '';
              $db = 'links';

              $conn = new mysqli('localhost', $user, $password, $db);

              if($conn-> connect_error) {
                die("connection failed; ". $conn-> connect_error);
              }

              $sql_design = "SELECT Linkname, LinkUrl FROM `tbl_links` WHERE LinkOption = 'design'";
              $result = mysqli_query($conn, $sql_design);

              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<div class=\"item-list\"><a href=" . $row["LinkUrl"] . ">" . $row["Linkname"] . "</a></div>";
                }
                echo "<div class=\"none-link item-list\" style=\"user-select: auto;\">design</div>";
              }

              $conn->close();
              ?>
            </div>
            <div class="spacer"></div>
            <div class="phone-hide row">
              <div class="squiggle">&#8275;</div>
            </div>
            <div class="phone-hide row">
                <div style="color: #ac53df;" class="h3 arrow">&rsaquo;</div>
                <div class="ls">other</div>
            </div>
            <div class="row links" id="container-dev">
              <?php

              $user = 'root';
              $password = '';
              $db = 'links';

              $conn = new mysqli('localhost', $user, $password, $db);

              if($conn-> connect_error) {
                die("connection failed; ". $conn-> connect_error);
              }

              $sql_other = "SELECT Linkname, LinkUrl FROM `tbl_links` WHERE LinkOption = 'other'";
              $result = mysqli_query($conn, $sql_other);

              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<div class=\"item-list\"><a href=" . $row["LinkUrl"] . ">" . $row["Linkname"] . "</a></div>";
                }
              }

              $conn->close();
              ?>
            </div>
          </div>
        </div>
        <!-- <div class="text-right">
          <small class="h6" style="padding-right: 3%"><a class=" work-link font-weight-bold" href="/work">See all work links &#8594;</a></small>
        </div> -->
      </div>
    </div>
    <div class="button-style">
      <button id="addLink" type="button" class="btn btn-danger">Add link</button>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script type="text/javascript">

      $(document).ready(function() {
        $('#addLink').on('click', function(e) {
          Swal.mixin({
            input: 'text',
            confirmButtonText: 'Next &rarr;',
            showCancelButton: true,
            progressSteps: ['1', '2', '3']
          }).queue([
            {
              title: 'Type:',
              text: 'Choose the category for your link'
            },
            'Link display name:',
            'Link itself:'
          ]).then((result) => {
            if (result.value) {
              const answers = result.value;
              Swal.fire({
                title: 'All done!',
                html: `
                  Your link:
                  <pre><code>${answers}</code></pre>
                `,
                confirmButtonText: 'Lovely!'
              });
              var linkoption = answers[0];
              var linkname = answers[1];
              var link = answers[2];
              $.ajax({
                url: 'saveToDb.php',
                type: 'POST',
                data: { linkoption: linkoption.toLowerCase(), linkname: linkname.toLowerCase(), link: link.toLowerCase() },
                success: function(result) {
                  setTimeout(function(){
                    location.reload(true);
                  }, 2400);
                }
              });
            }
          });
        });
      });

    </script>

  </body>
</html>
