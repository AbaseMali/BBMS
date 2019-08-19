<div class="modal fade" id="needBlood" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

          <div class="form-group">
            <label>Name </label>
            <input type="text" name="name" class="form-control" placeholder="Enter first name">
          </div>         
         
          <div class="form-group container">
            <label>Gender:</label> <br/>
            <label class="radio-inline">
              <input type="radio" name="optradio" checked> Male
            </label>
            <label class="radio-inline" px-md-5>
              <input type="radio" name="optradio">Female
            </label>
          </div>

          <div class="form-group col-md-4">
              <label for="inputState">Blood type</label>
              <select id="inputState" class="form-control">
                <option selected>A+</option>
                <option>A-</option>
                <option>B+</option>
                <option>B-</option>
                <option>AB+</option>
                <option>AB-</option>
                <option>O+</option>
                <option>O-</option>
              </select>
            </div>

            <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter Email">
          </div>

          <div class="form-group">
            <label>Hospital </label>
            <input type="text" name="hospital" class="form-control" placeholder="Enter hospital">
          </div>  

            <div class="form-group">
            <label>Contact </label>
            <input type="number" name="contact" class="form-control" placeholder="Enter contact">
          </div>    

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>