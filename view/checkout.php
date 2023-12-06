   <!-- Page Banner Section Start -->
   <div class="section page-banner-section" style="background-image: url(view/assets/images/page-banner.jpg)">
       <div class="container">
           <!-- Page Banner Content End -->
           <div class="page-banner-content">
               <h2 class="title">Checkout</h2>

               <ul class="breadcrumb">
                   <li><a href="index.html">Home</a></li>
                   <li class="active">Checkout</li>
               </ul>
           </div>
           <!-- Page Banner Content End -->
       </div>
   </div>
   <!-- Page Banner Section End -->

   <!-- Checkout Section Start -->
   <div class="section section-padding">
       <div class="container">
           <form action="" method="post">
            
               <div class="row">
                   <div class="col-lg-7">
                       <!-- Checkout Form Start -->
                       <div class="checkout-form">
                           <div class="checkout-title">
                               <h4 class="title">Billing details</h4>
                           </div>

                           <div class="row">
                               <div class="col-sm-6">
                                   <div class="single-form">
                                       <input type="text" placeholder="Last name *" name="txthoten">
                                   </div>
                               </div>
                               <div class="col-sm-12">
                                   <div class="single-form">
                                       <label class="form-label">Street address *</label>
                                       <input type="text" placeholder="House number and street name" name="txtaddress">
                                   </div>
                               </div>
                               <div class="col-sm-6">
                                   <div class="single-form">
                                       <input type="text" placeholder="Phone *" name="txttel">
                                   </div>
                               </div>
                               <div class="col-sm-6">
                                   <div class="single-form">
                                       <input type="text" placeholder="Email address *" name="txtemail">
                                   </div>
                               </div>
                           </div>

                           <div class="single-form checkout-note">
                               <label class="form-label">Payment methods</label>
                               <p><input type="radio" name="pttt" id="" value="2"> Chuyển khoản ngân hàng</p>
                           </div>
                           <div class="single-form checkout-note">
                               <label class="form-label">Order notes</label>
                               <textarea placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                           </div>
                       </div>
                       <!-- Checkout Form End -->
                   </div>
                   <div class="col-lg-5">
                       <div class="checkout-order">
                           <div class="checkout-title">
                               <h4 class="title">Your Order</h4>
                           </div>
                          
                           <div class="checkout-order-table table-responsive">
                               <table class="table">
                                   <thead>
                                       <tr>
                                           <th class="Product-name">
                                               Product
                                           </th>
                                           <th class="Product-price">
                                               Total
                                           </th>
                                       </tr>
                                   </thead>
                                   <?php
                                    // print_r($cart);
                                    foreach ($cart as $item) {
                                    ?>
                                       <tbody>
                                           <tr>
                                               <td class="Product-name">
                                                   <p>
                                                       <?php echo $item['name']; ?>
                                                   </p>
                                                   <small>SL: <?php echo $item['quantity']; ?></small>
                                               </td>
                                               <td class="Product-price">
                                                   <p><?php echo number_format($item['quantity'] * $item['price'], 0, ",", "."); ?>$</p>
                                               </td>
                                           </tr>
                                       </tbody>
                                   <?php
                                    }
                                    ?>
                                   <tfoot>
                                       <tr>
                                           <td class="Product-name">
                                               <p>Total</p>
                                           </td>
                                           <td class="total-price">
                                               <p><?php echo number_format($_SESSION['resultTotal'], 0, ",", "."); ?></p>
                                           </td>
                                       </tr>
                                   </tfoot>
                                   
                               </table>
                           </div>
                           <div class="single-form">
                               <input type="submit" value="Xác nhận đặt hàng" name="order_confirm">
                           </div>
                       </div>
                   </div>
               </div>
           </form>
           </form>
           <div class="single-form checkout-note">
               <form action="?act=ttonline" method="post">
                   <label class="form-label">Payment methods</label>
                   <p><input type="submit" name="payUrl" id="" value="Thanh toán Momo"></p>
                   <p><input type="submit" name="vnpay" id="" value="Thanh toán VNpay"></p>
                   <p><input type="submit" name="cod" id="" value="Thanh toán khi nhận"></p>
               </form>
               <!-- NGUYEN VAN A 
                                 9704 0000 0000 0018
                                 03/07
                                 OTP 
                                    -->
           </div>
       </div>
   </div>
   <!-- Checkout Section End -->