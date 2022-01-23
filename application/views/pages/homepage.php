<div class="container">
    <div class="p-5 mt-5">
        <h1> <strong>CLINIC</strong> </h1>
        <p class="lead "> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente maxime provident cum, doloremque voluptate unde! </p>

        <p><a href="#ANNOUNCEMENT" target="_blank" class="btn btn-light btn-lg">More About Us</a></p>
    </div>

    <div class="card m-2 card-md card-lg justify-content-center">

        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-item-active">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="<?=base_url('assets/images/homepage/img1.jpg')?>" style="height: 30rem" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?=base_url('assets/images/homepage/img2.jpg')?>" style="height: 30rem" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?=base_url('assets/images/homepage/img3.jpg')?>" style="height: 30rem" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?=base_url('assets/images/homepage/img4.jpg')?>" style="height: 30rem" alt="Fourth slide">
                </div>
            </div>
            <button class="carousel-control-prev" href="#carouselExampleIndicators" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" href="#carouselExampleIndicators" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

<div class="content">
    <div class="heading">
        <h1 class="title text-center p-4">ANNOUNCEMENT</h1>
        <p class="text-light text-center"><strong><em>Latest Updates</em></strong></p>
    </div>

    <div class="row justify-content-center">

        <div class="card m-5 p-2" style="width: 25rem;">
            <div class="card-body">
                <h5 class="card-title">News Title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            <img class="card-img-bottom" src="<?=base_url('assets/images/homepage/photo1.jfif')?>" alt="Card image cap" style="height: 18rem;">
        </div>

        <div class="card m-5 p-2" style="width: 25rem;">
            <div class="card-body">
                <h5 class="card-title">News Title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            <img class="card-img-bottom" src="<?=base_url('assets/images/homepage/photo2.jpg')?>" alt="Card image cap" style="height: 18rem;">
        </div>

        <div class="card m-5 p-2" style="width: 25rem;">
            <div class="card-body">
                <h5 class="card-title">News Title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            <img class="card-img-bottom" src="<?=base_url('assets/images/homepage/photo3.jpg')?>" alt="Card image cap" style="height: 18rem;">
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
    background: url("<?=base_url('assets/images/homepage/bg.png')?>");
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
    color: ivory;
    text-align: center;
    letter-spacing: 0.5rem;
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
    color: ivory;
}
.navbar-nav .nav-link:hover{
    color: #617e89;
}

footer{
    background-color: #617e89;
    color: #fff;
    text-align: center;
    padding: 1rem 0;
}
.social-links{
    display: flex;
    justify-content: center;
    margin-bottom: 1.4rem;
}
.social-links a{
    color: #fff;
    border: 2px solid #fff;
    width: 50px;
    height: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 30px;
    text-decoration: none;
    margin: 0 0.3rem;
}
.social-links a:hover{
    color: #617e89;
}

#ABOUT{
    min-height: 100vh;
    background-color: #d2d6d9;
    align-items: center;
}
.cont h3{
    color: #fff;
    font-weight: bolder;
    font-size: 3rem;
    padding-top: 2rem;
}
.new h3{
    color:#fff;
    font-size: 3rem;
    font-weight: bolder;
}

.heading h2{
    color: white;
    text-align: center;
    padding: 2rem;
    font-weight: bolder;
    font-size: 3rem;
}
.container{
    display: flex;
    flex-direction: row;
    color: white;
    margin-top: 5rem;
    padding-top: 10rem;
    padding-bottom: 10rem;
}
.container h1{
    color: navy;
    font-family: Kaushan Script;
    font-size: 4rem;
    text-align: center;
}
.container .btn:hover{
    background-color: #617e89;
    color: #ffffff;
}
@media only screen and (min-width:950px){
    .container .card{
        width: 800px;
    }
}
@media only screen and (max-width:950px){
    .container{
        flex-direction: column;
    }
    .container .card{
        width: auto;
    }
}
.carousel-control-next, .carousel-control-prev{
    background-color: #3F3E39;
    display: flex;
    border-radius: 10rem;
    height: 5rem;
    margin-top: 12rem;
}
.content{
    padding-top: 2rem;
}
.card h5{
    font-weight: 200;
    font-family: 'Roboto', sans-serif;
}
.content .heading h1{
    font-family: Kaushan Script;
    font-size: 3rem;
    color: navy;
}
</style>