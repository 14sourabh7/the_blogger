<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a href="/" class="text-danger navbar-brand ms-5 px-5">
            <i class="fa-solid fa-shop"></i>
            <span class="text-primary ms-2 fw-bold fs-3">The</span><span class="text-primary fw-normal fs-3">Bloggers</span>
        </a>

        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h2 class="text-white py-2">
            Dashboard
        </h2>
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <button class="btn text-white px-3 authButton" href="#">Sign out</button>
            </div>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row" id='admin'>
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active text-dark fw-bold" aria-current="page" href="#">
                                <span data-feather="home"></span>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link users" href="#users" style="display: none">
                                <span data-feather="file"></span>
                                User Management
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link blogs" href="#blogs" style="display: none">
                                <span data-feather="shopping-cart"></span>
                                Blog Management
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" id="admin">

                <section id='users' style="display: none">
                    <div id='users' class="my-5">
                        <div class="row">
                            <div class="col-8">
                                <h1>User Management</h1>
                            </div>

                            <div class="col-4">
                                <a href='/pages/addNewUser' class="btn btn-success addNewUser">Add New</a>
                            </div>
                        </div>
                        <div class="table-responsive mt-4">
                            <table class="table table-striped table-sm" id='userTable'>
                                <thead>
                                    <tr>
                                        <th scope="col">user_ID</th>
                                        <th scope="col">password</th>
                                        <th scope="col">name</th>
                                        <th scope="col">email</th>
                                        <th scope='col'>role</th>
                                        <th scope='col'>Status</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody class='userData'>
                                </tbody>
                            </table>

                        </div>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination paginationUser">

                            </ul>
                        </nav>
                </section>

                <section id='blogs' style="display: none">
                    <div id='blogs' class="my-5">
                        <div class="row">
                            <div class="col-8">
                                <h1>Blog Management</h1>
                            </div>

                            <div class="col-4">
                                <button class="btn btn-danger writeBlog" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class='fa-solid fa-edit'></i>
                                    Write Blog</button>
                            </div>
                        </div>
                        <div class="table-responsive mt-4">
                            <table class="table table-striped table-sm" id='blogTable'>
                                <thead>
                                    <tr>
                                        <th scope="col">blog_ID</th>
                                        <th scope="col">user_ID</th>
                                        <th scope="col">title</th>
                                        <th scope="col">author</th>
                                        <th scope="col">date</th>
                                        <th scope='col'>Status</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody class='blogData'>
                                </tbody>
                            </table>

                        </div>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination paginationBlog">

                            </ul>
                        </nav>
                </section>
                <div class=" modal fade" id="exampleModal" tabindex="-1" aria-labelledby="blogModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Write your blog</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <input type="text" class='blogTitle mb-3' placeholder="blog title">
                                <p class="blogTitleError text-danger"></p>
                                <textarea name="blog" class='blogText' placeholder="write your blog here" cols="40" rows="10"></textarea>
                                <p class="blogTextError text-danger"></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">cancel</button>
                                <button type="button" class="btn btn-success blogPost">post</button>
                                <button type="button" class="btn btn-success blogUpdate" style="display:none">update</button>
                                <a data-id='' class='bID'></a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <?php include '../app/views/components/footer.php'; ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../public/javascript/dashboard.js"></script>

</html>