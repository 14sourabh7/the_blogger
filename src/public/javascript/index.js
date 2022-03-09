$(document).ready(function () {
  if (sessionStorage.getItem("login") == 1) {
    $(".authButton").html("SignOut");
  } else {
    $(".authButton").html("SignIn");
  }

  $(".authButton").click(function () {
    if (sessionStorage.getItem("login") == 1) {
      sessionStorage.removeItem("login");
    }
    location.replace("/pages/authentication");
  });
});
