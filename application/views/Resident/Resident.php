<?php include 'application/views/Layout/sideNavigation.php';?>

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

<div class="container py-2 h-100">      
  <div class="card card-registration" style="border-radius: 15px;">
    <div class="col-lg-6">
      <div class="p-5">
        <h3 class="fw-normal mb-5" style="color: #4835d4;">Resident Registration</h3>
<form>
      <div class="row">
              <div class="col-md-8">
                  <div class="mb-3">
                      <label for="exampleInputName" class="form-label">Apartment Owner Name</label>
                      <input type="text" class="form-control" id="exampleInputName" aria-describedby="Name">
                  </div>
              </div>

              <div class="col-md-8">
                  <div class="mb-3">
                      <label for="exampleInputOccupation" class="form-label">Occupation</label>
                      <input type="text" class="form-control" id="exampleInputOccupation" aria-describedby="Occupation">
                  </div>
              </div>

              <div class="col-md-8">
                  <div class="mb-3">
                          <label for="exampleInputNIC" class="form-label">NIC</label>
                          <input type="text" class="form-control" id="exampleInputNIC" aria-describedby="NIC">
                  </div>
              </div>
              
      </div>
        <div class="col-md-8">
            <div class="mb-3">
                    <label for="exampleInputNIC" class="form-label">NIC</label>
                    <input type="text" class="form-control" id="exampleInputNIC" aria-describedby="NIC">
            </div>
        </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>    
</div>
<section class="h-100 h-custom gradient-custom-2">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="p-5">
                  <h3 class="fw-normal mb-5" style="color: #4835d4;">General Infomation</h3>

                  <div class="mb-4 pb-2">
                    <select class="select">
                      <option value="1">Title</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                      <option value="4">Four</option>
                    </select>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline">
                        <input type="text" id="form3Examplev2" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplev2">First name</label>
                      </div>

                    </div>
                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline">
                        <input type="text" id="form3Examplev3" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplev3">Last name</label>
                      </div>

                    </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <select class="select">
                      <option value="1">Position</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                      <option value="4">Four</option>
                    </select>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                      <input type="text" id="form3Examplev4" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Examplev4">Position</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2 mb-md-0 pb-md-0">

                      <div class="form-outline">
                        <input type="text" id="form3Examplev5" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplev5">Bussines Arena</label>
                      </div>

                    </div>
                    <div class="col-md-6">

                      <select class="select">
                        <option value="1">Employees</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">Four</option>
                      </select>

                    </div>
                  </div>

                </div>
              </div>
              <div class="col-lg-6 bg-indigo text-white">
                <div class="p-5">
                  <h3 class="fw-normal mb-5">Contact Details</h3>

                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                      <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Examplea2">Street + Nr</label>
                    </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                      <input type="text" id="form3Examplea3" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Examplea3">Additional Information</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-5 mb-4 pb-2">

                      <div class="form-outline form-white">
                        <input type="text" id="form3Examplea4" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplea4">Zip Code</label>
                      </div>

                    </div>
                    <div class="col-md-7 mb-4 pb-2">

                      <div class="form-outline form-white">
                        <input type="text" id="form3Examplea5" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplea5">Place</label>
                      </div>

                    </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                      <input type="text" id="form3Examplea6" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Examplea6">Country</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-5 mb-4 pb-2">

                      <div class="form-outline form-white">
                        <input type="text" id="form3Examplea7" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplea7">Code +</label>
                      </div>

                    </div>
                    <div class="col-md-7 mb-4 pb-2">

                      <div class="form-outline form-white">
                        <input type="text" id="form3Examplea8" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplea8">Phone Number</label>
                      </div>

                    </div>
                  </div>

                  <div class="mb-4">
                    <div class="form-outline form-white">
                      <input type="text" id="form3Examplea9" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Examplea9">Your Email</label>
                    </div>
                  </div>

                  <div class="form-check d-flex justify-content-start mb-4 pb-3">
                    <input
                      class="form-check-input me-3"
                      type="checkbox"
                      value=""
                      id="form2Example3c"
                    />
                    <label class="form-check-label text-white" for="form2Example3">
                      I do accept the <a href="#!" class="text-white"><u>Terms and Conditions</u></a> of your site.
                    </label>
                  </div>

                  <button type="button" class="btn btn-light btn-lg" data-mdb-ripple-color="dark">Register</button>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</section>
<?php include 'application/views/Layout/sideNavFooter.php';?>