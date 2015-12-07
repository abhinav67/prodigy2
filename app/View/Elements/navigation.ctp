    <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span
                    class="icon-bar"></span><span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo $this->webroot;?>">Prodigy OMS</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">


            </ul>
            <ul class="nav navbar-nav navbar-right">

                
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                    class="glyphicon glyphicon-user"></span><?php echo $user?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                 <!--       <li><a href="#"><span class="glyphicon glyphicon-user"></span>Profile</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-cog"></span>Settings</a></li></li>
                        <li class="divider">-->
                        <li><a href="<?php echo $this->webroot;?>logout"><span class="glyphicon glyphicon-off"></span>Logout</a></li>
                        <br>
                         <li><a href="#"><span class="glyphicon glyphicon-cog"></span>Version (beta) - 2.0</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

