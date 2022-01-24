<div class="content">
    <div class="upd">
        <div class="d-md-flex m-0 justify-content-end">
            <button class="btn btn-primary" type="button">Update</button>
        </div>
    </div>
    <label for="diag">Diagnosis:</label>
    <div class="form-floating  mb-3">
        <textarea class="form-control" placeholder="Type here..." id="floatingTextarea" style="height: 250px"></textarea>

    </div>
    <label for="pres">Prescription:</label>
    <div class="form-floating  mb-3">
        <textarea class="form-control" placeholder="Message" id="floatingTextarea" style="height: 250px"></textarea>
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
    background: url("<?=base_url('assets/images/staff/viewdiagnosis/bg.png')?>");
    background-position: center;
    background-size: cover;
    height: 100%;
    position: relative;
    display: flex;
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
button{
    color: #ffffff;
    opacity: 1;
}
.navbar-toggler-icon{
    color: #ffffff;
    font-size: 1rem;
    font-weight: normal;
}

.navbar-nav .nav-link{
    font-family: 'Roboto', sans-serif;
    font-weight: bolder;
    font-size: 1.2rem;
    color: white;
}
.navbar-nav .nav-link:hover{
    color: yellow;
}
.content{
    background-color: lightblue;
    padding: 2rem;
    margin-top: 7rem;
    width: 50rem;
    display: flex;
    flex-direction: column;
    margin-left: 34rem;
    border-radius: 20px;
    border-style: solid;
    border-left-color: blue ;
    border-top-color: blue;
    border-bottom-color: blue;
    border-right-color: blue;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
}
label{
    font-size: 2rem;
    color: darkblue;
    font-weight: bolder;
    text-transform: uppercase;
}
.btn{
    font-size: x-large;
}
</style>