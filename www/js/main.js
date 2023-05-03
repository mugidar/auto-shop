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
    if (item.name) {
      hData[item.name] = item.value;
    }
  });

  return hData;
}

function registerNewUser() {
  const box = document.querySelector(".registerBoxHidden");
  const formData = box.querySelectorAll("input");
  const postData = getData(formData);

  $.ajax({
    url: "/user/register/",
    dataType: "json",
    data: postData,
    async: true,
    type: "POST",
    success: function (data, err) {
      if (data["success"]) {
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

function login() {
  let email = $("#loginEmail").val();
  let pwd = $("#loginPwd").val();

  let postData = `email=${email}&pwd=${pwd}`;

  $.ajax({
    type: "POST",
    async: true,
    url: "/user/login/",
    data: postData,
    dataType: "json",
    success: function (data, err) {
      if (data["success"]) {
        $(".registerBox").hide();
        $("#loginBox").hide();

        $("#userLink").attr("href", "/user/");
        $("#userLink").html(data["displayName"]);
        $("#userBox").show();
      } else {
        console.log(data["message"]);
      }
    }
  });
}

function showRegisterBox() {
  if ($(".registerBoxHidden").css("display") != "block") {
    $(".registerBoxHidden").show();
  } else {
    $(".registerBoxHidden").hide();
  }
}

function updateUserData() {
  let phone = $("#newPhone").val();
  let address = $("#newAddress").val();
  let pwd1 = $("#newPwd1").val();
  let pwd2 = $("#newPwd2").val();
  let curPwd = $("#curPwd").val();
  let name = $("#newName").val();

  let postData = {
    name: name,
    phone: phone,
    address: address,
    pwd1: pwd1,
    pwd2: pwd2,
    curPwd: curPwd
  };
  

  $.ajax({
    type: "POST",
    async: true,
    url: "/user/update/",
    data: postData,
    dataType: "json",
    success: function (data) {
      console.log(data)
      if (data["success"]) {
        $("#userLink").html(data["userName"]);
        console.log(data["message"]);
        console.log(data);
      } else {
        console.log(data["message"]);
      }
    },
    error: function (request, status, error) {
      console.log(request.responseText);
    }
  });
}
