var stripe = Stripe('pk_test_9ZuWhV8GKjQb3p67CKTHDuWz');
var elements = stripe.elements();
var $form = $('#checkout-form');
var style = {
  base: {
    color: '#32325d',
    lineHeight: '18px',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};

var card = elements.create('card', {style: style});
card.mount('#checkout-form');

$form.submit(function(e){
  $form.find('button').prop('disabled', true);

});