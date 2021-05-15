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
  var image = $("#img-1").html();
  var name = $("#product_name").html();
  var price = $("#price").html();

  var rating = $("#rating").html();
  var basket_status = 1;
      console.log("image"+image)
      console.log("name"+name)
      console.log("price"+price)

      console.log("Eklendi"+basket_status)


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