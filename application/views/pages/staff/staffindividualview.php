<div class="container">
    <div class="row gutters">
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
            <div class="card h-30">
                <div class="card-body">
                    <div class="account-settings">
                        <div class="user-profile">
                            <div class="user-avatar">
                                <img src="<?=base_url('assets/images/staff/individualview/profile.jpg')?>" alt="profile">
                            </div>
                            <h5 class="user-name">Lorem Lorem</h5>
                            <h6 class="user-email">loremloremlorem@gmail.com</h6>
                        </div>
                        <label for="formFileSm" class="form-label"><strong>Change profile picture</strong></label>
                        <input class="form-control form-control-sm" id="formFileSm" type="file">
                        <div class="d-md-flex m-0 justify-content-center">
                            <a class="btn btn-primary" href="<?=base_url('staff/viewconsultations')?>" role="button">View Consultations</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
            <div class="card h-80">
                <div class="card-body">
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h6 class="mb-2 text-primary"><strong>Personal Details</strong></h6>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="fullName">Full Name</label>
                                <input type="text" class="form-control" id="fullName" placeholder="Lastname, Firstname, MI.">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="Gender">Gender</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected>Select gender</option>
                                    <option value="1">Female</option>
                                    <option value="2">Male</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="Birthday">Birthday</label>
                                <input type="text" class="form-control" id="Birthday" placeholder="mm/dd/yyyy">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="Age">Age</label>
                                <input type="text" class="form-control" id="Age" placeholder="Enter Age">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="Height">Height</label>
                                <input type="text" class="form-control" id="Height" placeholder="Enter Height">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="Weight">Weight</label>
                                <input type="text" class="form-control" id="Weight" placeholder="Enter Weight">
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="Nationality">Nationality</label>
                                <input type="text" class="form-control" id="Nationality" placeholder="Enter Nationality">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="Developmental Stage">Developmental Stage</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected>Select developmental stage</option>
                                    <option value="1">Infant (0-12 mos) </option>
                                    <option value="2">Toddler (1-3 yrs)</option>
                                    <option value="3">Preschool (4-5 yrs)</option>
                                    <option value="4">School Age (6-12 yrs)</option>
                                    <option value="5">Adolecents (13-18 yrs)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h6 class="mt-3 mb-2 text-primary"><strong>Address</strong></h6>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="Street">Street</label>
                                <input type="name" class="form-control" id="Street" placeholder="Enter Street">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="ciTy">City</label>
                                <input type="name" class="form-control" id="ciTy" placeholder="Enter City">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="sTate">State</label>
                                <input type="text" class="form-control" id="sTate" placeholder="Enter State">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="zIp">Zip Code</label>
                                <input type="text" class="form-control" id="zIp" placeholder="Zip Code">
                            </div>
                        </div>
                    </div>
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h6 class="mt-3 mb-2 text-primary"><strong>Other Details</strong></h6>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="Parent">Patient's Parent or Guardian Name</label>
                                <input type="name" class="form-control" id="Street" placeholder="Enter Full Name">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="phone">Contact Number</label>
                                <input type="tel" class="form-control" id="website" placeholder="09XXXXXXXXX">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="website">Email</label>
                                <input type="url" class="form-control" id="website" placeholder="Enter Email">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="relation">Relationship to Patient</label>
                                <input type="text" class="form-control" id="relation" placeholder="Enter Relationship">
                            </div>
                        </div>
                    </div>
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h6 class="mt-3 mb-2 text-primary"><strong>If Patient is a Student, Please provide School Details</strong></h6>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="School">School Address</label>
                                <input type="name" class="form-control" id="School" placeholder="Enter School Address">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="ciTy">City</label>
                                <input type="name" class="form-control" id="ciTy" placeholder="Enter City">
                            </div>
                        </div>
                    </div>

                    <div class="click">
                        <div class="d-grid gap-2 d-md-flex">
                            <button class="btn btn-primary" type="button">Back</button>
                        </div>

                        <div class="d-md-flex m-0">
                            <a class="btn btn-primary" href="<?=base_url('staff/individualupdate')?>" role="button">Update</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    *{
    padding: 0;
    margin: 0;
}
body{
    font-family: 'Roboto Condensed', sans-serif;
    line-height: 2;
    color: #3F3E39;
    scroll-behavior: smooth;
    height: 100%;
    position: relative;
    background: url("<?=base_url('assets/images/staff/individualview/bg.png')?>");
}


.navbar-brand{
    display: flex;
    flex-direction: row;
}
#logo{
    height: auto;
    width: 60px;
}
h1{
    margin: 0.5rem;
    font-family: 'Fredoka One', cursive;
    font-weight: bold;
    font-size: 2rem;
    color: white;
    text-align: center;
    letter-spacing: 0.5rem;
}

.navbar-toggler-icon{
    color: #ffffff;
    font-size: 1rem;
    font-weight: normal;
}
.container{
    margin: 0 auto;
    padding-top: 100px;
    display: flex;
    flex-direction: row;
    color: #ffffff;
}
.navbar-nav .nav-link{
    font-family: 'Roboto', sans-serif;
    font-weight: bolder;
    font-size: 1.2rem;
    color: white;
}
.navbar-nav .nav-link:hover{
    color: #617e89;
}

.account-settings .user-profile {
    margin: 0 0 1rem 0;
    text-align: center;
}
.account-settings .user-profile .user-avatar {
    margin: 0 0 1rem 0;
}
.account-settings .user-profile .user-avatar img {
    width: 90px;
    height: 90px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
.account-settings .user-profile h5.user-name {
    margin: 0 0 0.5rem 0;
    color: #9fa8b9;
}
.account-settings .user-profile h6.user-email {
    margin: 0;
    font-size: 0.8rem;
    font-weight: 400;
    color: #9fa8b9;
}
.account-settings .about h5 {
    margin: 0 0 15px 0;
    color: navy;
}
.account-settings .about p {
    font-size: 0.825rem;
}
.form-control {
    border: 1px solid #cfd1d8;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    font-size: .825rem;
    background: #ffffff;
    color: #9fa8b9;
}
.form-label {
    color: #333;
}
.form-select {
    color: #9fa8b9;
}

.card {
    background: #ddd;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 1rem;
    color: #333;
}
.btn
{
    margin-top: 20px;
}
.click{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}
.del .btn{
    margin-right: 18px;
}
</style>