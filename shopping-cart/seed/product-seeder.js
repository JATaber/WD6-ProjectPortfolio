var Product = require('../models/product');

var mongoose = require('mongoose');

mongoose.connect('mongodb://localhost:27017/shopping');

var products = [
  new Product({
    imagePath: 'https://c1.staticflickr.com/7/6051/6331104262_72d02f63ac_b.jpg',
    title: 'NCAA Football 12',
    description: 'Apart of the greatest football game franchises ever!!!!',
    price: 20
  }),
  new Product({
    imagePath: 'https://pm1.narvii.com/6255/0b64de2564c06f6502829862e007f2625aad6391_hq.jpg',
    title: 'Last Of Us',
    description: 'Great post-apocalyptic game!!!!',
    price: 25
  }),
  new Product({
    imagePath: 'https://cdn.pastemagazine.com/www/system/images/photo_albums/best-game-covers-2016/large/superhot-cover.jpg?1384968217',
    title: 'SUPERHOT',
    description: 'Great game!!!!',
    price: 15
  }),
  new Product({
    imagePath: 'http://oi41.tinypic.com/mvp3d1.jpg',
    title: 'Just Cause 2',
    description: 'Can give Grand Theft Auto a run for its money with all the destruction!!',
    price: 10
  }),
  new Product({
    imagePath: 'https://vignette.wikia.nocookie.net/finalfantasy/images/9/97/Ff_x_greatest_hits_ps2_cover_front.jpg/revision/latest?cb=20091106150915',
    title: 'Final Fantasy X',
    description: 'One of the greatest RPGS EVER!!!',
    price: 27
  }),
  new Product({
    imagePath: 'http://www.gamerassaultweekly.com/wp-content/uploads/2014/05/Shaq_Fu_SNES_NA.jpg',
    title: 'Shaq Fu',
    description: 'Clut Classic!!!!',
    price: 20
  })
];

var done = 0;
for(var i = 0; i < products.length; i++){
  products[i].save(function(err, result) {
    done++;
    if (done === products.length){
      exit();
    }
  });
}

function exit(){
  mongoose.disconnect();
}
