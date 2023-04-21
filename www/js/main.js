function addToCart(itemId) {
  console.log("js - addToCart");
  $.ajax({
    type: "POST",
    url: "/cart/addtocart/" + itemId + "/",
    dataType: "json",
    success: function (data) {
      if (data["success"]) {
        $("#cartCntItems").html(data["cntItems"]);

        $("#addCart_" + itemId).hide();
        $("#removeCart_" + itemId).show();
      }
    },
    error: function (request, status, error) {
      console.log(request.responseText);
    }
  });
}
function removeFromCart(itemId) {
  console.log("js - addToCart " + itemId);
  $.ajax({
    type: "POST",
    url: "/cart/removefromcart/" + itemId + "/",
    dataType: "json",
    success: function (data) {
      if (data["success"]) {
        $("#cartCntItems").html(data["cntItems"]);

        $("#addCart_" + itemId).show();
        $("#removeCart_" + itemId).hide();
      }
    },
    error: function (request, status, error) {
      console.log(request.responseText);
    }
  });
}

function getData(form) {
  var hData = {};

  form.forEach((item) => {
  if(item.name) {
    hData[item.name] = item.value;
  }
  })
 
  return hData;
}

function registerNewUser() {
  const box = document.querySelector(".registerBoxHidden")
  const formData = box.querySelectorAll("input");
  const postData = getData(formData)

  $.ajax({
    url: "/user/register/",
    dataType: "json",
    data: postData,
    async: true,
    type: "POST",
    success: function (data, err) {
      if (data["success" {
  
        $(".registerBox").hide();
        $("#userLink").attr("href", "/user/");
        $("#userLink").html(data["userName"]);
        $("#userBox").show();
        $("#loginBox").hide();
        $("#btnSaveOrder").show();
      } else {
        console.log(data["message"]);
      }
    }
  });
}
