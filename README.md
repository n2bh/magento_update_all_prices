magento_update_all_prices
=========================

Fast and easy, update all you're product prices in Magento 1.7.X

Okie dokie….

Enlighten me if I’m wrong… but I was unable to find a feature in the admin section of Magento to update all my prices by a certain value.

In my case, I need to update certain products by 5 (numerical, not percentage). For the life of me, I was unable to find this feature… so I took to code 

You can use the following code if you need to increase the products by percentage (i.e. 10%), just change:

+ 5 to * 1.10

Upload your PHP script to the directory of your Magento shop and call it in the browser like so (for example): www.YOUR_URL.com/php_price_updater.php


(credit goes to: Steven http://mutinyworks.com/blog/2012/08/22/updating-product-prices-by-value-or-percentage-magento-1-7/ )
