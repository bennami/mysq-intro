<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">

        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img  class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                    <h1>
                       <?php echo $user['first_name']." ".$user['last_name'];?>
                    </h1>
                    <h4>
                        Web Developer
                    </h4>

                    <!-- About tab -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">More</a>
                        </li>
                    </ul>

                </div>
            </div>



        <!-- liks section under img -->
        <div class="row">
            <div class="col-md-4">
                <div class="profile-work">
                    <p>LINKS</p>
                    <a href="<?php echo $user['github']?>">Github</a><br/>
                    <a href="<?php echo $user['linkedin']?>">Linkedin</a><br/>
                    <a href="<?php echo $user['video'];   ?>">fun video</a>

                </div>
            </div>

            <!-- stuff under tab -->
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">

                            <div class="col-md-6">
                                <label>User Id</label>

                            </div>
                            <div class="col-md-6">
                                <p><?php echo $user['first_name']; ?></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label>Name</label>

                            </div>
                            <div class="col-md-6">
                                <p> <?php echo $user['first_name']; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $user['email']; ?></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label>Language</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $user['preferred_language']; ?></p>
                                <img class="img-fluid img-thumbnail" src="<?php echo 'images/' . $user['preferred_language'] . '.png' ?>" alt="flag">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label>Profession</label>
                            </div>
                            <div class="col-md-6">
                                <p>Web Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
