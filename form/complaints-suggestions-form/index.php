<?php include 'includes/header.php'; ?>

<?php include 'includes/header.php'; ?>

<section id="features" class="sections">
    <div class="container">
      <div class="row">
        <div class="col-md-12 heading-content">
        <h3>Complaints/Suggestions</h3>
        <hr />
       </div>
      </div>
      
      <div class="row">
           <div class="col-md-6 col-xs-12  complaint-div" >
             <label for="name">Enter Name</label>
             <div class="input-group">
                <span class="input-group-addon" style="background: none;"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" required="required" id="name" placeholder="Full name" name="you-name" style="border-left: none;" />
                
             </div>
            </div>
           <div class="col-md-6 col-xs-12 complaint-div">
              <label for="email">Enter Contact</label>
              <div class="input-group">
                  <span class="input-group-addon" style="background: none;"><i class="fa fa-phone"></i></span>
                  <input type="text" class="form-control" id="contact" required="required" placeholder="Contact number" name="your-contact"  style="border-left: none;" />
              </div>
           </div>
           <br>
           <div class="col-md-6 col-xs-12 complaint-div">
             <label for="name">Enter Email</label>
             <div class="input-group">
                <span class="input-group-addon" style="background: none;"><i class="fa fa-envelope"></i></span>
                <input type="email" class="form-control" id="email" placeholder="Email address(optional)" name="your-email"  style="border-left: none;"/>
              </div>
            </div>
            <br>
           <div class="col-md-6 col-xs-12 complaint-div">
              <label for="email">Enter city</label>
              <div class="input-group">
                <span class="input-group-addon" style="background: none;"><i class="fa fa-city"></i></span>
                <input type="text" class="form-control" id="city" required="required" name="your-city" placeholder="Your city" required="required"  style="border-left: none;"/>
              </div>
           </div>
            <br>
        <div class="col-md-12 col-xs-12 complaint-div">
            <label>Suggestions/Complaints</label>
            <textarea rows="5" cols="50" name="your-sugg-comp" id="sugg" placeholder="Write your suggestions/complaint" class="form-control"></textarea>
        </div>
      
        <div class="col-md-6  complaint-div">
            <label>Attach a file</label>
            <input type="file" name="attachment" id="atatch-file" class="form-control">
        </div>
        <div class="col-md-6 complaint-div">
            <label>Select one option</label><br><br>
            <input type="radio" name="option" checked value="suggestions">Suggestions
            <input type="radio" name="option" value="complaints" style="margin-left: 20px">Complaints
        </div>

        <div class="col-md-12 col-xs-12 col-sm-12 complaint-div">
            <a href="#" class="btn btn-default text-center" id="phone-button">Submit</a>
        </div>
      </div>

    </div>

</section>
       
<?php include 'includes/footer.php';  ?>
           
