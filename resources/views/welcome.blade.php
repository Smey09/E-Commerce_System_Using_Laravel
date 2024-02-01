<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVqnzr59Y2766rvipwN2tK1h+VTgJqtnQUqH5cPRP3Qv2j8r4xM8tPvqOm4h" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-auto bg-light sticky-top">
                <ul class="list-group">
                    <a href="/">
                        <li class="list-group-item active" aria-current="true"><i class="bi-bootstrap fs-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-calendar2-check-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5m9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5m-2.6 5.854a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z" />
                                </svg>
                                Home Page
                            </i>
                        </li>
                    </a>
                    <a href="/customer">
                        <li class="list-group-item" aria-current="true"><i class="bi-bootstrap fs-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                    <path
                                        d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4" />
                                </svg>
                                Customer
                            </i>
                        </li>
                    </a>
                    <a href="/product">
                        <li class="list-group-item" aria-current="true"><i class="bi-bootstrap fs-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-amazon" viewBox="0 0 16 16">
                                    <path
                                        d="M10.813 11.968c.157.083.36.074.5-.05l.005.005a90 90 0 0 1 1.623-1.405c.173-.143.143-.372.006-.563l-.125-.17c-.345-.465-.673-.906-.673-1.791v-3.3l.001-.335c.008-1.265.014-2.421-.933-3.305C10.404.274 9.06 0 8.03 0 6.017 0 3.77.75 3.296 3.24c-.047.264.143.404.316.443l2.054.22c.19-.009.33-.196.366-.387.176-.857.896-1.271 1.703-1.271.435 0 .929.16 1.188.55.264.39.26.91.257 1.376v.432q-.3.033-.621.065c-1.113.114-2.397.246-3.36.67C3.873 5.91 2.94 7.08 2.94 8.798c0 2.2 1.387 3.298 3.168 3.298 1.506 0 2.328-.354 3.489-1.54l.167.246c.274.405.456.675 1.047 1.166ZM6.03 8.431C6.03 6.627 7.647 6.3 9.177 6.3v.57c.001.776.002 1.434-.396 2.133-.336.595-.87.961-1.465.961-.812 0-1.286-.619-1.286-1.533M.435 12.174c2.629 1.603 6.698 4.084 13.183.997.28-.116.475.078.199.431C13.538 13.96 11.312 16 7.57 16 3.832 16 .968 13.446.094 12.386c-.24-.275.036-.4.199-.299z" />
                                    <path
                                        d="M13.828 11.943c.567-.07 1.468-.027 1.645.204.135.176-.004.966-.233 1.533-.23.563-.572.961-.762 1.115s-.333.094-.23-.137c.105-.23.684-1.663.455-1.963-.213-.278-1.177-.177-1.625-.13l-.09.009q-.142.013-.233.024c-.193.021-.245.027-.274-.032-.074-.209.779-.556 1.347-.623" />
                                </svg>
                                Product Views
                            </i>
                        </li>
                    </a>
                    <a href="/orders_views">
                        <li class="list-group-item" aria-current="true"><i class="bi-bootstrap fs-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-alarm-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H9v1.07a7.001 7.001 0 0 1 3.274 12.474l.601.602a.5.5 0 0 1-.707.708l-.746-.746A6.97 6.97 0 0 1 8 16a6.97 6.97 0 0 1-3.422-.892l-.746.746a.5.5 0 0 1-.707-.708l.602-.602A7.001 7.001 0 0 1 7 2.07V1h-.5A.5.5 0 0 1 6 .5m2.5 5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.04 8.04 0 0 0 .86 5.387M11.613 1.86a2.5 2.5 0 1 1 3.527 3.527 8.04 8.04 0 0 0-3.527-3.527" />
                                </svg>
                                Order
                            </i>
                        </li>
                    </a>
                    <a href="#">
                        <li class="list-group-item" aria-current="true"><i class="bi-bootstrap fs-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                                    <path
                                        d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5zm1.294 7.456A2 2 0 0 1 4.732 11h5.536a2 2 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456M12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2" />
                                </svg>
                                Delivery
                            </i>
                        </li>
                    </a>
                    <a href="#">
                        <li class="list-group-item" aria-current="true"><i class="bi-bootstrap fs-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                                    <path
                                        d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5M.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5m15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5" />
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                </svg>
                                Employees
                            </i>
                        </li>
                    </a>
                    <a href="#">
                        <li class="list-group-item" aria-current="true"><i class="bi-bootstrap fs-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                                    <path
                                        d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                    <path
                                        d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492z" />
                                </svg>
                                Contact US
                            </i>
                        </li>
                    </a>
                    <a href="#">
                        <li class="list-group-item" aria-current="true"><i class="bi-bootstrap fs-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                    <path
                                        d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0" />
                                    <path
                                        d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z" />
                                </svg>
                                About
                            </i>
                        </li>
                    </a>
                    {{--
                    <li class="list-group-item">A third item</li> --}}
                </ul>
                <div class="d-flex flex-sm-column flex-row flex-nowrap bg-light align-items-center sticky-top">
                    <ul
                        class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center align-items-center">
                        <li>
                            <a href="/product" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip"
                                data-bs-placement="right" data-bs-original-title="Products">
                                <i class="bi-heart fs-1">

                                    <button type="button" class="btn btn-primary"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-database-fill-add" viewBox="0 0 16 16">
                                            <path
                                                d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0M8 1c-1.573 0-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4s.875 1.755 1.904 2.223C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777C13.125 5.755 14 5.007 14 4s-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1" />
                                            <path
                                                d="M2 7v-.839c.457.432 1.004.751 1.49.972C4.722 7.693 6.318 8 8 8s3.278-.307 4.51-.867c.486-.22 1.033-.54 1.49-.972V7c0 .424-.155.802-.411 1.133a4.51 4.51 0 0 0-4.815 1.843A12 12 0 0 1 8 10c-1.573 0-3.022-.289-4.096-.777C2.875 8.755 2 8.007 2 7m6.257 3.998L8 11c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V10c0 1.007.875 1.755 1.904 2.223C4.978 12.711 6.427 13 8 13h.027a4.55 4.55 0 0 1 .23-2.002m-.002 3L8 14c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V13c0 1.007.875 1.755 1.904 2.223C4.978 15.711 6.427 16 8 16c.536 0 1.058-.034 1.555-.097a4.5 4.5 0 0 1-1.3-1.905" />
                                        </svg>
                                        New Product</button>
                                </i>

                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip"
                                data-bs-placement="right" data-bs-original-title="Customers">
                                <i class="bi-people fs-1">

                                    <button type="button" class="btn btn-warning"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-substack" viewBox="0 0 16 16">
                                            <path
                                                d="M15 3.604H1v1.891h14v-1.89ZM1 7.208V16l7-3.926L15 16V7.208zM15 0H1v1.89h14z" />
                                        </svg>
                                        report</button>
                                </i>
                            </a>
                        </li>
                    </ul>
                    <div class="dropdown">
                        <a href="/st"
                            class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle"
                            id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-person-circle h2">
                                Admin
                            </i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm p-3 min-vh-100">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">Active</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                    <li class="nav-item">
                                        <a class="nav-link disabled" aria-disabled="true">Discount</a>
                                        {{-- <button>Discount</button> --}}
                                    </li>
                                    {{-- <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                                href="#" role="button" aria-expanded="false">Dropdown</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                                            </ul> --}}
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                    </li>
                                </ul>
                                <form class="d-flex" role="search">
                                    <input class="form-control me-2" type="search" placeholder="Search"
                                        aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                            </ul>
                        </div>
                    </div>
                </nav>

                <! -- Body page -->

                    <div id="carouselExampleCaptions" class="carousel slide">
                        <div class="container text-center">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="card">
                                        <img src="https://www.digitaltrends.com/wp-content/uploads/2021/11/macbook-pro-2021-01.jpg?p=1"
                                            class="card-img-top" alt="...">

                                        <div class="card-body">
                                            <h5 class="card-title">Macbook Pro M2 16"<p></p><a href="#"
                                                    class="btn btn-warning">1500$</a></h5>
                                            <p class="card-text">New MacBook Pro features up to 6x faster performance
                                                than
                                                fastest Intel-based MacBook Pro and support for up to 96GB of unified
                                                memory for
                                                demanding pro workflows.</p>
                                            <a href="#" class="btn btn-primary">Buy Now</a>
                                            <a href="/views_product_details" class="btn btn-danger">Views Ditail</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <img src="https://www.digitaltrends.com/wp-content/uploads/2021/11/macbook-pro-2021-01.jpg?p=1"
                                            class="card-img-top" alt="...">

                                        <div class="card-body">
                                            <h5 class="card-title">Macbook Pro M2 16"<p></p><a href="#"
                                                    class="btn btn-warning">1500$</a></h5>
                                            <p class="card-text">New MacBook Pro features up to 6x faster performance
                                                than
                                                fastest Intel-based MacBook Pro and support for up to 96GB of unified
                                                memory for
                                                demanding pro workflows.</p>
                                            <a href="#" class="btn btn-primary">Buy Now</a>
                                            <a href="/views_product_details" class="btn btn-danger">Views Ditail</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="col">
                                        <div class="card">
                                            <img src="https://www.digitaltrends.com/wp-content/uploads/2021/11/macbook-pro-2021-01.jpg?p=1"
                                                class="card-img-top" alt="...">

                                            <div class="card-body">
                                                <h5 class="card-title">Macbook Pro M2 16"<p></p><a href="#"
                                                        class="btn btn-warning">1500$</a></h5>
                                                <p class="card-text">New MacBook Pro features up to 6x faster
                                                    performance
                                                    than
                                                    fastest Intel-based MacBook Pro and support for up to 96GB of
                                                    unified
                                                    memory for
                                                    demanding pro workflows.</p>
                                                <a href="#" class="btn btn-primary">Buy Now</a>
                                                <a href="/views_product_details" class="btn btn-danger">Views
                                                    Ditail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="carouselExampleCaptions" class="carousel slide">
                        <div class="container text-center">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="card">
                                        <img src="https://www.pcworld.com/wp-content/uploads/2023/08/Lead-8.jpg?quality=50&strip=all"
                                            class="card-img-top" alt="...">

                                        <div class="card-body">
                                            <h5 class="card-title">Asus ROG Strix 18"<p></p><a href="#"
                                                    class="btn btn-warning">$2199.99</a></h5>
                                            <p class="card-text">The Asus Strix 18 is truly a gaming powerhouse capable
                                                of chart-topping performance thanks to its Intel Core i9-13980HX
                                                processor and Nvidia GeForce RTX 4090 series GPU, but also due to an
                                                innovative design that enhances airflow and cooling. Additionally, with
                                                its huge, gorgeous 18-inch, QHD+ 240Hz display, this laptop is the
                                                closest thing we’ve seen to a true desktop replacement to date. Read on
                                                to find out just why that is.</p>
                                            <a href="#" class="btn btn-primary">Buy Now</a>
                                            <a href="#" class="btn btn-danger">Views Ditail</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <img src="https://www.pcworld.com/wp-content/uploads/2023/08/Lead-8.jpg?quality=50&strip=all"
                                            class="card-img-top" alt="...">

                                        <div class="card-body">
                                            <h5 class="card-title">Asus ROG Strix 18"<p></p><a href="#"
                                                    class="btn btn-warning">$2199.99</a></h5>
                                            <p class="card-text">The Asus Strix 18 is truly a gaming powerhouse capable
                                                of chart-topping performance thanks to its Intel Core i9-13980HX
                                                processor and Nvidia GeForce RTX 4090 series GPU, but also due to an
                                                innovative design that enhances airflow and cooling. Additionally, with
                                                its huge, gorgeous 18-inch, QHD+ 240Hz display, this laptop is the
                                                closest thing we’ve seen to a true desktop replacement to date. Read on
                                                to find out just why that is.</p>
                                            <a href="#" class="btn btn-primary">Buy Now</a>
                                            <a href="#" class="btn btn-danger">Views Ditail</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <img src="https://www.pcworld.com/wp-content/uploads/2023/08/Lead-8.jpg?quality=50&strip=all"
                                            class="card-img-top" alt="...">

                                        <div class="card-body">
                                            <h5 class="card-title">Asus ROG Strix 18"<p></p><a href="#"
                                                    class="btn btn-warning">$2199.99</a></h5>
                                            <p class="card-text">The Asus Strix 18 is truly a gaming powerhouse capable
                                                of chart-topping performance thanks to its Intel Core i9-13980HX
                                                processor and Nvidia GeForce RTX 4090 series GPU, but also due to an
                                                innovative design that enhances airflow and cooling. Additionally, with
                                                its huge, gorgeous 18-inch, QHD+ 240Hz display, this laptop is the
                                                closest thing we’ve seen to a true desktop replacement to date. Read on
                                                to find out just why that is.</p>
                                            <a href="#" class="btn btn-primary">Buy Now</a>
                                            <a href="#" class="btn btn-danger">Views Ditail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row footer">
                        <div class="col-sm-12 text-center">
                            <h1>
                            </h1>
                        </div>
                    </div>
                    <div>
                        <a href="/"><button type="button" class="btn btn-danger">Home Page</button></a>
                        <a href="/macbook_views"><button type="button" class="btn btn-primary">Macbook</button></a>
                        <a href="/asus_views"><button type="button" class="btn btn-primary">Asus</button></a>
                        <a href="/pro"><button type="button" class="btn btn-primary">3</button></a>
                        <a href="#"><button type="button" class="btn btn-primary">4</button></a>
                        <a href="#"><button type="button" class="btn btn-primary">5</button></a>
                        {{-- <button type="button" class="btn btn-secondary">Secondary</button>
                        <button type="button" class="btn btn-success">Success</button>
                        <button type="button" class="btn btn-danger">Danger</button>
                        <button type="button" class="btn btn-warning">Warning</button>
                        <button type="button" class="btn btn-info">Info</button>
                        <button type="button" class="btn btn-light">Light</button>
                        <button type="button" class="btn btn-dark">Dark</button> --}}
                    </div>
                    <div class="row footer">
                        <div class="col-sm-12 text-center">
                            <p class="text-muted">Copyright © 2024 Dashboard System, ICT. Student Assignment at Norton
                                University
                            </p>
                        </div>
                    </div>
                    <! -- Body page -->
            </div>
        </div>
    </div>
    {{-- <div class="row footer">
        <div class="col-sm-12 text-center">
            <p class="text-muted">Copyright © 2024 Dashboard System, ICT. Student Assignment at Norton University
            </p>
        </div>
    </div> --}}
    </div>
