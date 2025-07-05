<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>SkinLab - Skin Care For All</title>
      <!------------Favicon--------- -->
      <link rel="shortcut icon" href="./Favicon.png" type="image/png+xml">
      <!------------Custom CSS Links--------->
      <link rel="stylesheet" href="./assets/css/style.css">
      <link rel="preconnect" href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>
<body class="showCart">

      <!-- ---------------HEADER-------------- -->
      <header class="header" data-header>
            <div class="container">

                  <div class="overlay" data-overlay></div>
                  <div class="header-search">
                        <input type="search" name="search" placeholder="Search Product..." class="input-field">

                        <button class="search-btn" aria-label="Search">
                              <ion-icon name="search-outline"></ion-icon>
                        </button>
                  </div>

                  <a href="#" class="logo">
                      <img src="./assets/images/Logo.png" alt="SkinLab logo" width="136" height="33">  
                  </a>

                  <div class="header-actions">
                        <button class="header-action-btn">
                              <ion-icon name="person-outline" aria-hidden="true"></ion-icon>


                              <a href="login1.php"><p class="header-action-label">Sign in</p></a>
                        </button>

                        <button class="header-action-btn">
                              <ion-icon name="search-outline" aria-hidden="true"></ion-icon>


                              <p class="header-action-label">Search</p>
                        </button>

                        <button class="header-action-btn">
                              <div class="icon-cart">
                                    <ion-icon name="cart-outline" aria-hidden="true"></ion-icon>         
                                    <p class="header-action-label">Cart</p>   
                                    <span>0</span>
                              </div> 
                        </button>

                        <button class="header-action-btn">
                              <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                              <p class="header-action-label">Wishlist</p>
                              <div class="btn-badge" aria-hidden="true">2</div>
                        </button>
                  </div>
                  
                  <button class="nav-open-btn" data-nav-open-btn aria-label="Open Menu">
                        <span></span>
                        <span></span>
                        <span></span>
                  </button>

                  <nav class="navbar" data-navbar>

                        <div class="navbar-top">
                              <a href="#" class="logo">
                                    <img src="./assets/images/Logo.png" alt="SkinLab logo" width="132" height="34">
                              </a>

                              <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
                                    <ion-icon name="close-outline"></ion-icon>
                              </button>

                        </div>

                        <ul class="navbar-list">
                              <li><a href="#home" class="navbar-link">Home</a></li>
                              <li><a href="#Products" class="navbar-link">Shop All</a></li>
                              <li><a href="#Category" class="navbar-link">Skin Care</a></li>
                              <li><a href="#Category" class="navbar-link">Hair Care</a></li>
                              <li><a href="#Category" class="navbar-link">Glam Up</a></li>
                             <a href="s1.php"><button class="btn btn-primary">Know Your Skin</button></a>
                  
                        </ul>

                  </nav>
            

            </div>
      </header>

      
      <!-----------------------MAIN SECTIONS-------------------->
      <main>
            <article>
                  <!-- --------#HERO--------------->

                  <section class="hero" id="home" style="background-image: url('./assets/images/Hero-banner.png');">

                        <div class="container">

                              <div class="hero-content">

                                    <p class="hero-subtitle">SkinCare for All!</p>

                                    <h2 class="h1 hero-title">Customizable Beauty Products</h2>
                                    <p>Celebrate Your Uniqueness With SkinLab's Customized Beauty Solutions</p>

                                    <button class="btn btn-primary">Explore Now!</button>
                              </div>
                        </div>
                  </section>


                  <!--------------#SERIVCE------------ -->

                  <section class="service">
                        <div class="container">
                
                          <ul class="service-list">
                
                            <li class="service-item">
                              <div class="service-item-icon">
                                <img src="./assets/images/service-icon-1.svg" alt="Service icon">
                              </div>
                
                              <div class="service-content">
                                <p class="service-item-title">Free Shipping</p>
                
                                <p class="service-item-text">On All Order Over  &#8377;599</p>
                              </div>
                            </li>
                
                            <li class="service-item">
                              <div class="service-item-icon">
                                <img src="./assets/images/service-icon-2.svg" alt="Service icon">
                              </div>
                
                              <div class="service-content">
                                <p class="service-item-title">Easy Returns</p>
                
                                <p class="service-item-text">30 Day Returns Policy</p>
                              </div>
                            </li>
                
                            <li class="service-item">
                              <div class="service-item-icon">
                                <img src="./assets/images/service-icon-3.svg" alt="Service icon">
                              </div>
                
                              <div class="service-content">
                                <p class="service-item-title">Secure Payment</p>
                
                                <p class="service-item-text">100% Secure Gaurantee</p>
                              </div>
                            </li>
                
                            <li class="service-item">
                              <div class="service-item-icon">
                                <img src="./assets/images/service-icon-4.svg" alt="Service icon">
                              </div>
                
                              <div class="service-content">
                                <p class="service-item-title">Special Support</p>
                
                                <p class="service-item-text">24/7 Dedicated Support</p>
                              </div>
                            </li>
                
                          </ul>
                
                        </div>
                      </section>
                
            
                  <!---------------#CATEGORY--------------->


                  <section class="section category" id="Category">
                        <div class="container">
                              <h1 class="category-title">Shop By Category</h1>

                                    <p class="category-content">Skin Care for All</p>

                              <ul class="category-list">

                                    <li class="category-item">
                                          <figure class="category-banner">
                                                <img src="./assets/images/category-1.jpg" alt="cream"  loading="lazy" width="510" height="600" class="w-100">
                                          </figure>

                                          <a href="#" class="btn btn-secondary">Hair Care</a>
                                    </li>

                                    <li class="category-item">
                                          <figure class="category-banner">
                                                <img src="./assets/images/category-2.jpg" alt="cream2"  loading="lazy" width="510" height="600" class="w-100">
                                          </figure>

                                          <a href="#" class="btn btn-secondary">Body Care</a>
                                    </li>

                                    <li class="category-item">
                                          <figure class="category-banner">
                                                <img src="./assets/images/category-3.jpg" alt="cream3"  loading="lazy" width="510" height="600" class="w-100">
                                          </figure>

                                          <a href="#" class="btn btn-secondary">Skin Care</a>
                                    </li>

                                    <li class="category-item">
                                          <figure class="category-banner">
                                                <img src="./assets/images/category-4.jpg" alt="cream4"  loading="lazy" width="510" height="600" class="w-100">
                                          </figure>

                                          <a href="#" class="btn btn-secondary">Night Creams</a>
                                    </li>

                                    <li class="category-item">
                                          <figure class="category-banner">
                                                <img src="./assets/images/category-5.jpg" alt="cream5"  loading="lazy" width="510" height="600" class="w-100">
                                          </figure>

                                          <a href="#" class="btn btn-secondary">Baby Care</a>
                                    </li>

                                    <li class="category-item">
                                          <figure class="category-banner">
                                                <img src="./assets/images/category-6.jpg" alt="cream"  loading="lazy" width="510" height="600" class="w-100">
                                          </figure>

                                          <a href="#" class="btn btn-secondary">Makeup</a>
                                    </li>

                                    
                              </ul>
                        </div>
                  </section>

                  <!----------------#CARTS------------------------->

                  <section class="showCart">
                        <div class="container">
                              <div class="title">PRODUCT LIST</div>
                              <div class="listProduct">
                                    <div class="item">
                                        <img src="p1.png" alt="" loading="lazy">
                                        <h2>NAME PRODUCT</h2>
                                        <div class="price"> &#8377;200</div>
                                        <button class="addCart">
                                            Add To Cart
                                        </button>
                                        <i class="ri-heart-add-2-line"></i>
                                    </div>
                              </div>
                        </div>



            <!---------------------------------SHOPPING CART-----------------------------  -->
                        <div class="cartTab">
                              <h1>Shopping Cart</h1>
                              <div class="listCart">
                                  
                              </div>
                              <div class="btn" style="background-color: #fff;">
                                  <button class="close" style="color: #000; text-align: center;">CLOSE</button>
                                  <button class="checkOut" style="color: #000; text-align: center;"><a href="checkout.php">Check Out</a></button>
                              </div>
                          </div>
                  </section>

                  <!----------------#PRODUCTS---------------------------->

                  <section class="section product" id="Products">
                        <div class="container">
                               
                              <h2 class="h2 section-title">
                                    Products of the Week
                              </h2>

                              <ul class="filter-list">
                                    <li>
                                          <button class="filter-btn active">Best Seller</button>
                                    </li>

                                    <li>
                                          <button class="filter-btn">New</button>
                                    </li>

                                    <li>
                                          <button class="filter-btn">Natural</button>
                                    </li>

                                    <li>
                                          <button class="filter-btn">No Parabins</button>
                                    </li>

                                   
                              </ul>

                              <ul class="product-list">

                                    <li>
                                          <div class="product-card">

                                                <figure class="card-banner">
                                                       
                                                      <a href="#">
                                                            <img src="./assets/images/po1.png" alt="product-1" class="w-100" loading="lazy" width="800" height="1034">
                                                      </a>

                                                      <div class="card-badge green"> -25%</div>

                                                      <div class="card-actions">
                                                            
                                                            <button class="card-action-btn" aria-label="Quick view">
                                                                  <ion-icon name="eye-outline"></ion-icon>
                                                            </button>

                                                            <button class="card-action-btn cart-btn">
                                                                  <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                                                                  <p>Add to Cart</p>
                                                            </button>

                                                            <button class="card-action-btn" aria-label="Add to wishlist">
                                                                  <ion-icon name="heart-outline"></ion-icon>
                                                            </button>
                                                      </div>
                                                </figure>

                                                <div class="card-content">
                                                      <h3 class="h4 card-title">
                                                            <a href="#">SkinLab's Primar</a>
                                                      </h3>

                                                      <div class="card-price">
                                                            <data value="230"> &#8377;230</data>

                                                            <data value="199"> &#8377;199</data>
                                                      </div>
                                                </div>

                                          </div>
                                    </li>

                                    <li>
                                          <div class="product-card">
                            
                                            <figure class="card-banner">
                            
                                              <a href="#">
                                                <img src="./assets/images/po2.png" alt="Fit Twill Shirt for Woman" loading="lazy" width="800"
                                                  height="1034" class="w-100">
                                              </a>
                            
                                              <div class="card-badge green"> New</div>
                            
                                              <div class="card-actions">
                            
                                                <button class="card-action-btn" aria-label="Quick view">
                                                  <ion-icon name="eye-outline"></ion-icon>
                                                </button>
                            
                                                <button class="card-action-btn cart-btn">
                                                  <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                            
                                                  <p>Add to Cart</p>
                                                </button>
                            
                                                <button class="card-action-btn" aria-label="Add to Whishlist">
                                                  <ion-icon name="heart-outline"></ion-icon>
                                                </button>
                            
                                              </div>
                            
                                            </figure>
                            
                                            <div class="card-content">
                                              <h3 class="h4 card-title">
                                                <a href="#">SkinLab's Serum</a>
                                              </h3>
                            
                                              <div class="card-price">
                                                <data value="167"> &#8377;167</data>
                                              </div>
                                            </div>
                            
                                          </div>
                                    </li>
                            
                                    <li>
                                    <div class="product-card">
                        
                                          <figure class="card-banner">
                        
                                                <a href="#">
                                                <img src="./assets/images/po3.png" alt="Grand Atlantic Chukka Boots" loading="lazy"
                                                      width="800" height="1034" class="w-100">
                                                </a>
                              
                                                <div class="card-actions">
                              
                                                <button class="card-action-btn" aria-label="Quick view">
                                                      <ion-icon name="eye-outline"></ion-icon>
                                                </button>
                              
                                                <button class="card-action-btn cart-btn">
                                                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                              
                                                      <p>Add to Cart</p>
                                                </button>
                              
                                                <button class="card-action-btn" aria-label="Add to Whishlist">
                                                      <ion-icon name="heart-outline"></ion-icon>
                                                </button>
                              
                                                </div>
                              
                                          </figure>
                        
                                          <div class="card-content">
                                          <h3 class="h4 card-title">
                                          <a href="#">Oil Control Serum</a>
                                          </h3>
                        
                                          <div class="card-price">
                                          <data value="250"> &#8377;250</data>
                                          </div>
                                          </div>
                        
                                    </div>
                                    </li>
                            
                                    <li>
                                    <div class="product-card">
                        
                                          <figure class="card-banner">
                        
                                          <a href="#">
                                          <img src="./assets/images/po4.png" alt="Women's Faux-Trim Shirt" loading="lazy" width="800"
                                                height="1034" class="w-100">
                                          </a>
                        
                                          <div class="card-actions">
                        
                                          <button class="card-action-btn" aria-label="Quick view">
                                                <ion-icon name="eye-outline"></ion-icon>
                                          </button>
                        
                                          <button class="card-action-btn cart-btn">
                                                <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                        
                                                <p>Add to Cart</p>
                                          </button>
                        
                                          <button class="card-action-btn" aria-label="Add to Whishlist">
                                                <ion-icon name="heart-outline"></ion-icon>
                                          </button>
                        
                                          </div>
                        
                                          </figure>
                        
                                          <div class="card-content">
                                          <h3 class="h4 card-title">
                                          <a href="#">Face Massage Oil</a>
                                          </h3>
                        
                                          <div class="card-price">
                                          <data value="184"> &#8377;184</data>
                                          </div>
                                          </div>
                        
                                    </div>
                                    </li>
                            
                                    <li>
                                    <div class="product-card">
                        
                                          <figure class="card-banner">
                        
                                          <a href="#">
                                          <img src="./assets/images/po5.png" alt="Soft Touch Interlock Polo" loading="lazy" width="800"
                                                height="1034" class="w-100">
                                          </a>
                        
                                          <div class="card-actions">
                        
                                          <button class="card-action-btn" aria-label="Quick view">
                                                <ion-icon name="eye-outline"></ion-icon>
                                          </button>
                        
                                          <button class="card-action-btn cart-btn">
                                                <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                        
                                                <p>Add to Cart</p>
                                          </button>
                        
                                          <button class="card-action-btn" aria-label="Add to Whishlist">
                                                <ion-icon name="heart-outline"></ion-icon>
                                          </button>
                        
                                          </div>
                        
                                          </figure>
                        
                                          <div class="card-content">
                                          <h3 class="h4 card-title">
                                          <a href="#">Hair Growth Tablets</a>
                                          </h3>
                        
                                          <div class="card-price">
                                          <data value="245"> &#8377;245</data>
                                          </div>
                                          </div>
                        
                                    </div>
                                    </li>
                        
                                    <li>
                                    <div class="product-card">
                        
                                          <figure class="card-banner">
                        
                                          <a href="#">
                                          <img src="./assets/images/po6.png" alt="Casmart Smart Watch" loading="lazy" width="800"
                                                height="1034" class="w-100">
                                          </a>
                        
                                          <div class="card-actions">
                        
                                          <button class="card-action-btn" aria-label="Quick view">
                                                <ion-icon name="eye-outline"></ion-icon>
                                          </button>
                        
                                          <button class="card-action-btn cart-btn">
                                                <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                        
                                                <p>Add to Cart</p>
                                          </button>
                        
                                          <button class="card-action-btn" aria-label="Add to Whishlist">
                                                <ion-icon name="heart-outline"></ion-icon>
                                          </button>
                        
                                          </div>
                        
                                          </figure>
                        
                                          <div class="card-content">
                                          <h3 class="h4 card-title">
                                          <a href="#">Natural Onion Shampoo</a>
                                          </h3>
                        
                                          <div class="card-price">
                                          <data value="380"> &#8377;380</data>
                        
                                          <data value="330"> &#8377;330</data>
                                          </div>
                                          </div>
                        
                                    </div>
                                    </li>
                            
                                    <li>
                                    <div class="product-card">
                        
                                          <figure class="card-banner">
                        
                                          <a href="#">
                                          <img src="./assets/images/po7.png" alt="Casmart Smart Glass" loading="lazy" width="800"
                                                height="1034" class="w-100">
                                          </a>
                        
                                          <div class="card-actions">
                        
                                          <button class="card-action-btn" aria-label="Quick view">
                                                <ion-icon name="eye-outline"></ion-icon>
                                          </button>
                        
                                          <button class="card-action-btn cart-btn">
                                                <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                        
                                                <p>Add to Cart</p>
                                          </button>
                        
                                          <button class="card-action-btn" aria-label="Add to Whishlist">
                                                <ion-icon name="heart-outline"></ion-icon>
                                          </button>
                        
                                          </div>
                        
                                          </figure>
                        
                                          <div class="card-content">
                                          <h3 class="h4 card-title">
                                          <a href="#">SPF PA+++ Sunscreen</a>
                                          </h3>
                        
                                          <div class="card-price">
                                          <data value="255"> &#8377;255</data>
                        
                                          <data value="239"> &#8377;239</data>
                                          </div>
                                          </div>
                        
                                    </div>
                                    </li>
                            
                                    <li>
                                    <div class="product-card">
                        
                                          <figure class="card-banner">
                        
                                          <a href="#">
                                          <img src="./assets/images/po8.png" alt="Cotton Shirt for Men" loading="lazy" width="800"
                                                height="1034" class="w-100">
                                          </a>
                        
                                          <div class="card-actions">
                        
                                          <button class="card-action-btn" aria-label="Quick view">
                                                <ion-icon name="eye-outline"></ion-icon>
                                          </button>
                        
                                          <button class="card-action-btn cart-btn">
                                                <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                        
                                                <p>Add to Cart</p>
                                          </button>
                        
                                          <button class="card-action-btn" aria-label="Add to Whishlist">
                                                <ion-icon name="heart-outline"></ion-icon>
                                          </button>
                        
                                          </div>
                        
                                          </figure>
                        
                                          <div class="card-content">
                                          <h3 class="h4 card-title">
                                          <a href="#">Baby Lotion</a>
                                          </h3>
                        
                                          <div class="card-price">
                                          <data value="385"> &#8377;385</data>
                        
                                          <data value="359"> &#8377;359</data>
                                          </div>
                                          </div>
                        
                                    </div>
                                    </li>
                  
                                    <li>
                                    <div class="product-card">
                        
                                          <figure class="card-banner">
                        
                                          <a href="#">
                                          <img src="./assets/images/po1.png" alt="Double-breasted Blazer" loading="lazy" width="800"
                                                height="1034" class="w-100">
                                          </a>
                        
                                          <div class="card-actions">
                        
                                          <button class="card-action-btn" aria-label="Quick view">
                                                <ion-icon name="eye-outline"></ion-icon>
                                          </button>
                        
                                          <button class="card-action-btn cart-btn">
                                                <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                        
                                                <p>Add to Cart</p>
                                          </button>
                        
                                          <button class="card-action-btn" aria-label="Add to Whishlist">
                                                <ion-icon name="heart-outline"></ion-icon>
                                          </button>
                        
                                          </div>
                        
                                          </figure>
                        
                                          <div class="card-content">
                                          <h3 class="h4 card-title">
                                          <a href="#">CC Cream</a>
                                          </h3>
                        
                                          <div class="card-price">
                                          <data value="232"> &#8377;232</data>
                                          </div>
                                          </div>
                        
                                    </div>
                                    </li>
                            
                                    <li>
                                    <div class="product-card">
                        
                                          <figure class="card-banner">
                        
                                          <a href="#">
                                          <img src="./assets/images/po2.png" alt="Ribbed Cotton Bodysuits" loading="lazy" width="800"
                                                height="1034" class="w-100">
                                          </a>
                        
                                          <div class="card-badge green">New</div>
                        
                                          <div class="card-actions">
                        
                                          <button class="card-action-btn" aria-label="Quick view">
                                                <ion-icon name="eye-outline"></ion-icon>
                                          </button>
                        
                                          <button class="card-action-btn cart-btn">
                                                <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                        
                                                <p>Add to Cart</p>
                                          </button>
                        
                                          <button class="card-action-btn" aria-label="Add to Whishlist">
                                                <ion-icon name="heart-outline"></ion-icon>
                                          </button>
                        
                                          </div>
                        
                                          </figure>
                        
                                          <div class="card-content">
                                          <h3 class="h4 card-title">
                                          <a href="#">Lip Tint</a>
                                          </h3>
                        
                                          <div class="card-price">
                                          <data value="171"> &#8377;171</data>
                                          </div>
                                          </div>
                        
                                    </div>
                                    </li>

                              </ul>

                              <button class="btn btn-outline">View All Products</button>
                        </div>
                  </section>

                  
                  <!--------------------------#CARE--------------------------------- -->

                  <section class="care">
                        <div class="container">
                              <h4>Your Safty is Our Top Most Priority!</h4>

                              <ul class="care-list">
                                    
                                    <li class="care-item">
                                          <div class="care-item-icon">
                                            <img src="./assets/images/care-icon-1.svg" alt="care icon">
                                          </div>
                                                <div class="care-content">
                                                <p class="care-item-title">No Phthalates</p>
                                                </div>
                                    
                                    </li>

                                    <li class="care-item">
                                          <div class="care-item-icon">
                                            <img src="./assets/images/care-icon-2.svg" alt="care icon">
                                          </div>
                                                <div class="care-content">
                                                <p class="care-item-title">No Parabens</p>
                                                </div>
                                    </li>

                                    <li class="care-item">
                                          <div class="care-item-icon">
                                            <img src="./assets/images/care-icon-3.svg" alt="care icon">
                                          </div>
                                                <div class="care-content">
                                                <p class="care-item-title">No SLS</p>
                                                </div>
                                          
                                    </li>

                                    <li class="care-item">
                                          <div class="care-item-icon">
                                            <img src="./assets/images/care-icon-4.svg" alt="care icon">
                                          </div>
                                                <div class="care-content">
                                                <p class="care-item-title">No Animal Testing</p>
                                                </div>
                                         
                                    </li>
                              </ul>
                        </div>
                  </section>


                  <!--------------------------#NEWSLETTER ------------------------->

                  <section class="section newsletter">
                        <div class="container">
                
                          <div class="newsletter-card" style="background-image: url('./assets/images/newsletter-bg.png')">
                
                            <h2 class="card-title">Subscribe Our Newsletter</h2>
                
                            <p class="card-text">
                              Enter your email below to be the first to know about new skincare techniques and product launches.
                            </p>
                
                            <form action="" class="card-form">
                
                              <div class="input-wrapper">
                                <ion-icon name="mail-outline"></ion-icon>
                
                                <input type="email" name="emal" placeholder="Enter your email" required class="input-field">
                              </div>
                
                              <button type="submit" class="btn btn-primary w-100">
                                <span>Subscribe</span>
                
                                <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                              </button>
                
                            </form>
                
                          </div>
                
                        </div>
                  </section>


                  
                  
            </article>
      </main>


      <!----------------------#FOOTER--------------------- -->
      <footer class="footer">

            <div class="footer-top">
              <div class="container">
        
                <div class="footer-brand">
        
                  <a href="#" class="logo">
                    <img src="./assets/images/Logo.png" alt="SkinLab logo" style="width: 50%;">
                  </a>
        
                  <p class="footer-text">
                    SkinLab is a Ecommerce Website brandthat sells Skincare Products that are Natural and has a lot of customizable Options for Different Skin types
                    & Skin Tones.<br>
                    Celebrate Your Uniqueness With SkinLab's Customized Beauty Solutions!
                  </p>
        
                  <ul class="social-list">
        
                    <li>
                      <a href="#" class="social-link">
                        <ion-icon name="logo-facebook"></ion-icon>
                      </a>
                    </li>
        
                    <li>
                      <a href="#" class="social-link">
                        <ion-icon name="logo-twitter"></ion-icon>
                      </a>
                    </li>
        
                    <li>
                      <a href="#" class="social-link">
                        <ion-icon name="logo-instagram"></ion-icon>
                      </a>
                    </li>
        
                    <li>
                      <a href="#" class="social-link">
                        <ion-icon name="logo-pinterest"></ion-icon>
                      </a>
                    </li>
        
                  </ul>
        
                </div>
        
                <ul class="footer-list">
        
                  <li>
                    <p class="footer-list-title">Information</p>
                  </li>
        
                  <li>
                    <a href="#" class="footer-link">About Company</a>
                  </li>
        
                  <li>
                    <a href="#" class="footer-link">Payment Type</a>
                  </li>
        
                  <li>
                    <a href="#" class="footer-link">Awards Winning</a>
                  </li>
        
                  <li>
                    <a href="#" class="footer-link">World Media Partner</a>
                  </li>
        
                  <li>
                    <a href="#" class="footer-link">Become an Agent</a>
                  </li>
        
                  <li>
                    <a href="#" class="footer-link">Refund Policy</a>
                  </li>
        
                </ul>
        
                <ul class="footer-list">
        
                  <li>
                    <p class="footer-list-title">Category</p>
                  </li>
        
                  <li>
                    <a href="#" class="footer-link">Skin Care</a>
                  </li>
        
                  <li>
                    <a href="#" class="footer-link">Hair Care</a>
                  </li>
        
                  <li>
                    <a href="#" class="footer-link">Body Care</a>
                  </li>
        
                  <li>
                    <a href="#" class="footer-link">Baby Skin Care</a>
                  </li>
        
                  <li>
                    <a href="#" class="footer-link">Night Creams</a>
                  </li>
        
                  <li>
                    <a href="#" class="footer-link">Face Makeup</a>
                  </li>
        
                </ul>
        
                <ul class="footer-list">
        
                  <li>
                    <p class="footer-list-title">Help & Support</p>
                  </li>
        
                  <li>
                    <a href="#" class="footer-link">Dealers & Agents</a>
                  </li>
        
                  <li>
                    <a href="#" class="footer-link">FAQ Information</a>
                  </li>
        
                  <li>
                    <a href="#" class="footer-link">Return Policy</a>
                  </li>
        
                  <li>
                    <a href="#" class="footer-link">Shipping & Delivery</a>
                  </li>
        
                  <li>
                    <a href="#" class="footer-link">Order Tranking</a>
                  </li>
        
                  <li>
                    <a href="#" class="footer-link">List of Shops</a>
                  </li>
        
                </ul>
        
              </div>
            </div>
        
            <div class="footer-bottom">
              <div class="container">
        
                <p class="copyright">
                  &copy; 2024 <a href="#">SkinLab.com</a> All Rights Reserved
                </p>
        
                <ul class="footer-bottom-list">
        
                  <li>
                    <a href="#" class="footer-bottom-link">Privacy Policy</a>
                  </li>
        
                  <li>
                    <a href="#" class="footer-bottom-link">Terms & Conditions</a>
                  </li>
        
                  <li>
                    <a href="#" class="footer-bottom-link">Sitemap</a>
                  </li>
        
                </ul>
        
                <div class="payment">
                  <p class="payment-title">We Support</p>
        
                  <img src="./assets/images/payment-img.png" alt="Online payment logos" class="payment-img">
                </div>
        
              </div>
            </div>
        
      </footer>



      
        
        
        
        
        



      <script src="./assets/js/app.js"></script>
      <!-- ----------------Custom Js Link----------- -->
      <script src="./assets/js/script.js"></script>
      <!-------------------ionicon links----------- -->
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>

