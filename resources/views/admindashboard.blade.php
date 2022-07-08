<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="{{ url('/css/custom.css') }}">
    <title>HR Management System</title>
</head>
<body>
    <section class="dashboard">
        <nav class="navbar sidenavbar navbar-expand-lg navbar-light bg-light">
            <div class="navbar-logo">
                <img src="{{url('/img/logo2.png')}}" alt="">
            </div>
            <ul class="sidenav-list">
                <li><a href=""> <i class="fa fa-home"></i>Dashboard</a></li>
                <li><a href=""><i class="fa fa-users"></i>Employees</a></li>
                <li>
                    <button class="dropdown-btn"><i class="fa fa-check-circle"></i><span style="margin-right: 40px">Request</span><i class="fa fa-caret-down"></i></button>
                    <div class="request-content">
                        <a href="">Overtime</a>
                        <a href="">Leave</a>
                    </div>
                </li>
                <li><a href="">Something else</a></li>
            </ul>
        </nav>
        <div class="header">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="menu-bar" id="">
                    <ul class="navbar-nav">
                        <li>
                        <a class="dropdown-emp" href="#" id="">
                            Admin <span class="bold">B1B2</span>
                            <i class="fa fa-caret-down bold"></i>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{url('employee/profile')}}">My Profile</a>
                            <a class="dropdown-item" href="#">Log Out</a>
                        </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>
    <script src="/js/app.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>

    <script type="text/javascript">
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("hover-active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }

        var headdropdown = document.getElementsByClassName("dropdown-emp");
        var x;

        for (x = 0; x < headdropdown.length; x++) {
            headdropdown[x].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownMenu = this.nextElementSibling;
                if (dropdownMenu.style.display === "block") {
                    dropdownMenu.style.display = "none";
                } else {
                    dropdownMenu.style.display = "block";
                }
            });
        }
    </script>
</body>
</html>
