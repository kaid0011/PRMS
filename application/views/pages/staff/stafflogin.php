<div class="container" id="container">
	<div class="form-container sign-in-container">
		<form action="#">
			<h1>Welcome Back!</h1>
			<p>To keep connected with us please login with your personal infomation</p>
                <br> 
			<input type="email" placeholder="Email"/>
            <br>
			<input type="password" placeholder="Password"/>
            <br>
            <a href="<?=base_url('')?>">Forgot your password?</a>
            <br> 
            <a href="<?=base_url('staff')?>" target="_blank" type="button" class="cta">LOG IN</a>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				
			     
			</div>
		</div>
	</div>
</div>

<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	box-sizing: border-box;
	
}

body {
	background: url("<?=base_url('assets/images/staff/login/bg.png')?>");
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Roboto Condensed', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
	
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

h1 {
	font-weight: bold;
	margin: 0;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

.cta {
    display: inline-block;
    padding: 10px 40px;
    background-color: #889bae;
    border: 1px solid #333;
    border-radius: 25px;
    font-size: 1.2rem;
    text-transform: uppercase;
    letter-spacing: .1rem;
    transition: .3s ease;
    text-decoration: none;
	color: #FFF;
	
}
.cta:hover {
  
    background-color: #8FBC8F;
    transform: scale(1.1);
}
form {
 	background-color: #FFFFFF;
	display: flex;
  	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
 	text-align: center;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

.container {
	
 	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 768px;
	max-width: 100%;
	min-height: 480px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
	
}

.sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}

.container.right-panel-active .sign-in-container {
	transform: translateX(100%);
}

.sign-up-container {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

.container.right-panel-active .sign-up-container {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}
	
	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}

.container.right-panel-active .overlay-container{
	transform: translateX(-100%);
}

.overlay {
	background: #889bae;
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
  	transform: translateX(50%);
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
	
}

.overlay-left {
	transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
	transform: translateX(0);
}

.overlay-right {
	right: 0;
	transform: translateX(0);
}

.container.right-panel-active .overlay-right {
	transform: translateX(20%);
}

</style>