
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
#one{
  width:50px;
  height:100px;
  color:crimson;
  font-size: 30px;
  text-align: center;
}
#two{
  cursor :pointer;
}
#three{
  background :white;
}
img{
  margin:5px;
}
#text{
  text-align:justify;
}
input[type=text],select{
  width:100%;
  padding:12px 20px;
  margin:8px 0;
  display:inline-block;
  border :1px solid #ccc;
  border-radius:4px;
  box-sizing:border-box;
}
input[type=submit]{
  width:100%;
  color:white;
  background :#4cAF50;
  padding:14px 20px;
  margin:8px 0;
  border :none;
  border-radius:4px;
  cursor:pointer;
}
input[type=submit]:hover{
  background :#45a049;
}
#form{
  border-radius:5px;
  background :#2f2f2;
  padding:20px;
}
@media screen and (max-width:600px){
  .container{
    width:100%;
  }
  .container-sm{
    width:100%;
  }
  *{
    width:100%;
  }
}
</style>
</head>

<body>
  <!-------heading------------>
  <div class="container mt-4">
 <h1>SHOPCART</h1>
 <p>One stop for everything</p>
 </div>

 <!---------second heading--------->
<div class="container p-3 mt-4">
<div class="row">
<div class="col" id="one">Explore the new shopping experience </div>
</div>

<!-----------navigation----------->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
  <a href="#" class="navbar-brand">Shop Cart</a>
 <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarcollapse">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbar-collapse">
<div class="navbar-nav mx-5">
<a href="#one" class="nav-item nav-link active">Clothing</a>
<a href="#four" class="nav-item nav-link ">GROCERIES</a>
<a href="#skin" class="nav-item nav-link ">ELECTRONICS</a>
<a href="#foot" class="nav-item nav-link ">FOOT WEAR</a>
</div>
<div class="navbar-nav ms-auto">
  <a href="" class="nav-item nav-link">Login</a>
  <a href="" class="nav-item nav-link">Signup</a>
  </div>
  </div>
  </div>
  </nav>
  <br><br><br>

  <!---------clothing--------------->
  <div class="container p-3 mt-4">
  <div class="row">
 <div class="col" id="one">CLOTHING</div>
 </div>
 <div class="container mx-4" id="three">
 <div class="row">
 <div class="col-sm-4"><img src="https://imagescdn.planetfashion.in/img/app/product/7/785416-9136818.jpg?auto=format&w=494.40000000000003" width="200px" height="200px">
 <p>Rs.799/-</p>
 <p><a href="" class="btn btn-success">BUY NOW</a></p>
</div>
 <div class="col-sm-4"><img src="https://www.beyoung.in/api/cache/catalog/products/rfd_cotton_shirt/pink_punch_rfd_cotton_shirt_for_men_base_700x933.jpg" width="200px" height="200px">
   <p>Rs.899/-</p>
   <p><a href="" class="btn btn-success">BUY NOW</a></p>
 </div>
 <div class="col-sm-4"><img src="https://www.badmaash.com/cdn/shop/files/0A0A4640_2048x2048.jpg?v=1686828910" width="200px" height="200px"><br><br>
  <p>Rs.699/-</p>
  <p><a href="" class="btn btn-success">BUY NOW</a></p>
 </div>
 </div>
 <br>
 <div class="row">
 <div class="col-sm-4"><img src="https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/24561246/2023/8/19/3b5e14ab-7488-40a9-bbde-9d8942c8f4ad1692441570356ReslagMenOliveGreenCargosTrousers1.jpg" width="200px" height="200px">
<br><br>
 <p>Rs.999</p>
<p><a href="" class="btn btn-success">BUY NOW</a></p>
 </div>
 <div class="col-sm-4"><img src="https://imagescdn.planetfashion.in/img/app/product/8/857838-10094133.jpg?auto=format&w=494.40000000000003" width="200px" height="200px">
 <br><br>
 <p>Rs.1199</p>
 <p><a href="" class="btn btn-success">BUY NOW</a></p>
</div>  
<div class="col-sm-4"><img src="https://images.meesho.com/images/products/229654241/nbvvr_512.webp" width="200px" height="200px">
 <br><br>
 <p>Rs.1299</p>
 <p><a href="" class="btn btn-success">BUY NOW</a></p>
  </div>
 </div>
 <br><br>
    <!-------------GROCERIES--------------->
 <div class="container-sm p-3 mt-4">
 <div class="row">
 <div class="col" id="one">GROCERIES</div>
 </div>
<div class="container-sm mx-4" id="four">
 <div class="row">
 <div class="col-sm"><img src="https://www.bigbasket.com/media/uploads/p/xxl/271035_4-freedom-refined-oil-sunflower.jpg" width="200px" height="200px"><br><br>
<p>Rs.149/-</p>
<p><a href="" class="btn btn-success">BUY NOW</a></p>
</div>
 <div class="col-sm"><img src="https://m.media-amazon.com/images/I/81VIi38z2xL._AC_UF1000,1000_QL80_.jpg" width="200px" height="200px"><br><br>
<p>Rs.99/-</p>
<p><a href="" class="btn btn-success">BUY NOW</a></p>
 </div>
 <div class="col-sm"><img src="https://m.media-amazon.com/images/I/91AayPPf20L.jpg" width="200px" height="200px"><br><br>
  <p>Rs.119/-</p>
 <p><a href="" class="btn btn-success">BUY NOW</a></p>
 </div>
 </div>
 <br>
 <div class="row">
<div class="col-sm-4"><img src="https://www.jiomart.com/images/product/original/rvzthyj0ll/harpic-bathroom-cleaner-lemon-1-l-and-harpic-powerplus-toilet-cleaner-original-1-l-product-images-orvzthyj0ll-p604014565-0-202308221318.jpg?im=Resize=(1000,1000)" width="200px" height="200px"><br><br>
<p>Rs.199/-</p>
<p><a href="" class="btn btn-success">BUY NOW</a></p>
</div>
<div class="col-sm-4"><img src="https://bikanervala.com/cdn/shop/files/MoongDaal1kg.jpg?v=1696313943" width="200px" height="200px"><br><br>
<p>Rs.79/-</p>
<p><a href="" class="btn btn-success">BUY NOW</a></p>
</div>
 <div class="col-sm-4"><img src="https://i0.wp.com/mart.lexzer.com/wp-content/uploads/2020/03/200-turmeric-box-aachi-powder-original-.jpeg" width="200px" height="200px"><br><br>
<p>Rs.49/-</p>
<p><a href="" class="btn btn-success">BUY NOW</a></p>
</div>
</div>
</div>
<br><br><br><br><br>

 <!-------------ELECTRONICS--------------->
 <div class="container-sm p-3 mt-4">
 <div class="row">
 <div class="col" id="one">ELECTRONICS</div>
 </div>
<div class="container-sm mx-4" id="four">
 <div class="row">
 <div class="col-sm"><img src="https://www.sencor.com/getmedia/5ab77ab3-6242-4fe0-b057-9d8eb71b0883/SLE32S700TCS.jpg.aspx?width=2100&height=2100&ext=.jpg" width="200px" height="200px"><br><br>
<p>Rs.11,999/-</p>
<p><a href="" class="btn btn-success">BUY NOW</a></p>
</div>
 <div class="col-sm"><img src="https://m.media-amazon.com/images/I/51hJIsWMagL._AC_UF1000,1000_QL80_.jpg" width="200px" height="200px"><br><br>
<p>Rs.89,999/-</p>
<p><a href="" class="btn btn-success">BUY NOW</a></p>
 </div>
 <div class="col-sm"><img src="https://www.sahivalue.com/product-images/14+pro+max.jpg/293890000021697778/400x400" width="200px" height="200px"><br><br>
  <p>Rs.49,999/-</p>
 <p><a href="" class="btn btn-success">BUY NOW</a></p>
 </div>
 </div>
 <br>
 <div class="row">
<div class="col-sm-4"><img src="https://5.imimg.com/data5/SELLER/Default/2021/12/TT/ZU/GU/103117626/boat-rockerz-400-wireless-bluetooth-on-ear-headphone-500x500.png" width="200px" height="200px"><br><br>
<p>Rs.699/-</p>
<p><a href="" class="btn btn-success">BUY NOW</a></p>
</div>
<div class="col-sm-4"><img src="https://5.imimg.com/data5/VK/LU/MY-2341017/lg-microwave-oven.jpg" width="200px" height="200px"><br><br>
<p>Rs.5,999/-</p>
<p><a href="" class="btn btn-success">BUY NOW</a></p>
</div>
 <div class="col-sm-4"><img src="https://www.sony.co.in/image/3d3a90045fd945574b42b191f60f34e6?fmt=pjpeg&bgcolor=FFFFFF&bgc=FFFFFF&wid=2515&hei=1320" width="300px" height="200px"><br><br>
<p>Rs.17,999/-</p>
<p><a href="" class="btn btn-success">BUY NOW</a></p>
</div>
</div>
</div>
<br><br><br><br><br>
<!------------About us-------------->
<div class="container-sm mx-3">
  <div class="row">
  <div class="col-sm">
  <h2>Our story </h2><br>
  <p id="text"> A background on how the business got started and why, what it's known for, who is involved and anything that makes it stand out</p>
 </div>
 <div class="col-sm mt-5">
 <h1><img src="https://t3.ftcdn.net/jpg/02/47/48/00/360_F_247480017_ST4hotATsrcErAja0VzdUsrrVBMIcE4u.jpg" width="200px" height="200px"></h1>
 </div>
 </div>
 </div>
 
  <!------------Foot wear------------->
  <div class="container-sm p-3 mt-4">
 <div class="row">
<div class="col" id="one">Foot wear</div>
</div>
<div class="container-sm mx-4" id="four">
 <div class="row" id="four">
<div class="col-sm"><img src="https://assetscdn1.paytm.com/images/catalog/product/F/FO/FOONIKE-MEN-S-CBIG-262974A5EE13E/1564595001695_0.jpg" width="200px" height="200px"><br><br>
 <p>Rs.699/-</p>
 <p><a href="" class="btn btn-success">BUY NOW</a></p>
</div>
<div class="col-sm"><img src="https://assets.ajio.com/medias/sys_master/root/20230614/Z2np/6489e8bad55b7d0c636b55de/-473Wx593H-469430390-grey-MODEL.jpg" width="200px" height="200px"><br><br>
 <p>Rs.2,499/-</p>
 <p><a href="" class="btn btn-success">BUY NOW</a></p>
</div>
  <div class="col-sm"><img src="https://rukminim2.flixcart.com/image/850/1000/xif0q/sandal/h/4/4/-original-imaggcb384h8y2h2.jpeg?q=90&crop=false" width="200px" height="250px"><br><br>
 <p>Rs.599/-</p>
 <p><a href="" class="btn btn-success">BUY NOW</a></p>
</div>
</div>
<br>
<div class="row">
  <div class="col-sm"><img src="https://images.meesho.com/images/products/110773486/o3pqb_512.webp" width="200px" height="200px"><br><br>
 <p>Rs.799/-</p>
 <p><a href="" class="btn btn-success">BUY NOW</a></p>
</div>
 <div class="col-sm"><img src="https://assets.myntassets.com/h_1440,q_100,w_1080/v1/assets/images/17097806/2022/2/10/aa9f5212-f2eb-4531-b836-1df0c3d3fe2d1644484313283MastHarbourMenWhiteStripedSneakers1.jpg" width="200px" height="200px"><br><br>
 <p>Rs.1,999/-</p>
 <p><a href="" class="btn btn-success">BUY NOW</a></p>
</div>
 <div class="col-sm"><img src="https://assets.ajio.com/medias/sys_master/root/20230726/SsUV/64c13427a9b42d15c97074dc/-473Wx593H-469190539-grey-MODEL.jpg" width="200px" height="200px"><br><br>
 <p>Rs.3,499/-</p>
 <p><a href="" class="btn btn-success">BUY NOW</a></p>
</div>
</div>
</div>
<br><br><br><br><br>
<hr>
<!------------Footer------------>
<div class="container">
<div class="row">
<div class="col-sm-6">
  <p>rights reserved</p>
  </div>
 <div class="col-sm-6 text-md-end">
<a href="" class="text-dark">terms and conditions</a>
<span class="text-muted mx-3">|</span>
<a href="" class="text-dark">privacy</a>
</div>
</div>
<br><br>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a href="#" class="navbar-brand">ShopCart</a>
 <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarcollapse">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbar-collapse">
<div class="navbar-nav mx-5">
<a href="#one" class="nav-item nav-link active">Clothing</a>
<a href="#four" class="nav-item nav-link ">GROCERIES</a>
<a href="#skin" class="nav-item nav-link ">ELECTRONICS</a>
<a href="#foot" class="nav-item nav-link ">FOOT WEAR</a>
</div>
<div class="navbar-nav ms-auto">
  <a href="" class="nav-item nav-link">Login</a>
  <a href="" class="nav-item nav-link">Signup</a>
  </div>
  </div>
  </div>
  </nav>
  <br><br><br>
  <p style="text-align: center">Join our community to know about latest arrivals and offers</p>
  <form id="form">
    <label for="fname">Name</label>
    <input type="text" id="fname" name="first name" placeholder="your name">
    <label for="lname">Mail ID</label>
    <input type="text" id="lname" name="mail id" placeholder="your mail id">
<label for="country">country</label>
<select id="country" name="country">
<option value="India">India</option>
<option value="Canada">Canada</option>
<option value="USA">USA</option>
</select>
<input type="submit" value="submit">
</form>
</div>
</body>

</html>