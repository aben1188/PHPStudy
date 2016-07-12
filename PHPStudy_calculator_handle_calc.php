<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Product Cost Calculator </title>
        <style type="text/css" media="screen">
            .number {
                font-weight: bold;
                color: red;
            }
        </style>
    </head>

    <body
        <?php
            /**
             * Created by PhpStorm.
             * User: linyp
             * Date: 2016/06/17
             * Time: 15:09
             */

            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $discount = $_POST['discount'];
            $tax = $_POST['tax'];
            $shipping = $_POST['shipping'];
            $payment = $_POST['payment'];

            $total = $price * $quantity + $shipping - $discount;

            $taxrate = $tax / 100 + 1;

            $total *= $taxrate;

            $monthly = $total / $payment;

            $total = number_format($total, 2);
            $monthly = number_format($total / $payment, 2);

            print "<p>You hav selected to purchase:<br/>
                <span class='number'>$quantity </span> widget(s) at <br/>
                $<span class='number'>$price</span>
                price each plus a <br/>
                $<span class='number'>$shipping </span> shipping cost and a <br/>
                <span class='number'>$tax</span> percent tax rate.<br/>
                After your $<span class='number'>$discount</span> discount, the total
                cost is $<span class='number'>$total</span>.<br/>
                Divided over <span class='number'> $payment</span> monthly payments,
                that would be $<span class='number'>$monthly</span> each.</p>";
        ?>
    </body>
</html>