<nav class="navbar sticky-top navbar-expand-sm bg-white shadow-sm">

    <div class="container-fluid pt-3 pb-2 d-flex align-items-center">
        <a href="/" class="text-danger navbar-brand ms-5 px-5">
            <i class="fa-solid fa-book"></i>
            <span class="text-primary ms-2 fw-bold fs-3">The</span><span class="text-primary fw-normal fs-3">Bloggers</span>
        </a>
        <!-- <div class="input-group border px-2 py-2" style="border-radius: 30px; width: 40%">
            <input type="text" class="form-control border-0" placeholder="Search" />
            <button class="btn rounded text-danger pe-4" href="#">
                <i class="fa fa-search"></i>
            </button>
        </div> -->
        <ul class="navbar-nav">
            <li class="nav-item px-1">

            <li class="nav-item px-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <button class="btn text-danger" href="/pages/cart.php"><i class="fa-solid fa-edit"></i>Write</button>
            </li>
            <a class="nav-link" href="/pages/dashboard">
                Dashboard
            </a>
            </li>

            <li class="nav-item px-1">
                <button class="btn btn-danger rounded authButton">Sign In</button>
            </li>
        </ul>
    </div>
</nav>



<!-- Modal -->
<div class=" modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Write your blog</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <textarea name="blog" id="newBlog" placeholder="write your blog here" cols="40" rows="10"></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">cancel</button>
                <button type="button" class="btn btn-success">post</button>
            </div>
        </div>
    </div>
</div>