<?php
$session_id=  session_id();

$cart_product=$obj_cart->selecet_cart_product_by_session_id($session_id);
?>

<div class="wrap">
    <h3 class="tt_uppercase m_bottom_30 m_top_30">Wishlist</h3>
    <div class="m_bottom_30" id="cart">
        <table border="1" cellpadding="10" width="100%" style="border: solid 1px #000; text-align: center; padding: 10px;">
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Sub-total</th>
            </tr>
            <tbody>
                <?php while ($cart_product_info=  mysqli_fetch_assoc($cart_product)){?>
                <tr style="border: 1px solid #000;">
                    <td>
                        <img src="assets/<?php echo $cart_product_info['product_image']; ?>" width="120" height="100" alt="">
                    </td>
                    <td><?php echo $cart_product_info['product_name']; ?></td>
                    <td>BDT <?php echo $cart_product_info['product_price']; ?></td>
                    <td>
                        <input type="number" value="<?php echo $cart_product_info['product_sales_quantity']; ?>">
                    </td>
                    <td>BDT <?php echo $sub_total= $cart_product_info['product_price']*$cart_product_info['product_sales_quantity'];?></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>