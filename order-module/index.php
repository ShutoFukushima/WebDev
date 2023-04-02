<div id="content">
<div id="third-submenu">
    <a href="index.php?page=orders">Order List</a>
    <a href="index.php?page=orders&action=create">New Order</a> 

   <h> Search </h><input type="text"/>
</div>
<div id="subcontent">
    <?php
      switch($action){
                case 'create':
                    require_once 'order-module/create-transaction.php';
                break; 
                case 'order':
                    require_once 'order-module/receive-products.php';
                break; 
                case 'profile':
                    require_once 'order-module/view-product.php';
                break;
                case 'types':
                    require_once 'order-module/list-product-types.php';
                break;
                case 'upload':
                    require_once 'order-module/imageupload.php';
                break;
                default:
                    require_once 'order-module/main.php';
                break; 
            }
    ?>
  </div>
      </div>