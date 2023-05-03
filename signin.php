<?php include "assest/head.php"; ?>
<title>Sign in</title>
</head>
<body>
    <?php include "assest/header.php" ?>
  
    <main role="main" class="main">





        <div class="container">
            <div class="row">

                <div class="col-lg-12 mb-4">
                    <form action="assest/insert.php?type=author" method="POST" enctype="multipart/form-data">

                        <h2>Sign in</h2>

                        <?php if (isset($_GET['error'])) { ?>

                            <p class="error"><?php echo $_GET['error']; ?></p>

                        <?php } ?>

                        <div class="form-group">
                                            <label for="authName">Full Name</label>
                                            <input type="text" class="form-control" name="authName" id="authName">
                        </div>

                        <div class="form-group">
                                            <label for="authDesc">Description</label>
                                            <input type="text" class="form-control" name="authDesc" id="authDesc">
                        </div>
                        <div class="form-group">
                                            <label for="authEmail">Email</label>
                                            <input type="email" class="form-control" name="authEmail" id="authEmail">
                        </div>
                        
                        <div class="form-group">
                                            <label for="authImage">Avatar</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="authImage" id="authImage">
                                                <label class="custom-file-label" for="authImage">Choose file</label>
                                            </div>
                        </div>
                        <div class="form-group">
                                            <label for="authTwitter">Twitter Username <span class="text-info">(optional)</span></label>
                                            <input type="text" class="form-control" name="authTwitter" id="authTwitter" placeholder="Ex: Moon96Schwarz">
                                        </div>
                                        <div class="form-group">
                                            <label for="authGithub">Github Username <span class="text-info">(optional)</span></label>
                                            <input type="text" class="form-control" name="authGithub" id="authGithub" placeholder="Ex: Moon96Schwarz">
                                        </div>
                                        <div class="form-group">
                                            <label for="authLinkedin">Linkedin Username <span class="text-info">(optional)</span></label>
                                            <input type="text" class="form-control" name="authLinkedin" id="authLinkedin" placeholder="Ex: Moon96Schwarz">
                                        </div>


                        <button type="submit">Login</button>

                    </form>
                </div>
            </div>
        </div>
    </main>     
           
</body>

</html>