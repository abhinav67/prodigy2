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
 <div class="users form">
             <?php //echo $this->Session->flash('auth'); ?>
              <?php echo $this->Form->create('User', array(
                                                       'inputDefaults' => array(
                                                           'label' => false,
                                                           'div' => false
                                                       )
                                                   ));?>

<div class="col-md-12">
<div class="col-sm-5" style="padding-top: 5.5px;">
         <?php echo $this->Form->input('username',array('label'=>false,'placeholder'=>'Enter username','class'=>'form-control nav-from')); ?>
</div>
<div class="col-sm-5" style="padding-top: 5.5px;">
         <?php echo $this->Form->input('password',array('label'=>false,'placeholder'=>'Enter password','class'=>'form-control nav-form')); ?>
</div>
<div class="col-sm-2" style="padding-top: 5.5px;">
            <?php echo $this->Form->submit(__('Sign In'), array('style'=>'color: #333; background-color: #ffffff;border-color: #CCC;','label'=>false,'class' => 'btn btn-default')); ?>
</div>
</div>


                </li>

            </ul>
        </div>
        <?php echo $this->Form->end() ?>
        <!-- /.navbar-collapse -->
    </nav>

