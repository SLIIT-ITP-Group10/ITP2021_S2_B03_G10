<?php include 'application/views/Layout/sideNavigation.php';?>
<div class="text">Add Complaint</div>
<div class="container pt-5">
  <div class="card card-registration" style="border-radius: 15px;">
    <div class="p-5">
      <h3 class="fw-normal mb-5" style="color: #4835d4;">Resident Registration</h3>
        <div class="row">
            <div class="col-md-2">
                <div class="mb-4 pb-2">
                <label for="exampleInputName" class="form-label">Mrs/Mr/Miss</label><br>
                        <select class="form-select" aria-label="Default select example">
                          <option value="1">Mrs.</option>
                          <option value="2">Mr.</option>
                          <option value="3">Miss.</option>
                        </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="exampleInputName" aria-describedby="Name">
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="exampleInputName" aria-describedby="Name">
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3">
                    <label for="exampleInputOccupation" class="form-label">Occupation</label>
                    <input type="text" class="form-control" id="exampleInputOccupation" aria-describedby="Occupation">
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3">
                    <label for="exampleInputOccupation" class="form-label">Date of Birth</label>
                    <input type="text" class="form-control" id="exampleInputOccupation" aria-describedby="Occupation" placeholder="Year/Month/Day">
                </div>
            </div>
            <div class="col-md-2">
                <div class="mb-4 pb-2">
                <label for="exampleInputName" class="form-label">Gender</label><br>
                        <select class="form-select" aria-label="Default select example">
                          <option value="1">Male</option>
                          <option value="2">Female</option>
                        </select>
                </div>
            </div>
            <div class="col-md-2">
                <div class="mb-4 pb-2">
                <label for="exampleInputName" class="form-label">Marital Status</label><br>
                        <select class="form-select" aria-label="Default select example">
                          <option value="1">Single</option>
                          <option value="2">Married</option>
                        </select>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-3">
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputName" aria-describedby="Name" placeholder="email@example.com">
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Phone No</label>
                    <input type="text" class="form-control" id="exampleInputName" aria-describedby="Name" placeholder="0777 586 734">
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3">
                        <label for="exampleInputNIC" class="form-label">NIC</label>
                        <input type="text" class="form-control" id="exampleInputNIC" aria-describedby="NIC" placeholder="200019445876">
                </div>
            </div>
        </div>


        <div class="row">

            <div class="col-md-3">
              <div class="mb-3">
                  <label for="exampleInputName" class="form-label">Resident ID</label>
                  <input type="text" class="form-control" id="exampleInputName" aria-describedby="Name" placeholder="RES1098" disabled>
              </div>
            </div>

        </div>

        <div class="row mb-5">

        <div class="col-md-3">

            <div class="mb-4 pb-2">
                <label for="exampleInputName" class="form-label">Apartment ID</label><br>
                        <select class="form-select" aria-label="Default select example">
                          <option value="1">SPE10901</option>
                          <option value="2">SPE10902</option>
                          <option value="3">SPE10903</option>
                          <option value="4">SPE10904</option>
                          <option value="5">SPE10905</option>
                          <option value="6">SPE10906</option>
                          <option value="7">SPE10907</option>
                          <option value="8">SPE10908</option>
                          <option value="9">SPE10909</option>
                          <option value="10">SPE10910</option>
                          <option value="11">SPE10911</option>
                          <option value="12">SPE10912</option>
                          <option value="13">SPE10913</option>
                          <option value="14">SPE10914</option>
                          <option value="15">SPE10915</option>
                          <option value="16">SPE10916</option>
                        </select>
            </div>
        </div>

        <div class="col-md-6">
              <div class="mb-3">
                  <label for="exampleInputName" class="form-label">Apartment Address</label>
                  <input type="text" class="form-control" id="exampleInputName" aria-describedby="Name" placeholder="Spathodea Residencies109, 10901, Colombo 00500" disabled>
              </div>
        </div>

        <div class="col-md-1 pr-5">
              <div class="mb-6">
                  <label for="exampleInputName" class="form-label">Size(sqrt)</label>
                  <input type="text" class="form-control" id="exampleInputName" aria-describedby="Name" placeholder="1969" disabled>
              </div>
        </div>

        <div class="col-md-1">
              <div class="mb-6">
                  <label for="exampleInputName" class="form-label">Bedrooms</label>
                  <input type="text" class="form-control" id="exampleInputName" aria-describedby="Name" placeholder="3" disabled>
              </div>
        </div>
        </div>

        <div class="align-left">
          <button type="submit" class="btn btn-primary btn-lg float-end">Register</button>
        </div>
</div>
</div>
</div>
</div>










<?php include 'application/views/Layout/sideNavFooter.php';?>