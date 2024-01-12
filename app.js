$(document).ready(function () {
  $(window).on("load", function () {
    // Hide spinner after content has finished loading
    $(".spinner").hide();
  });
  $("#owlCarousel").owlCarousel({
    items: 1, // Number of items to display
    loop: true, // Enable loop
    margin: 0, // No margin between items
    nav: false, // Hide navigation arrows
    dots: true, // Hide pagination dots
    autoplay: true, // Enable autoplay
    autoplayTimeout: 4000, // Set autoplay timeout (milliseconds)
  });
  $(".owl-carousel").owlCarousel({
    items: 4,
    loop: true,
    autoplay: true,
    autoplayTimeout: 4000, // Set autoplay timeout (milliseconds)
    // nav: true,
    // dots: true,
    // margin: 1,
  });

  $(".filter-container").filterizr({
    animationDuration: 0.5,
  });
  $(".btn-filter").click(function () {
    console.log("Clicked");
    $(".controls").toggleClass("show");
  });
});
$(".btn-cross").click(function () {
  $(".alert").css("display", "none");
  console.log("Clicked");
});

function addToCart(button) {
  var form = button.closest("form"); // Find the closest form
  var formData = new FormData(form);

  fetch("php/cart.inc.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.text())
    .then((data) => {
      // document.getElementById("result").innerHTML += data;
      if (data.trim() === "success") {
        // Product was added successfully, update button appearance
        button.innerHTML = "Added to Cart";
        button.disabled = true; // Optionally disable the button
        button.classList.add("btn-added"); // Optionally add a CSS class
      }
    })
    .catch((error) => {
      console.error("Error:", error);
    });
}

function removeProduct(button) {
  // var productContainer = button.parentElement.parentElement;
  var productContainer = button.closest(".current-product");
  var targetForm = button.closest("form"); // Find the closest form
  var targetData = new FormData(targetForm);

  console.log(productContainer);
  fetch("php/delete.inc.php", {
    method: "POST",
    body: targetData,
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error("Network response was not ok");
      }
      return response.text();
    })
    .then((data) => {
      if (data.trim() === "deleted") {
        productContainer.remove();
        alert("Deleted successfully");
      } else {
        alert("Deletion failed. Server response: " + data);
      }
    })
    .catch((error) => {
      console.error("Fetch error:", error);
    });
}
