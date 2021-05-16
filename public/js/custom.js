function incrementValue(id) {
    var value = document.getElementById(id).value;
    value = isNaN(value) ? 0 : value;
    if (value > 1) {
      value--;
      document.getElementById(id).value = value;
    }
  }
  
  function decrementValue(id) {
    var value = document.getElementById(id).value;
  
    value = isNaN(value) ? 0 : value;
    if (value < 10) {
      value++;
      document.getElementById(id).value = value;
    }
  }


  //image,name,rating,basket_status,price
 function baskedAdded(id) {

  var image = "https://www.civilim.com/productimages/395139/small/8681817570287.jpg";
  var name = $("#product_name").html();
  var price = $("#price").html();
  var rating = 2;
  var basket_status = 1;

      console.log("image"+image)
      console.log("name"+name)
      console.log("price"+price)

      console.log("Eklendi"+basket_status)
      $.ajax({
        method: "POST",
        url: "/api/products",
        data: { image:image,name:name,rating:rating,price:price,basket_status:basket_status },
        error: function (jqXHR, exception) {
          console.log(jqXHR);
          // Your error handling logic here..
          toastr.error("Ürün sepete eklenemedi.");
      }
      }).done(function(res) {
        $.ajax({
          method: "GET",
          url: "/api/products",
        }).done(function(product) {
          let products = Object.values(product);
          console.log("resss",products)
          var basket_size = [];

          products.forEach(item => {
            if(item.basket_status == 1) {
             
              
             
              console.log("item",item)
              $("#all_basket").append(
                '<li><div class="media-left"><div class="cart-img"> <a href="#" id="basket_img"> <img class="media-object img-responsive" src="'
                +item.image+
                '" alt="..."> </a> </div></div><div class="media-body"><h6 class="media-heading">'
                +item.name+
                '</h6><span class="price">'+item.price+'</span></div></li>'
              );
              basket_size.push(item);
              console.log("basket Size",basket_size);
              $("#basket_size").html(basket_size.length);
            }
        
          })
        })
    
       toastr.success("Ürün sepete eklendi.");
       $("#all_basket").empty();
       $("#basket_size").empty();
      });


  }

function subscribe() {
  var fullname = $("#fullname").val();
  var email = $("#email").val();

  console.log("hello"+fullname+email);

  $.ajax({
    method: "POST",
    url: "/api/subscribe",
    data: { fullname:fullname,email:email },
    error: function (jqXHR, exception) {
      console.log(jqXHR);
      // Your error handling logic here..
      toastr.error("Mail adresiniz daha önce kayıt olmuş.");
  }
  }).done(function(res) {
   console.log("resss",res)

   toastr.success("Başarıyla abone oldunuz.");
  });
}