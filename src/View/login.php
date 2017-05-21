<?php
include('templates/header.php');
?>

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>Votre Compte</h3>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <!-- FORM -->
                    <form method="post" action="">
                        <fieldset>
                            <legend>Se connecter</legend>
                            <div class="form-group">
                                <label for="exampleInputEmail">Email address</label>
                                <input type="text" name="adresseMail" class="form-control" id="exampleInputEmail" placeholder="Enter email" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Password" required>
                            </div>
                        </fieldset>

                        <button type="submit" class="btn btn-success pull-right"><i class="icon-ok-sign"></i> Se connecter</button>
                    </form>
                    <!-- /FORM -->
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('templates/footer.php');
?>