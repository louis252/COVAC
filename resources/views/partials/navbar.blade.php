<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="img/COVAC Logo.png" alt="" width="35" height="40" class="d-inline-block align-text-middle"> COVAC
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/about">About</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a  class="nav-link {{ ($title === "Login") ? 'active' : '' }}" href="/login"><span class="glyphicon glyphicon-user"></span> Register </a>
                </li>
                <li>
                    <a  class="nav-link {{ ($title === "Register") ? 'active' : '' }}" href="/register"><span class="glyphicon glyphicon-log-in"></span> Login </a>
                </li>
              </ul>
        </div>
    </div>
</nav>