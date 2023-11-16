<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?= $title ?? "No title"; ?></title>
   <link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="public/fontawesome/css/all.min.css">
   <link rel="stylesheet" href="public/css/frontend.css">
   <link rel="stylesheet" href="themgiohang.css">
   <link rel="stylesheet" href="test.css">
   <link rel="stylesheet" href="test_hover.css">
   <link rel="stylesheet" href="testpost.css">
   <script src="public/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="public/jquery/jquery-3.7.0.min.js"></script>
</head>

<body>
   <section class="nttd-header">
      <div class="container">
         <div class="row">
            <div class="col-6 col-sm-6 col-md-2 py-1">
            <a href="http://localhost/HoangPhiTu_2122110029/">
                  <img src="public/images/logoo.psd" width="80px" alt="Logo">
               </a>
            </div>
            <div class="col-12 col-sm-9 d-none d-md-block col-md-5 py-3">
               <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Nhập nội dung tìm kiếm"
                     aria-label="Recipient's username" aria-describedby="basic-addon2">
                  <span class="input-group-text bg-main" id="basic-addon2">
                     <i class="fa fa-search" aria-hidden="true"></i>
                  </span>
               </div>
            </div>
            <div class="col-12 col-sm-12 d-none d-md-block col-md-4 text-center py-2">
               <div class="call-login--register border-bottom">
                  <ul class="nav nav-fills py-0 my-0">
                     <li class="nav-item">
                        <a class="nav-link" href="login.html">
                           <i class="fa fa-phone-square" aria-hidden="true"></i>
                           000000
                        </a>
                     </li>
                     
                     <?php if(isset($_SESSION['name'])):?>
                     <li class="nav-item">
                        <a class="nav-link" href="profile.html">
                           khách hàng: <?php echo $_SESSION ['name'];?>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="index.php?option=customer&logout=true">Đăng xuất</a>
                     </li>
                     <?php else:?>
                        <li class="nav-item">
                        <a class="nav-link" href="index.php?option=customer&login=true">Đăng nhập</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="index.php?option=customer&register=true">Đăng ký</a>
                     </li>
                     <?php endif;?>
                  </ul>
               </div>
               <div class="fs-6 py-2">
                  ĐỔI TRẢ HÀNG HOẶC HOÀN TIỀN <span class="text-main">TRONG 3 NGÀY</span>
               </div>
            </div>
            <div class="col-6 col-sm-6 col-md-1 text-end py-4 py-md-2">
               <a href="index.php?option=cart">
                  <div class="box-cart float-end">
                     <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                     <span id="showcart">
                        <?php echo isset($_SESSION['cart'])?count($_SESSION['cart']):0;?>
                     </span>
                  </div>
               </a>
            </div>
         </div>
      </div>
   </section>
   <section class="hdl-mainmenu bg-main">
   <div class="container">
    <header>
            <h1>test giỏ hàng</h1>
            <div class="shopping">
                <img src="image/shopping.svg">
                <span class="quantity">0</span>
            </div>
        </header>
    </div>

   <div class="container">
        <input type="radio" name="grid" id="grid-1" value="1">
        <input type="radio" name="grid" id="grid-2" value="2">
        <input type="radio" name="grid" id="grid-3" value="3">
        <input type="radio" name="grid" id="grid-4" value="4" checked>

        <div class="filterGrid">
            <label for="grid-1"><img src="grid1.png"></label>
            <label for="grid-2"><img src="grid2.png"></label>
            <label for="grid-3"><img src="grid3.png"></label>
            <label for="grid-4"><img src="grid4.png"></label>
        </div>
        <!-- <div class="list">
           
            <div class="item">
                <div class="img">
                    <img src="img1.png">
                </div>
                <div class="content">
                    <div class="category">Test</div>
                    <div class="title">Test </div>
                    <div class="price">
                        <span class="old">100</span>
                        <span class="new">10000000$</span>
                    </div>
                    <button class="addCard">Add to card</button>
                </div>
            </div>

            <div class="item">
                <div class="img">
                    <img src="img1.png">
                </div>
                <div class="content">
                    <div class="category">Test</div>
                    <div class="title">Test </div>
                    <div class="price">
                        <span class="old">100</span>
                        <span class="new">10000000$</span>
                    </div>
                    <button class="addCard">Add to card</button>
                </div>
            </div>

            <div class="item">
                <div class="img">
                    <img src="img1.png">
                </div>
                <div class="content">
                    <div class="category">Test</div>
                    <div class="title">Test </div>
                    <div class="price">
                        <span class="old">100</span>
                        <span class="new">10000000$</span>
                    </div>
                    <button class="addCard">Add to card</button>
                </div>
            </div>

            <div class="item">
                <div class="img">
                    <img src="img1.png">
                </div>
                <div class="content">
                    <div class="category">Test</div>
                    <div class="title">Test </div>
                    <div class="price">
                        <span class="old">100</span>
                        <span class="new">10000000$</span>
                    </div>
                    <button class="addCard">Add to card</button>
                </div>
            </div>
        </div> -->
        
         <div class="list">
          
          </div>
          
    </div>
    

    <div class="card">
        <h1>Giỏ hàng</h1>
        <ul class="listCard">
        </ul>
        <div class="checkOut">
            <div class="total">0</div>
            <div class="closeShopping">Close</div>
        </div>
    </div>
      <div class="container">
         <div class="row">
            <div class="col-12 d-none d-md-block col-md-2 d-none d-md-block">
              <?php require_once 'views/frontend/mod-menu-listcategory.php'; ?>
            </div>
            <div class="col-12 col-md-9">
            <?php require_once 'views/frontend/mod-mainmenu.php'; ?>
            </div>
         </div>
      </div>
   </section>