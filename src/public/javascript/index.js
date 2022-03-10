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

  $.ajax({
    url: "/pages/operation",
    method: "post",
    data: { action: "getBlogs" },
    dataType: "JSON",
  }).done((data) => {
    console.log(data);
    displayBlogs(data);
  });
});

function displayBlogs(data) {
  var html = "";

  for (var i = 0; i < data.length; i++) {
    if (data[i].status !== "approved") {
      continue;
    }
    var date = new Date(data[i].date);
    var dispDate = `${date.getDate()}/${
      date.getMonth() + 1
    }/${date.getFullYear()} ${date.getHours()}:${date.getMinutes()}:${date.getSeconds()}`;
    html += `
      <div class="col-sm-12 col-md-6 col-lg-4 my-4 ">
         <div class="card">
             <img src='../public/img/banner.png' style=' height:200px' class="card-img-top " alt="" />
             <div class="card-body">
                 <h4 class="card-title ">${
                   data[i].title
                 }<p class='text-muted fs-6'> &nbsp;&nbsp;&nbsp;&nbsp; -${
      data[i].author
    }&nbsp;&nbsp;(${dispDate})</p></h4>
                 <p>${
                   data[i].text.length > 100
                     ? data[i].text.slice(0, 100) +
                       `<a href='/pages/viewBlog?id=${data[i].blog_id}'>Read More</a>`
                     : data[i].text
                 } </p>
                 <a href="/pages/viewBlog?id=${
                   data[i].blog_id
                 }" class="btn btn-danger">
                     View
                 </a>
             </div>
         </div>
     </div>
    `;
  }
  $(".blogBody").html(html);
}
