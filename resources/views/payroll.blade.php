
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
                <li><a href="{{url('employee')}}"> <i class="fa fa-home"></i>Dashboard</a></li>
                <li><a href="{{url('employee/payroll')}}" class="active"><i class="fa fa-calendar"></i>Payroll</a></li>
                <li>
                    <button class="dropdown-btn"><i class="fa fa-check-circle"></i><span style="margin-right: 40px">Requests</span><i class="fa fa-caret-down"></i></button>
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
                            Employee <span class="bold">B1B2</span>
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

            <div class="header-content">
                <div class="table-actions">
                    <button type="button" class="btn btn-danger">Time Adjust</button>
                    <button type="button" class="btn btn-primary margin-left">Something</button>
                    <button type="button" class="btn btn-success margin-left">Another one</button>
                </div>
                <div class="table-content">
                    <table>
                        <tr>
                            <th>Date</th>
                            <th>Time In</th>
                            <th>Time Out</th>
                            <th>Status</th>
                            <th colspan="3">Action</th>
                        </tr>
                        <tr>
                            <td>July 14, 2022</td>
                            <td>9:34 AM</td>
                            <td>6:55 PM</td>
                            <td>Attend</td>
                            <td><button type="button" class="btn btn-primary">Time Adjust</button></td>
                            <td><button type="button" class="btn btn-primary">Primary</button></td>
                            <td><button type="button" class="btn btn-primary">Primary</button></td>
                          </tr>
                          <tr>
                            <td>July 14, 2022</td>
                            <td>9:34 AM</td>
                            <td>6:55 PM</td>
                            <td>Attend</td>
                            <td><button type="button" class="btn btn-primary">Time Adjust</button></td>
                            <td><button type="button" class="btn btn-primary">Primary</button></td>
                            <td><button type="button" class="btn btn-primary">Primary</button></td>
                          </tr>
                          <tr>
                            <td>July 14, 2022</td>
                            <td>9:34 AM</td>
                            <td>6:55 PM</td>
                            <td>Attend</td>
                            <td><button type="button" class="btn btn-primary">Time Adjust</button></td>
                            <td><button type="button" class="btn btn-primary">Primary</button></td>
                            <td><button type="button" class="btn btn-primary">Primary</button></td>
                          </tr>
                          <tr>
                            <td>July 14, 2022</td>
                            <td>9:34 AM</td>
                            <td>6:55 PM</td>
                            <td>Attend</td>
                            <td><button type="button" class="btn btn-primary">Time Adjust</button></td>
                            <td><button type="button" class="btn btn-primary">Primary</button></td>
                            <td><button type="button" class="btn btn-primary">Primary</button></td>
                          </tr>
                          <tr>
                            <td>July 14, 2022</td>
                            <td>9:34 AM</td>
                            <td>6:55 PM</td>
                            <td>Attend</td>
                            <td><button type="button" class="btn btn-primary">Time Adjust</button></td>
                            <td><button type="button" class="btn btn-primary">Primary</button></td>
                            <td><button type="button" class="btn btn-primary">Primary</button></td>
                          </tr>
                          <tr>
                            <td>July 14, 2022</td>
                            <td>9:34 AM</td>
                            <td>6:55 PM</td>
                            <td>Attend</td>
                            <td><button type="button" class="btn btn-primary">Time Adjust</button></td>
                            <td><button type="button" class="btn btn-primary">Primary</button></td>
                            <td><button type="button" class="btn btn-primary">Primary</button></td>
                          </tr>
                          <tr>
                            <td>July 14, 2022</td>
                            <td>9:34 AM</td>
                            <td>6:55 PM</td>
                            <td>Attend</td>
                            <td><button type="button" class="btn btn-primary">Time Adjust</button></td>
                            <td><button type="button" class="btn btn-primary">Primary</button></td>
                            <td><button type="button" class="btn btn-primary">Primary</button></td>
                          </tr>
                          <tr>
                            <td>July 14, 2022</td>
                            <td>9:34 AM</td>
                            <td>6:55 PM</td>
                            <td>Attend</td>
                            <td><button type="button" class="btn btn-primary">Time Adjust</button></td>
                            <td><button type="button" class="btn btn-primary">Primary</button></td>
                            <td><button type="button" class="btn btn-primary">Primary</button></td>
                          </tr>
                          <tr>
                            <td>July 14, 2022</td>
                            <td>9:34 AM</td>
                            <td>6:55 PM</td>
                            <td>Attend</td>
                            <td><button type="button" class="btn btn-primary">Time Adjust</button></td>
                            <td><button type="button" class="btn btn-primary">Primary</button></td>
                            <td><button type="button" class="btn btn-primary">Primary</button></td>
                          </tr>
                          <tr>
                            <td>July 14, 2022</td>
                            <td>9:34 AM</td>
                            <td>6:55 PM</td>
                            <td>Attend</td>
                            <td><button type="button" class="btn btn-primary">Time Adjust</button></td>
                            <td><button type="button" class="btn btn-primary">Primary</button></td>
                            <td><button type="button" class="btn btn-primary">Primary</button></td>
                          </tr>
                          <tr>
                            <td>July 14, 2022</td>
                            <td>9:34 AM</td>
                            <td>6:55 PM</td>
                            <td>Attend</td>
                            <td><button type="button" class="btn btn-primary">Time Adjust</button></td>
                            <td><button type="button" class="btn btn-primary">Primary</button></td>
                            <td><button type="button" class="btn btn-primary">Primary</button></td>
                          </tr>
                          <tr>
                            <td>July 14, 2022</td>
                            <td>9:34 AM</td>
                            <td>6:55 PM</td>
                            <td>Attend</td>
                            <td><button type="button" class="btn btn-primary">Time Adjust</button></td>
                            <td><button type="button" class="btn btn-primary">Primary</button></td>
                            <td><button type="button" class="btn btn-primary">Primary</button></td>
                          </tr>
                          <tr>
                            <td>July 14, 2022</td>
                            <td>9:34 AM</td>
                            <td>6:55 PM</td>
                            <td>Attend</td>
                            <td><button type="button" class="btn btn-primary">Time Adjust</button></td>
                            <td><button type="button" class="btn btn-primary">Primary</button></td>
                            <td><button type="button" class="btn btn-primary">Primary</button></td>
                          </tr>
                          <tr>
                            <td>July 14, 2022</td>
                            <td>9:34 AM</td>
                            <td>6:55 PM</td>
                            <td>Attend</td>
                            <td><button type="button" class="btn btn-primary">Time Adjust</button></td>
                            <td><button type="button" class="btn btn-primary">Primary</button></td>
                            <td><button type="button" class="btn btn-primary">Primary</button></td>
                          </tr>
                          <tr>
                            <td>July 14, 2022</td>
                            <td>9:34 AM</td>
                            <td>6:55 PM</td>
                            <td>Attend</td>
                            <td><button type="button" class="btn btn-primary">Time Adjust</button></td>
                            <td><button type="button" class="btn btn-primary">Primary</button></td>
                            <td><button type="button" class="btn btn-primary">Primary</button></td>
                          </tr>
                      </table>
                </div>
            </div>
        </div>
    </section>
    <script src="/js/app.js"></script>
    <script type="text/javascript" src="/js/jquery.min.js"></script>

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
