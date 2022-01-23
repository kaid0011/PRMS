<section class="section-c">
    <br>
    <div class="heading" id="loginsection">
        <h1></h1>
    </div>
    <section class="loginpage">
        <div class="login-content">

            <div class="login">
                <img id="loging" src="<?=base_url('assets/images/staff/mainpage/register1.png')?>">
                <br>
                <br>
                <a href="<?=base_url('staff/registerpatient')?>" target="_blank" type="button" class="cta">SELECT</a>
            </div>

            <div class="login">
                <img id="loging" src="<?=base_url('assets/images/staff/mainpage/view1.png')?>">
                <br>
                <br>
                <a href="<?=base_url('staff/viewpatient')?>" target="_blank" type="button" class="cta">SELECT</a>
            </div>


        </div>

    </section>
</section>

<style>
    *{
    padding: 0;
    margin: 0;
}
body{
	background: url("<?=base_url('assets/images/staff/mainpage/bg.png')?>");
    font-family: 'Roboto Condensed', sans-serif;
    line-height: 2;
    color: #3F3E39;
    scroll-behavior: smooth;
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

.section-c .heading h1{
    color: #fff;
    font-size: 3rem;
    text-transform: uppercase;
    display: flex;
    justify-content: center;
    padding: 40px 0 40px 0;
}
.loginpage{
    min-height: 100vh;
}
.login{
    background: linear-gradient((214, 9, 9, 0),rgba(0, 0, 0, 0.3));
    justify-content: center;
    min-height: auto;
    padding: 1rem;
    width: 30vw;  
    height: auto;
    text-align: center;
    background: #889bae;
    box-shadow: 0 0 1px 1px #fff;
    border-radius: 15px;
    line-height: 1rem;
}
.login-content{
    padding-bottom: 4rem;
    display: flex;
    flex-direction: row;
    justify-content: space-evenly;
    align-items: center;
}
.login h2{
    padding: 1rem;
    font-family: 'Montserrat', sans-serif;
    color: #fff;
    font-size: 1rem;
}
#loging{
    align-items: center;
    width: 20vw;
    height: 35rem;
    box-shadow: 1px 1px 1px 1px #fff;
}
.cta {
    display: inline-block;
    padding: 5px 20px;
    color: white;
    border: 1px solid #333;
    border-radius: 25px;
    font-size: 1rem;
    text-transform: uppercase;
    letter-spacing: .1rem;
    transition: .3s ease;
    text-decoration: none;
}
.cta:hover {
    color: white;
    background-color: #8FBC8F;
    transform: scale(1.1);
}
</style>