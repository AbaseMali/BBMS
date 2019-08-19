<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add donor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="donor-name" class="col-form-label">Full Name:</label>
              <input type="text" class="form-control" id="donor-name">
            </div>

            <!-- Gender -->
            <div class="form-group container">
              <label for="message-text" class="col-form-label mx-auto">Gender:</label>
              <div class="row">
                <label>Male:</label>
                <div class="col-sm-3">
                  <input type="radio" class="form-control " id="M" />
                </div>
                <label>Female:</label>
                <div class="col-sm-3">
                  <input type="radio" class="  form-control " id="F" />
                </div>
              </div>
            </div>
            <!-- Gender end -->

            <div class="form-group">
              <label for="job" class="col-form-label">Job:</label>
              <input type="text" class="form-control" id="job">
            </div>

            <div class="container">
              <div class="row">
                <label for="Married"> Married: </label>
                <div class="col-sm-3">
                  <input type="checkbox" class="form-control" id="Married">
                </div>
                <label for="Single"> Single: </label>
                <div class="col-sm-3">
                  <input type="checkbox" class="form-control" id="Single">
                </div>
              </div>
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
              <label for="email" class="col-form-label">Email:</label>
              <input type="Email" class="form-control" id="email">
            </div>
            <div class="form-group">
              <label for="contact" class="col-form-label">Contact No:</label>
              <input type="Number" class="form-control" id="contact">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Register</button>
        </div>
      </div>
    </div>
  </div>