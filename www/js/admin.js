function getData(form) {
  let hData = {};

  form.forEach((item) => {
    if (item.name) {
      hData[item.name] = item.value;
    }
  });

  return hData;
}

function newCategory() {
  const box = document.querySelector("#newCategory");
  const catVal = document.querySelector("select");
  const formData = box.querySelectorAll("input");
  const postData = getData(formData);
  postData.generalCatId = catVal.value;
  console.log(postData);

  $.ajax({
    url: "/admin/addnewcat/",
    dataType: "json",
    data: postData,
    async: true,
    type: "POST",
    success: function (data, err) {
      if (data["success"]) {
        alert(data["message"]);
        $("#newCategoryName").val("");
      } else {
        console.log(data["message"]);
      }
    },
    error: function (request, status, error) {
      console.log(request.responseText);
    }
  });
}

function updateCat(itemId) {
  let parentId = $("#parentId_" + itemId).val();

  let newName = $("#itemName_" + itemId).val();
  let postData = { itemId: itemId, parentId: parentId, newName: newName };
  console.log(parentId);
  console.log(newName);
  console.log(postData);

  $.ajax({
    url: "/admin/updatecategory/",
    dataType: "json",
    data: postData,
    async: true,
    type: "POST",
    success: function (data, err) {
      alert(data["message"]);
    },
    error: function (request, status, error) {
      console.log(request.responseText);
    }
  });
}

function addCar() {
  let itemName = $("#newItemName").val();
  let itemPrice = $("#newItemPrice").val();
  let itemCatId = $("#newItemCatId").val();
  let itemDesc = $("#newItemDesc").val();
  let itemImg = $("#newItemImg").val();
  let itemSellerName = $("#newItemSellerName").val();
  let itemSellerTel = $("#newItemSellerTel").val();

  let postData = {
    itemName,
    itemPrice,
    itemCatId,
    itemDesc,
    itemImg,
    itemSellerName,
    itemSellerTel
  };
  console.log(postData);
  $.ajax({
    url: "/admin/addproduct/",
    dataType: "json",
    data: postData,
    async: true,
    type: "POST",
    success: function (data, err) {
      console.log(data);
      if (data["success"]) {
        $("#newItemName").val("");
        $("#newItemPrice").val("");
        $("#newItemCatId").val("");
        $("#newItemDesc").val("");
        $("#newItemImg").val("");
        $("#newItemSellerName").val("");
        $("#newItemSellerTel").val("");
      }
    },
    error: function (request, status, error) {
      console.log(request.responseText);
    }
  });
}

function updateCar(itemId) {
  let itemName = $("#itemName_" + itemId).val();
  let itemPrice = $("#itemPrice_" + itemId).val();
  let itemCatId = $("#itemCatId_" + itemId).val();
  let itemDesc = $("#itemDesc_" + itemId).val();
  let itemSellerName = $("#updateItemSellerName_" + itemId).val();
  let itemSellerTel = $("#updateItemSellerTel_" + itemId).val();
  let itemSoldStatus = document.querySelector("#test_" + itemId).checked
    ? 1
    : 0;

  console.log(itemSoldStatus);

  let postData = {
    itemId,
    itemName,
    itemPrice,
    itemCatId,
    itemDesc,
    itemSellerName,
    itemSellerTel,
    itemSoldStatus
  };
  console.log(postData);
  $.ajax({
    url: "/admin/updateproduct/",
    dataType: "json",
    data: postData,
    async: true,
    type: "POST",
    success: function (data, err) {
      console.log(data["message"]);
    },
    error: function (request, status, error) {
      console.log(request.responseText);
    }
  });
}

window.addEventListener("DOMContentLoaded", () => {
  const btns = document.querySelector(".switch_btns");
  let currentTableMode = localStorage.getItem("tableMode") || null

  if (currentTableMode === "jqueryGrid" || currentTableMode === null) {
    $("#cars_table").hide();
    $("#gbox_grid").show();
    $("#jqueryGrid").addClass("active")
    $("#tableGrid").removeClass("active")
  } else{
    console.log("TABLE")
    $("#gbox_grid").hide()
    $("#cars_table").show();
    $("#jqueryGrid").removeClass("active")
    $("#tableGrid").addClass("active")
  }

  btns.addEventListener("click", (e) => {
    const { target } = e;
    if (target.id === "jqueryGrid") {
      localStorage.setItem('tableMode', "jqueryGrid")
      $("#jqueryGrid").addClass("active")
      $("#tableGrid").removeClass("active")
      $("#gbox_grid").show();
      $("#cars_table").hide();
    } 
    else if(target.id === "tableGrid") {
      localStorage.setItem('tableMode', "tableGrid")
      $("#jqueryGrid").removeClass("active")
      $("#tableGrid").addClass("active")
      $("#gbox_grid").hide();
      $("#cars_table").show();
    }
  });
});

