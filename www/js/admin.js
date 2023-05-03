function getData(form) {
  var hData = {};

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

  let postData = { itemName, itemPrice, itemCatId, itemDesc };
  console.log(postData)
  $.ajax({
    url: "/admin/addproduct/",
    dataType: "json",
    data: postData,
    async: true,
    type: "POST",
    success: function (data, err) {
      console.log(data)
      if (data["success"]) {
        $("#newItemName").val("");
        $("#newItemPrice").val("");
        $("#newItemCatId").val("");
        $("#newItemDesc").val("");
      }
    },
    error: function (request, status, error) {
      console.log(request.responseText);
    }
  });
}
