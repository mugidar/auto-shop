document.addEventListener("dblclick", (e) => {
  if (e.target.id === "hint") {
    console.log("double");
    window.open("http://car-shop/admin/", "_blank");
  }
});

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

function validation(email, pwd1, pwd2) {

  let errorMsgs = {}

  if(email.trim() === "") {
    errorMsgs["email"] = "Empty email"
    return errorMsgs
  }
  if(pwd1.trim() === "") {
    errorMsgs["pwd1"]  = "Pwd1 empty"
    return errorMsgs
  }
  if(pwd2.trim() === "") {
    errorMsgs["pwd2"]  = "Pwd2 empty"
    return errorMsgs
  }
  else if(pwd1 !== pwd2) {
    errorMsgs["pwd"]  = "Pwd1 doesn't match pwd2"
    return errorMsgs 
  }
  return true
}

function registerNewUser() {
  const box = document.querySelector(".registerBoxHidden");
  const inputs = box.querySelectorAll("input");
  const formData = box.querySelectorAll("input");
  const postData = getData(formData);


  const { email, pwd1, pwd2 } = postData;
  const isValid =Object.values( validation(email, pwd1, pwd2)) == 0;
  const msgs = validation(email,pwd1,pwd2)
  console.log(inputs)

  if (isValid) {
    $.ajax({
      url: "/user/register/",
      dataType: "json",
      data: postData,
      async: true,
      type: "POST",
      success: function (data, err) {
        if (data["success"]) {
          inputs.forEach((input) => {
            if(input.type != "submit") {
              input.value = ""
            }
          })
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
   
  } else {
  alert(Object.values(msgs))
  }
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
      console.log(data);
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
