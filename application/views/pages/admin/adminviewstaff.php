 <div class="box">
     <input type="text" placeholder="Search...">
     <a href="#">
         <i class="fa fa-search"></i>
     </a>
 </div>

 <div class="container">
     <div class="row">
         <div class="col-lg-12">
             <div class="main-box clearfix">
                 <div class="table-responsive">
                     <table class="table user-list">
                         <thead>
                             <tr>
                                 <th class="text-center">
                                     <h6><strong>Staff</h6></strong>
                                 </th>
                                 <th class="text-center">
                                     <h6><strong>Contact Number</h6></strong>
                                 </th>
                                 <th>&nbsp;</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td>
                                     <img src="<?= base_url('assets/images/admin/viewstaff/profile.jpg')?>" alt="profile">
                                     <a href="#" class="user-link">Lastname, Firstname, MI.</a>
                                     <span class="user-subhead">Username</span>
                                 </td>

                                 <td class="text-center">
                                     <span class="label label-default">09XXXXXXXXX</span>
                                 </td>

                                 <td class="text-center">
                                     <a href="<?= base_url('admin/individualview')?>" class="table-link"> View Staff</a>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <style>
     * {
         padding: 0;
         margin: 0;
     }

     body {
         background: url("<?= base_url('assets/images/admin/viewstaff/bg.png')?>");
         font-family: 'Roboto Condensed', sans-serif;
         line-height: 2;
         color: #3F3E39;
         scroll-behavior: smooth;
         padding-top: 10rem;

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
         color: ivory;
         text-align: center;
         letter-spacing: 0.5rem;
     }

     .navbar-toggler-icon {
         color: #ffffff;
         font-size: 1rem;
         font-weight: normal;
     }

     .navbar-nav .nav-link {
         font-family: 'Roboto', sans-serif;
         font-weight: bolder;
         font-size: 1.2rem;
         color: ivory;
     }

     .navbar-nav .nav-link:hover {
         color: #617e89;
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
         color: ivory;
         text-align: center;
         letter-spacing: 0.5rem;
     }

     .navbar-toggler-icon {
         color: #ffffff;
         font-size: 1rem;
         font-weight: normal;
     }

     .navbar-nav .nav-link {
         font-family: 'Roboto', sans-serif;
         font-weight: bolder;
         font-size: 1.2rem;
         color: ivory;
     }

     .navbar-nav .nav-link:hover {
         color: #617e89;
     }

     /* USER LIST TABLE */
     .user-list tbody td>img {
         position: relative;
         max-width: 50px;
         float: left;
         margin-right: 15px;
     }

     .user-list tbody td .user-link {
         display: block;
         font-size: 1.25em;
         padding-top: 3px;
         margin-left: 60px;
     }

     .user-list tbody td .user-subhead {
         font-size: 0.875em;
         font-style: italic;
     }

     /* TABLES */
     .table {
         border-collapse: separate;
     }

     .table-hover>tbody>tr:hover>td,
     .table-hover>tbody>tr:hover>th {
         background-color: #ddd;
     }

     .table thead>tr>th {
         padding-bottom: 0;
         background-color: #ddd;
     }

     .table tbody>tr>td {
         font-size: 0.875em;
         background: #ddd;
         border-top: 10px solid #ddd;
         vertical-align: middle;
         padding: 12px 8px;
     }

     .table tbody>tr>td:first-child,
     .table thead>tr>th:first-child {
         padding-left: 20px;
     }

     .table thead>tr>th span {
         display: inline-block;
         padding: 0 5px;
         padding-bottom: 5px;
         font-weight: normal;
     }

     .table thead>tr>th>a span {
         color: #344644;
     }

     .table thead>tr>th>a span:after {
         content: "\f0dc";
         font-family: FontAwesome;
         font-style: normal;
         font-weight: normal;
         text-decoration: inherit;
         margin-left: 5px;
         font-size: 0.75em;
     }

     .table thead>tr>th>a.asc span:after {
         content: "\f0dd";
     }

     .table thead>tr>th>a.desc span:after {
         content: "\f0de";
     }

     .table thead>tr>th>a:hover span {
         text-decoration: none;
         color: #2bb6a3;
         border-color: #2bb6a3;
     }

     .table.table-hover tbody>tr>td {
         -webkit-transition: background-color 0.15s ease-in-out 0s;
         transition: background-color 0.15s ease-in-out 0s;
     }

     .table tbody tr td .call-type {
         display: block;
         font-size: 0.75em;
         text-align: center;
     }

     .table tbody tr td .first-line {
         line-height: 1.5;
         font-weight: 400;
         font-size: 1.125em;
     }

     .table tbody tr td .first-line span {
         font-size: 0.875em;
         color: #969696;
         font-weight: 300;
     }

     .table tbody tr td .second-line {
         font-size: 0.875em;
         line-height: 1.2;
     }

     .table a.table-link {
         margin: 0 5px;
         font-size: 1.125em;
     }

     .table a.table-link:hover {
         text-decoration: none;
         color: #2aa493;
     }

     .table a.table-link.danger {
         color: #fe635f;
     }

     .table a.table-link.danger:hover {
         color: #dd504c;
     }

     .table-products tbody>tr>td {
         background: none;
         border: none;
         border-bottom: 1px solid #ebebeb;
         -webkit-transition: background-color 0.15s ease-in-out 0s;
         transition: background-color 0.15s ease-in-out 0s;
         position: relative;
     }

     .table-products tbody>tr:hover>td {
         text-decoration: none;
         background-color: #f6f6f6;
     }

     .table-products .name {
         display: block;
         font-weight: 600;
         padding-bottom: 7px;
     }

     .table-products .price {
         display: block;
         text-decoration: none;
         width: 50%;
         float: left;
         font-size: 0.875em;
     }

     .table-products .price>i {
         color: #8dc859;
     }

     .table-products .warranty {
         display: block;
         text-decoration: none;
         width: 50%;
         float: left;
         font-size: 0.875em;
     }

     .table-products .warranty>i {
         color: #f1c40f;
     }

     .table tbody>tr.table-line-fb>td {
         background-color: #9daccb;
         color: #262525;
     }

     .table tbody>tr.table-line-twitter>td {
         background-color: #9fccff;
         color: #262525;
     }

     .table tbody>tr.table-line-plus>td {
         background-color: #eea59c;
         color: #262525;
     }

     .table-stats .status-social-icon {
         font-size: 1.9em;
         vertical-align: bottom;
     }

     .table-stats .table-line-fb .status-social-icon {
         color: #556484;
     }

     .table-stats .table-line-twitter .status-social-icon {
         color: #5885b8;
     }

     .table-stats .table-line-plus .status-social-icon {
         color: #a75d54;
     }

     .box {
         margin-left: 45rem;
         margin-bottom: 3rem;
         height: 50px;
         width: 450px;
         display: flex;
         cursor: pointer;
         padding: 20px 20px;
         background: #fff;
         border-radius: 30px;
         align-items: center;
         box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
     }

     .box:hover input {
         width: 400px;
     }

     .box input {
         width: 500px;
         outline: none;
         border: none;
         font-weight: 500;
         transition: 0.8s;
         background: transparent;
     }

     .box a .fas {
         color: white;
         font-size: 18px;
     }
 </style>