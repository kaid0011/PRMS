 <div class="wrapper">
     <div class="form-left">
         <h2></h2>
         <br>

         <div class="account-settings">
             <div class="user-profile">
                 <div class="user-avatar">
                     <img src="<?=base_url('assets/images/admin/individualupdate/profile.jpg')?>" alt="profile">
                 </div>
                 <h5 class="user-name">Lorem Lorem</h5>
                 <h6 class="user-email">loremloremlorem@gmail.com</h6>
                 <br>
                 <h5 class="user-name">Change profile picture</h5>
                 <center><input class="form-control form-control-sm" id="formFileSm" type="file"></center>
                 <div class="del">
                     <div class="d-md-flex m-0 justify-content-center">
                         <button class="btn btn-primary" type="button">Delete</button>
                     </div>
                 </div>
             </div>
         </div>

     </div>

     <form class="form-right">
         <br>
         <div class="row">
             <div class="col-sm-6 mb-3"> <label>First Name</label> <input type="text" name="first_name" id="first_name" class="input-field"> </div>
             <div class="col-sm-6 mb-3"> <label>Last Name</label> <input type="text" name="last_name" id="last_name" class="input-field"> </div>
         </div>

         <div class="mb-3">
             <label class="mb-3 control-label"> Position</label>
             <div class="mb-3 selectContainer">
                 <div class="input-group">
                     <select name="department" class="form-control selectpicker">
                         <option value="">Select your Position</option>
                         <option>Nurse Receptionist</option>
                         <option>Doctor</option>
                         <option>Admin</option>
                     </select>
                 </div>
             </div>
             <label>Contact Number</label> <input type="contact" class="input-field" name="contact" required>
             <label>Email</label> <input type="email" class="input-field" name="email" required>
             <label>Username</label> <input type="username" class="input-field" name="username" required>
             <label>Password</label> <input type="password" name="pwd" id="pwd" class="input-field">
             <label>Confirm Password</label> <input type="password" name="cpwd" id="cpwd" class="input-field">
         </div>
         <div class="click">
             <div class="d-grid gap-2 d-md-flex">
                 <button class="btn btn-primary" type="button">Back</button>
             </div>

             <div class="d-md-flex m-0">
                 <button class="btn btn-primary" type="button">Save</button>
             </div>
         </div>
     </form>
 </div>

 <style>
     @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

     * {
         padding: 0;
         margin: 0;
     }

     body {
         font-family: 'Roboto Condensed', sans-serif;
         color: #3F3E39;
         scroll-behavior: smooth;
         background: url("<?=base_url('assets/images/admin/individualupdate/bg.png')?>");
         padding-top: 3rem;
     }

     .navbar-brand {
         display: flex;
         flex-direction: row;
     }

     #logo {
         height: auto;
         width: 60px;
     }

     h1 {
         margin: 0.5rem;
         font-family: 'Fredoka One', cursive;
         font-weight: bold;
         font-size: 2rem;
         color: white;
         text-align: center;
         letter-spacing: 0.5rem;
     }

     .navbar-toggler-icon {
         color: #ffffff;
         font-size: 1rem;
         font-weight: normal;
     }

     .container {
         margin: 0 auto;
         padding-top: 100px;
         display: flex;
         flex-direction: row;
         color: #ffffff;
     }

     .navbar-nav .nav-link {
         font-family: 'Roboto', sans-serif;
         font-weight: bolder;
         font-size: 1.2rem;
         color: white;
     }

     .navbar-nav .nav-link:hover {
         color: #617e89;
     }

     .wrapper {
         max-width: 1000px;
         background-color: #fff;
         border-radius: 10px;
         position: relative;
         display: flex;
         margin: 50px auto;
         box-shadow: 0 8px 20px 0px #1f1f1f1a;
         overflow: hidden
     }

     .wrapper .form-left {
         background: #889bae;
         border-top-left-radius: 10px;
         border-bottom-left-radius: 10px;
         padding: 20px;
         position: relative;
         width: 100%;
         color: #fff
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
         color: #fff;
     }

     .account-settings .user-profile h6.user-email {
         margin: 0;
         font-size: 0.8rem;
         font-weight: 400;
         color: #fff;
     }

     .form-control {
         border: 1px solid #cfd1d8;
         -webkit-border-radius: 10px;
         -moz-border-radius: 10px;
         border-radius: 10px;
         font-size: 1rem;
         background: #ffffff;
         color: #9fa8b9;

     }

     .form-select {
         color: #9fa8b9;

     }

     .wrapper h2 {
         font-weight: 700;
         font-size: 30px;
         padding: 5px 0 0;
         margin-bottom: 20px;
         pointer-events: none
     }

     .wrapper .form-left p {
         font-size: 0.9rem;
         font-weight: 300;
         line-height: 1.5;
         pointer-events: none
     }

     .wrapper .form-left .text {
         margin: 20px 0 25px
     }

     .wrapper .form-left p span {
         font-weight: 500
     }

     .wrapper .form-left input {
         padding: 15px;
         background: #fff;
         border-top-left-radius: 5px;
         border-bottom-right-radius: 5px;
         width: 180px;
         border: none;
         margin: 15px 0 50px 0px;
         cursor: pointer;
         color: #333;
         font-weight: 700;
         font-size: 0.9rem;
         appearance: unset;
         outline: none
     }

     .wrapper .form-left input:hover {
         background-color: #f2f2f2
     }

     .wrapper .form-right {
         padding: 10px 40px;
         position: relative;
         width: 100%
     }

     .wrapper .form-right h2 {
         color: #3786bd
     }

     .wrapper .form-right label {
         font-weight: 500;
         font-size: 15px;
         color: #666;
         display: block;
         margin-bottom: 8px
     }

     .wrapper .form-right .input-field {
         width: 100%;
         padding: 10px 15px;
         border: 1px solid #e5e5e5;
         border-top-left-radius: 5px;
         border-bottom-right-radius: 5px;
         outline: none;
         color: #666;
     }

     .wrapper .form-right .input-field:focus {
         border: 1px solid #31a031
     }

     .wrapper .option {
         display: block;
         position: relative;
         padding-left: 30px;
         margin-bottom: 12px;
         font-size: 0.95rem;
         font-weight: 900;
         cursor: pointer;
         user-select: none;

     }

     .wrapper .option input {
         position: absolute;
         opacity: 0;
         cursor: pointer;
         height: 0;
         width: 0
     }

     .wrapper .checkmark {
         position: absolute;
         top: 0;
         left: 0;
         height: 18px;
         width: 18px;
         background-color: #fff;
         border: 2px solid #ddd;
         border-radius: 2px
     }

     .wrapper .option:hover input~.checkmark {
         background-color: #f1f1f1
     }

     .wrapper .option input:checked~.checkmark {
         border: 2px solid #e5e5e5;
         background-color: #fff;
         transition: 300ms ease-in-out all
     }

     .wrapper .checkmark:after {
         content: "\2713";
         position: absolute;
         display: none;
         color: #3786bd;
         font-size: 1rem
     }

     .wrapper .option input:checked~.checkmark:after {
         display: block
     }

     .wrapper .option .checkmark:after {
         left: 2px;
         top: -4px;
         width: 5px;
         height: 10px
     }

     .wrapper .register {
         padding: 10px;
         background: #3786bd;

         width: 130px;
         border: none;
         margin: 6px 0 50px 0px;
         cursor: pointer;
         color: #fff;
         font-weight: 500;
         font-size: 15px
     }

     .wrapper .register:hover {
         background-color: #3785bde0
     }

     .wrapper a {
         text-decoration: none
     }

     .btn {
         margin-top: 20px;
     }

     .click {
         display: flex;
         flex-direction: row;
         justify-content: space-between;
     }

     .del .btn {
         margin-right: 18px;
     }

     @media (max-width: 860.5px) {
         .wrapper {
             margin: 50px 5px
         }
     }

     @media (max-width: 767.5px) {
         .wrapper {
             flex-direction: column;
             margin: 30px 20px
         }

         .wrapper .form-left {
             border-bottom-left-radius: 0px
         }
     }

     @media (max-width: 575px) {
         .wrapper {
             margin: 30px 15px
         }

         .wrapper .form-left {
             padding: 25px
         }

         .wrapper .form-right {
             padding: 25px
         }
     }
 </style>