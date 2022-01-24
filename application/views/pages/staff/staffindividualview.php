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
                        </div>
                        <!-- View Medical History Button -->
                        <div class="d-md-flex m-0 justify-content-center">
                            <input type="submit" class="btn btn-primary" name="action" value="View Medical History">
                        </div>
                        <!-- View Consultations Button -->
                        <div class="d-md-flex m-0 justify-content-center">
                            <input type="submit" class="btn btn-primary" name="action" value="View Consultations">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
            <div class="card h-80">
                <div class="card-body">
                    <div class="row gutters">
                        <div class="d-flex justify-content-between">
                            <h6 class="m-0 text-primary"><strong>Personal Details</strong></h6>
                            <!-- Update Button -->
                            <input type="submit" class="m-0 btn btn-primary" name="action" value="Update">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="fullName">Full Name</label>
                                <input type="text" class="form-control" id="fullName" placeholder="Lastname, Firstname, MI.">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="Gender">Sex</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option disabled selected hidden>Select Sex</option>
                                    <option value="1">Female</option>
                                    <option value="2">Male</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="Birthday">Birthdate</label>
                                <input type="date" class="form-control" id="birthdate">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="Age">Age</label>
                                <input type="text" class="form-control" id="age" placeholder="Enter Age">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="Height">Height</label>
                                <input type="text" class="form-control" id="height" placeholder="Enter Height">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="Weight">Weight</label>
                                <input type="text" class="form-control" id="weight" placeholder="Enter Weight">
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="Nationality">Nationality</label>
                                <input type="text" class="form-control" id="nationality" placeholder="Enter Nationality">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="Developmental Stage">Developmental Stage</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option hidden disabled selected>Select Developmental Stage</option>
                                    <option value="1">Infant (0-12 mos) </option>
                                    <option value="2">Toddler (1-3 yrs)</option>
                                    <option value="3">Preschool (4-5 yrs)</option>
                                    <option value="4">School Age (6-12 yrs)</option>
                                    <option value="5">Adolescents (13-18 yrs)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h6 class="mt-3 mb-2 text-primary"><strong>Address</strong></h6>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-12">
                            <div class="form-group">
                                <label for="address">Complete Address</label>
                                <input type="text" class="form-control" id="address" placeholder="Enter Complete Address">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                            <div class="form-group">
                                <label for="zip">Zip Code</label>
                                <input type="text" class="form-control" id="zip" placeholder="Enter Zip Code">
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
                                <input type="name" class="form-control" id="guardian" placeholder="Enter Full Name">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="phone">Contact Number</label>
                                <input type="tel" class="form-control" id="contact" placeholder="09XXXXXXXXX">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="website">E-mail Address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter E-mail Address">
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
                        <div class="col-12">
                            <div class="form-group">
                                <label for="School">School Name</label>
                                <input type="text" class="form-control" id="schoolname" placeholder="Enter School Name">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="School">School Address</label>
                                <input type="text" class="form-control" id="schooladdress" placeholder="Enter School Address">
                            </div>
                        </div>
                    </div>

                    <div class="click">
                        <!-- Back Button -->
                        <div class="d-grid gap-2 d-md-flex">
                            <input type="submit" class="btn btn-primary" name="action" value="Back">
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