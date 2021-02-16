<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

        <title>Peg Productions Limited</title>
        <meta name="description" content="<?php echo $description; ?>">
        
        <meta name="viewport" content="width=550">

        <meta name="author" content="Pez Cuckow" />
        <meta name="copyright" content="Peg Productions <?php echo date('Y') ; ?>" />

        <meta property="og:title" content="Peg Productions">
        <meta property="og:type" content="company">
        <meta property="og:url" content="http://www.pegproductions.com">
        <meta property="og:image" content="http://www.pegproductions.com/img/logo-square-small.png">
        <meta property="og:description" content="<?php echo $description; ?>">

        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
      <div class="wrapper">
        <div class="container">
          <div class="row">
            <div class="hide">
              Peg Productions is a web programming and design contracting firm, providing highly skilled employees to help build and maintain your web projects. Get in touch today for a quote per hour or per project.
            </div>
          </div>
          <img class="logo" src="img/peg-small.png" alt="Peg Productions Logo" width="500" height="317">
          <div class="row info text-center">
            <div class="col-half">
              <script>
              var phone = String.fromCharCode(<?php echo $phone ?>);
              document.write('<span><a href="tel:'+ phone + '">' + phone.substr(0, 25) + '<span class="hide">123</span>' + phone.substr(25) + '</a><\/span>');
              </script>
            </div>
            <div class="col-half">
              <script>
                var mail = String.fromCharCode(<?php echo $email; ?>);
              	function sendEmail(title) {
                  if(typeof title === 'undefined') title = 'Email from PegProductions.com';
              		var address = document.getElementById('mail');
              		window.open('mailto:' + (address.textContent || address.innerText) + '?subject=' + title, '_blank');
              		return false;
              	}
                document.write('<a id="mail" href="mailto:' + mail + '" onclick="sendEmail(); return false;">' + mail.substr(0, 24) + '<span class="hide">email</span>' + mail.substr(24) + '</a>');
              </script>
            </div>
          </div>
        </div>
      </div>
      <div class="footer text-center">
        &copy;<?php echo date('Y'); ?> Peg Productions Limited, directed by <a href="http://www.pezcuckow.com" target="_blank">Pez Cuckow</a>, full stack contracting web developer.
      </div>
    </body>
</html>
