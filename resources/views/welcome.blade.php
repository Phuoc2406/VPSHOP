<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <div class="container">
            <div class="top-header">
                <img src="https://www.freepnglogos.com/uploads/logo-keren-png/logo-computer-networking-26.png" alt="">
                <ul>
                    <li>TRANG CHỦ</li>
                    <li>SẢN PHẤM</li>
                    <li>LIÊN HỆ</li>
                    <button>
                        Đăng Nhập / Đăng ký
                    </button>
                </ul>
            </div>

            <div id="wrap">
                <div id="createTask" class="header">
                    <div class="glowing_text">
                        <h1>
                            <span> Chào Mừng </span>
                            <span> Đến Với </span>
                            <span> VP SHOP</span>
                        </h1>
                    </div>
                </div>
   
       <div class="slide">
             <img src="https://image.shutterstock.com/image-vector/computer-shop-various-parts-on-260nw-569212921.jpg" alt="">  
       </div>
       <div class="logobaohanh">
       <div class="col-12-md">
           <div class style="padding-top: 100px;margin-left: 200px;"col-3-md">
               <img src="https://www.sporter.vn/wp-content/uploads/2021/09/Banner-tu-van-1.png" alt="">
           </div>

        <div class  style="margin-left: 600px;margin-top: -55px;"col-3-md">
            <img src="https://www.sporter.vn/wp-content/uploads/2021/09/Banner-tu-van-2.png" alt="">
        </div>

        <div class style="margin-left: 1000px;margin-top: -55px;"col-3-md">
            <img src="https://www.sporter.vn/wp-content/uploads/2021/09/Banner-tu-van-3.png" alt="">
        </div>

        <div class style="margin-left: 1400px;margin-top: -55px;"col-3-md">
            <img src="https://www.sporter.vn/wp-content/uploads/2021/09/Banner-tu-van-4.png" alt="">
        </div>
</div>
      

   </div>

</body>

<footer id="colophon" class="site-footer" style="margin-top:90px">
		<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="site-info">
					
					</div><!-- .site-info -->
					<p>Chào Mừng các bạn đến với VP SHOP</p>
					<p>Liên Hệ với chúng tôi để được tư vấn một các tận tình nhất</p>
					<p> 090876xxxx - 02137489xxxx </p>
					<p>Hoặc</p>
						<strong>
							<a href="mailto:"nvp2406@gmail.com">nvp2406.@gmail.com</a>
						</strong>
			</div>
		</div>
		</div>
	</div>
	
	</div><!-- #page -->
</footer><!-- #colophon -->
</html>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.body{
    height: 100%;
    font-family: 'Poppins', sans-serif;
}
body {
    background: url(https://w0.peakpx.com/wallpaper/258/7/HD-wallpaper-rgb-keyboard-computer-computers-family-gamer-inside-life-logo-notebook-shop-technology.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }

.container button{
    width: 200px;
    height: 30px;
    background-color: #02a860;
    color: white;
    outline: none;
    border: none;
    font-weight: 600;
    cursor: pointer;
    transition: 0.25s;
    transition-delay: 0.15s;
    margin-right: 50px;
}



.top-header{
    width: 100%;
    height: 100px;
    background-color: rgb(63, 52, 52);
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.top-header ul{
    list-style: none;
    display: flex;
}
.top-header ul li{
    margin: 6px 120px;
    color: white;
    font-size: 17px;
    font-weight: 600;
    cursor: pointer;
    transition: 0.25s;
    transition-delay: 0.15s;
}


.glowing_text h1 span{
    animation: animate 5s linear infinite;
  }
  .glowing_text h1 span:nth-child(even){
    animation-delay: 0.4s;
  }
  @keyframes animate{
    0%,18%,20%,50.1%,60%,65.1%,80%,90.1%,92%
    {
      color: #eeee22;
      text-shadow: none;
    }
    18.1%,20.1%,30%,50%,60.1%,65%,80.1%,90%,92.1%,100%
    {
      color: #fff;
      text-shadow: 
        0 0 10px yellow,
        0 0 20px yellow,
        0 0 40px yellow,
        0 0 80px yellow,
        0 0 160px yellow,
        0 0 490px yellow;
    }
  }
.glowing_text{
    padding-top: 100px;
    margin-left: 750px;
}
.slide{
    padding-top: 200px;
    margin-left: 20%;
}
.slide img{
    width: 1200px;
    height: auto;

}
.top-header img{
    width: 100px;
    margin-left: 200px;
    
}

.site-footer{
    background: black;
    color: white;
    text-align: center;
    padding-top: 30px;
    padding-bottom: 30px;
}
.site-footer{
    color: white;
    text-decoration: none;
}
.home-contact{
    border: 1px black;
    border-radius: 10px;
    box-shadow: 0 4px 10px red;
    width: 325px;
}
#colophon{
    background-color: black
}
.footer{
    margin-top: 20px
}
.phukien h1{
 color: white
}
h2, h3 {
    color: white
}
h2, h3{
    margin-left:70px;
}



</style>


