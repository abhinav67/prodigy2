  <?php echo $this->Html->css('main'); ?>

  <div id="headerwrap">

    <div class="container">

      <div class="row">
        <div class="col-md-12">
          <div class="col-md-3 topm">

       <h1>Welcome to Prodigy OMS<br></h1>
            <h3>The Cloud based Office Management Solution for Health Care Industry </h3>
            <br>


            <a href="#features" class="btn btn-primary feat">View Features</a>

 <a href="#contact" class="btn btn-default feat">Contact Us</a>
<br>
        </div>

        <div class="col-md-9 imglr">

			<img class="img-responsive" width="" src="img/devices.png" alt="">
<br>
        </div><!-- /col-md-6 -->
        </div><!-- /col-md-6 -->

      </div><!-- /row -->
    </div><!-- /container -->
  </div><!-- /headerwrap -->
<br>
<br>
<div style="background-color:#f2f2f2;">
  <div id="features" class="container" >
    
            <div class="text-center"><br>
            <h1 style="font-family: "Raleway";">Office Management Now Looks Easier</h1><br>
            <!-- <h3 style="font-family: "Raleway";">DESIGNED TO EXCEL</h3> -->
            </div>
    <div class="row mt centered">
      <div class="col-md-4">
        <img src="img/easy.png" width="180" alt="">
        <h4>Cloud Based System</h4>
        <p>Secure, lighweight, cloud based architecture with no IT installation required. </p>
      </div><!--/col-md-4 -->

      <div class="col-md-4">
        <img src="img/development.png" width="180" alt="">
        <h4>Robust Architecture</h4>
        <p>Built on the latest HIPAA compliant ASC X12 5010 version. Supports both ICD9 and ICD 10 standards.</p>

      </div><!--/col-md-4 -->

      <div class="col-md-4">
        <img src="img/graphs.png" width="180" alt="">
        <h4>Readability</h4>
        <p>Advanced Analytics and Dynamic Visualization for your customer data. Clear graphics to represent complex data with ease.</p>

      </div><!--/col-md-4 -->
    </div><!-- /row -->
    <div class="row mt centered">
      <div class="col-md-4">
        <img src="img/bullseye.png" width="180" alt="">
        <h4>Ease of Access</h4>
        <p>Submit your claims within 3 clicks, 30 seconds or less. Manage everything in a personalized and efficient manner.</p>
      </div><!--/col-md-4 -->

      <div class="col-md-4">
      <img src="img/research.png" width="180" alt="">
      <h4>Support</h4>
      <p>Streamline your workflow with the integrated DCMS solution. Attendance tracking and reporting at fingertips.</p>

      </div><!--/col-md-4 -->

      <div class="col-md-4">
        <img src="img/responsive.png" width="180" alt="">
        <h4>Responsive</h4>
      <p>Application optimized for viewing across various screen sizes - laptops, PCs, tablets and phones.</p>

      </div><!--/col-md-4 -->
    </div><!-- /row -->
  </div><!-- /container -->

<!--   <div class="ourteam">
  <div class="container-fluid extra">
    <div class="row mt centered">
      <div class="col-md-6 col-md-offset-3">
        <h1>Our Awesome Team.</h1>
        <h3>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h3>
      </div>
    </div>
    
    <div class="row mt centered">
      <div class="col-md-4">
        <img class="img-circle" src="assets/img/pic1.jpg" width="140" alt="">
        <h4>Michael Robson</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
        <p><i class="glyphicon glyphicon-send"></i> <i class="glyphicon glyphicon-phone"></i> <i class="glyphicon glyphicon-globe"></i></p>
      </div>

      <div class="col-md-4">
        <img class="img-circle" src="assets/img/pic2.jpg" width="140" alt="">
        <h4>Pete Ford</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
        <p><i class="glyphicon glyphicon-send"></i> <i class="glyphicon glyphicon-phone"></i> <i class="glyphicon glyphicon-globe"></i></p>
      </div>

      <div class="col-md-4">
        <img class="img-circle" src="assets/img/pic3.jpg" width="140" alt="">
        <h4>Angelica Finning</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
        <p><i class="glyphicon glyphicon-send"></i> <i class="glyphicon glyphicon-phone"></i> <i class="glyphicon glyphicon-globe"></i></p>
      </div>
    </div>
  </div>
</div> -->
<br><br><br>
    <div class="container">
      <div class="col-md-5">
        <h3>Address</h3>
        <p>
        A-45, Atrium, Quark City<br/>
        Mohali, Punjab - 160055<br/>
        India        
      </p>
        <iframe width="100%" height="250" frameborder="0"  style="pointer-events:none" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Quark,+A45,+Phase8B,+Industrial+Area,+S+A+S+Nagar,+Sahibzada+Ajit+Singh+Nagar,+Punjab&amp;aq=0&amp;oq=q&amp;sll=20.983588,82.752628&amp;sspn=45.458666,86.572266&amp;t=m&amp;ie=UTF8&amp;hq=Quark,+A45,+Phase+8B,+Industrial+Area,+S+A+S+Nagar,+Sahibzada+Ajit+Singh+Nagar,+Punjab&amp;hnear=&amp;radius=15000&amp;ll=30.705628,76.689094&amp;spn=0.083788,0.076346&amp;output=embed"></iframe><br /><small></small>

      </div>
      
      <div class="col-md-7" id="contact">
        <?php echo $this->Form->create('Contact', array('role' => 'form')); ?>
        <h3>Drop Us A Line</h3>
        <br>
        
          <div class="form-group">
           <?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'Name'));?>
          </div>
          <div class="form-group">
           <?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email'));?>
          </div>
          <div class="form-group">
           <?php echo $this->Form->input('your_text', array('type'=>'textarea','rows'=>'3','class' => 'form-control', 'placeholder' => ''));?>
          </div>
          <div class="form-group">
          <br>
          <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
        </div>
        
      </div>
      

    </div>
    <?php echo $this->Form->end() ?>
<br>
<br>
<div >
    </div>
</div>