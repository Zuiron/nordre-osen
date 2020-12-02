<script>document.getElementById('kontakt').setAttribute('class', 'active');</script>
<div class="container marketing sitecontainer">
    
    <ol class="breadcrumb breadmargin">
        <li><a href="/">Hjem</a></li>
        <li class="active">Kontakt</li>
    </ol>
    
            <h1><i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i> Kontakt.</h1>
            <p>Lurer du på noe, eller har noen tips til forbedringer på nettsiden. Vennligst bruk denne kontaktformen.</p>
                <?php require_once("kontakt_code.php"); ?>
            <p class="lead">
                
                <form class="form-horizontal" role="form" method="post" action="/kontakt">
                  <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Navn</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Første & Etternavn" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                      <?php echo "<p class='text-danger'>$errName</p>";?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="email" name="email" placeholder="meg@domene.no" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                      <?php echo "<p class='text-danger'>$errEmail</p>";?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="message" class="col-sm-2 control-label">Melding</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                      <?php echo "<p class='text-danger'>$errMessage</p>";?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="human" name="human" placeholder="Ditt Svar">
                      <?php echo "<p class='text-danger'>$errHuman</p>";?>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                      <input id="submit" name="submit" type="submit" value="Send" class="btn btn-success">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                      <?php echo $result; ?>	
                    </div>
                  </div>
                </form> 
            
            </p>