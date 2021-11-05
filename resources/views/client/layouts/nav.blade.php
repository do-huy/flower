<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-shopping-basket"></i> groco </a>

    <nav class="navbar">
   
        <ul class="ul-nav">
            <li>
                <a href="{{ route('home') }}">trang chủ</a>
            </li>
        </ul>

        <ul class="ul-nav">
            <li>
                <a href="{{ route('product.client') }}">sản phẩm</a>
            </li>
        </ul>
      
        <ul class="ul-nav">
            <li>
                <a href="#">Tin tức</a>
            </li>
        </ul>
        

        <div class="navbar-inner">
            <ul class="nav nav-mega">
                <li class="dropdown">
                    <a href class="dropdown-toggle" data-toggle="dropdown">
                        Danh mục <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu mega-menu">
                    <li>
                        <div class="row-fluid">
                        <ul class="media-list span4">
                            <li class="media">
                            <div class="media-body">
                                <div class="media-heading"><a href="#">Chúc mừng</a></div>
                            </div>
                            </li>
                        </ul>
                        <hr>
                        <ul class="media-list span4">
                            <li class="media">
                            
                            <div class="media-body">
                                <div class="media-heading"><a href="#">Sinh nhật</a></div>
                            </div>
                            </li>
                        </ul>
                    
                        </div>
                        
                       
                    </li>
                    </ul>
                </li>
            </ul>
        </div>

    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
    </div>

    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="Tìm kiếm sản phẩm">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <div class="shopping-cart">
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="../test/image/cart-img-1.png" alt="">
            <div class="content">
                <h3>watermelon</h3>
                <span class="price">$4.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="../test/image/cart-img-2.png" alt="">
            <div class="content">
                <h3>onion</h3>
                <span class="price">$4.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="../test/image/cart-img-3.png" alt="">
            <div class="content">
                <h3>chicken</h3>
                <span class="price">$4.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="total"> total : $19.69/- </div>
        <a href="#" class="btn">checkout</a>
    </div>

    <form action="" class="login-form">
        <h3>login now</h3>
        <input type="email" placeholder="your email" class="box">
        <input type="password" placeholder="your password" class="box">
        <p>forget your password <a href="#">click here</a></p>
        <p>don't have an account <a href="#">create now</a></p>
        <input type="submit" value="login now" class="btn">
    </form>

</header>

<!-- header section ends -->