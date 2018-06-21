var express = require('express');
var router = express.Router();
var Cart = require('../models/cart');
var Order = require('../models/order');
var Wishlist = require('../models/wishlist');
var Product = require('../models/product');

/* GET home page. */
router.get('/', function(req, res, next) {
  var successMsg = req.flash('success')[0];
  Product.find(function(err, docs) {
    var productChunks = [];
    var chunkSize = 3;
    for (var i= 0; i < docs.length; i += chunkSize) {
      productChunks.push(docs.slice(i, i + chunkSize));
    }
    res.render('shop/index', { title: 'Shopping Cart',  products: productChunks, successMsg: successMsg, noMessages: !successMsg});
  });
});

router.get('/shoppingCart/:id', function(req, res, next){
  var productId = req.params.id;
  var cart = new Cart(req.session.cart ? req.session.cart : {});

  Product.findById(productId, function(err, product){
    if(err){
      return res.redirect('/');
    }
    cart.add(product, product.id);
    req.session.cart = cart;
    console.log(req.session.cart);
    res.redirect('/');
  });
});

router.get('/reduce/:id', function(req, res, next){
  var productId = req.params.id;
  var cart = new Cart(req.session.cart ? req.session.cart : {});

  cart.reduceByOne(productId);
  req.session.cart = cart;
  res.redirect('/shopping-cart');
});

router.get('/remove/:id', function(req, res, next){
  var productId = req.params.id;
  var cart = new Cart(req.session.cart ? req.session.cart : {});

  cart.removeItem(productId);
  req.session.cart = cart;
  res.redirect('shopping-cart');
});

router.get('/shopping-cart', function(req, res, next){
  if (!req.session.cart) {
    return res.render('shop/shopping-cart', {products: null});
  }

  var cart = new Cart(req.session.cart);
  res.render('shop/shopping-cart', {products: cart.generateArray(), totalPrice: cart.totalPrice});
});

router.get('/addWish/:id', isLoggedIn, function(req, res, next){
  var productId = req.params.id;
  var wishlist = new Wishlist(req.session.wishlist ? req.session.wishlist : {});
  Product.findById(productId, function(err, product){
    if(err){
      return res.redirect('/');
    }
    wishlist.addWishlistItem(product, product.id);
    req.session.wishlist = wishlist;
    console.log(req.session.wishlist);
    res.redirect('/wishlist');
  })
});

router.get('removeWish/:id', function(req, res, next){
  var productId = req.params.id;
  var wishlist = new Wishlist(req.session.wishlist ? req.session.wishlist : {});

  wishlist.removeWishlistItem(productId);
  req.session.wishlist = wishlist;
  res.redirect('/wishlist');
});

router.get('/wishlist', isLoggedIn, function(req, res, next){
  if(!req.session.wishlist){
    res.render('shop/wishlist', {products:null});
  }
  var wishlist = new Wishlist(req.session.wishlist);
  res.render('shop/wishlist',{products:wishlist.generateWishlistArray()});
});

router.get('/checkout', isLoggedIn, function(req, res, next){
  if (!req.session.cart) {
    return res.redirect('/shopping-cart');
  }
  var cart = new Cart(req.session.cart);
  res.render('shop/checkout', {total: cart.totalPrice})
});

router.post('/checkout', isLoggedIn, function(req, res, next){
  if (!req.session.cart) {
    return res.redirect('/shopping-cart');
  }
  var cart = new Cart(req.session.cart);

  var stripe = require("stripe")(
    "sk_test_axD83ZR5du5roAeSVuhtIVqx"
  );

  stripe.charges.create({
    amount: cart.totalPrice * 100,
    currency: "usd",
    source: req.body.stripeToken, // obtained with Stripe.js
    description: "Charge for WD6i"
  }, function(err, charge) {
    if (err) {
      req.flash('error', err.message);
      return res.redirect('/checkout');
    }
    var order = new Order({
      user: req.user,
      cart: cart,
      paymentId: charge.id
    });
    order.save(function(err, result){
      req.flash('success', 'Checkout Successful!!!');
      req.session.cart = null;
      res.redirect('/');
    });
  });
});

module.exports = router;

function isLoggedIn(req, res, next){
  if(req.isAuthenticated()){
    return next();
  }
  req.session.oldUrl = req.url;
  res.redirect('/user/signin');
}