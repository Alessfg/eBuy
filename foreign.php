<?php
//                                Check if the user passed in actually exists in terms of the id
if (!empty($data)) {
?>
<div class="container" style="padding-top:100px">
    <div class="row">
        <div
            class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $data['first_name'] . "'s Profile"; ?></h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-9 col-lg-9 " align="center"><img alt="User Pic"
                                                                            src="<?php echo $data['profile_picture']; ?>"
                                                                            class="img-circle img-responsive"
                                                                            style="max-width:30%;max-height:30%;">
                            </div>
                            <div class=" col-md-9 col-lg-9 ">
                                <table class="table table-user-information">
                                    <!--                                    Check if the user exists or not-->
                                    <tbody>
                                    <tr>
                                        <td>Username</td>
                                        <td><?php echo $data['username']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>First Name</td>
                                        <td><?php echo $data['first_name']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Last Name</td>
                                        <td><?php echo $data['last_name']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Date of Birth</td>
                                        <td><?php echo $data['birthdate']; ?></td>
                                    </tr>

                                    <tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>
                                            <a href="mailto:info@support.com"><?php echo $data['email']; ?></a>
                                        </td>
                                    </tr>
                                    <td>Rating</td>
                                    <td>
                                        <?php
                                        $stars = round($data['rating'], 0, PHP_ROUND_HALF_DOWN);
                                        $diff = $data['rating'] - $stars;
                                        $perc = number_format(($data['rating'] / 5) * 100);
                                        do {
                                            if ($stars == 1 && $diff < 0) {
                                                echo '<span class="glyphicon glyphicon-star opacity"></span>';
                                            } else {
                                                echo '<span class="glyphicon glyphicon-star"></span>';
                                            }
                                            $stars = $stars - 1;
                                        } while ($stars > 0);
                                        echo "<p>  " . $perc . "% </p>";
                                        ?>

                                    </td>

                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
<!--                        Add rating's ability-->
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php
    } else {
        ?>
        <div class="container" style="padding-top:100px">
            <div class="row">
                <div
                    class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title"></h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3 col-lg-3 " align="center"><img alt="User Pic"
                                                                                    src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png"
                                                                                    class="img-circle img-responsive">
                                </div>
                                <div class=" col-md-9 col-lg-9 ">
                                    <table class="table table-user-information">
                                        This user doesn't exist!
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <?php
    }
    ?>
