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
                    <form method="post">
                        <fieldset>
                            <legend>S'enregister</legend>
                            <div class="form-group">
                                <label for="FirstName">Pseudo</label>
                                <input type="text" name="pseudo" class="form-control" id="FirstName" placeholder="Enter First Name" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail">Email address</label>
                                <input type="email" name="adresseMail" class="form-control" id="exampleInputEmail" placeholder="Enter email" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword">Password</label>
                                <input type="password" name="motDePasse" class="form-control" id="exampleInputPassword" placeholder="Password" required>
                            </div>

                            <div class="form-group">
                                <label for="FirstName">First Name</label>
                                <input type="text" name="prenom" class="form-control" id="FirstName" placeholder="Enter First Name" required>
                            </div>

                            <div class="form-group">
                                <label for="LastName">Last Name</label>
                                <input type="text" name="nom" class="form-control" id="LastName" placeholder="Enter Last Name" required>
                            </div>

                            <div class="form-group">
                                <label for="Adress1">Adresse</label>
                                <input type="text" name="adresse" class="form-control" id="Adress1" placeholder="Enter Adress 1" required>
                            </div>

                            <div class="form-group">
                                <label for="City">City</label>
                                <input type="text" name="ville" class="form-control" id="City" placeholder="Enter City" required>
                            </div>

                            <div class="form-group">
                                <label for="PostCode">Post Code</label>
                                <input type="number" name="codePostal" class="form-control" id="PostCode" placeholder="Enter Post Code" required>
                            </div>
                        </fieldset>

                        <button type="submit" class="btn btn-success pull-right"><i class="icon-ok-sign"></i> S'enregister</button>
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