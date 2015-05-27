# fix-acq
extending oxArticle's active check query with check for parent article if variant given

## bug 6150:
https://bugs.oxid-esales.com/view.php?id=6150

### how to reproduce:
* buy the following articles in demoshop:
    - KUYICHI 1/2 SLEEVE SHIRT (it has no "customers also bought" articles yet)
    - coule of KUYICHI JEANS ANNA's variants, eg. 30|blue, 31|blue
* finish the order
* go to KUYICHI 1/2 SLEEVE SHIRT page and you will see jeans anna variants you have ordered in the "customers also bought" list
* deactivate KUYICHI JEANS ANNA parent article
* reload KUYICHI 1/2 SLEEVE SHIRT page, jeans variants are still there.
* click "to cart" inside the "also bought" list -> variant will be added to your basket
* Try to open their product pages -> redirect to start
* process the checkout
* you just have bought an article you should not be able to buy :)

## installation
    $ cd modules
    $ git clone https://github.com/vanilla-thunder/fix-acq.git
