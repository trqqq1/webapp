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
<body onload = "configure();" >
    <section class="landing-page">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                    <a class="navbar-brand" href="#"><span class="bold">HR</span> Management System</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <div class="attendancePage">
            <form method="POST" action="{{ route('webcam.capture') }}" enctype="multipart/form-data">
                @csrf
                <div class="cameraBox">
                    <p id="time" class="cameraText"></p>
                    <p class="cameraText ">Show your face here.</p>
                    <div id="video"></div>
                    <div class="buttons">
                        <input type="hidden" name="status" id="InOutValue" value="IN">
                        <button type="button" id="attendanceButton" value="IN" class="btn btn-success">Time IN</button>
                        <button type="button" id="attendanceButton" value="OUT" class="btn btn-secondary">Time OUT</button>
                    </div>
                </div>
                <div class="formBox">
                    <h1>TIME IN</h1>
                    <div class="mb-4">
                        <input type="text" name="empId" class="form-control" placeholder="Employee ID" autocomplete="off" required>
                        <input type="hidden" name="image" id="image-tag" class="image-tag">
                    </div>
                    <div class="mb-3">
                        <input type="password" name="empPass" class="form-control" placeholder="Password" autocomplete="off" required>
                    </div>
                    <div class="buttons">
                        <button type="submit" class="btn btn-outline-primary loginButton" onClick="take_snapshot()">ATTEND</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <script src="/js/app.js"></script>
    <script type="text/javascript" src="assets/webcam.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript">
            function configure() {
                Webcam.set({
                    width: 270,
                    height: 196,
                    image_format: 'jpeg',
                    jpeg_quality: 120
                });

                Webcam.attach('#video');
            }

           function take_snapshot() {
                Webcam.snap(function(data_uri){
                    $(".image-tag").val(data_uri);
                    document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
                });
            }

            function refreshTime() {
                const timeDisplay = document.getElementById("time");
                const dateString = new Date().toLocaleString();
                const formattedString = dateString.replace(", ", " - ");
                timeDisplay.textContent = formattedString;
            }
            setInterval(refreshTime, 1000);

            var msg = '{{Session::get('alert')}}';
            var exist = '{{Session::has('alert')}}';
            if(exist){
            alert(msg);
            }

            buttons = document.querySelector(".buttons").querySelectorAll("button");
            buttons.forEach(element => {
                element.addEventListener("click", function(){
                    var currentValue = $(this).val();
                    var nextValue = document.getElementById('InOutValue').value = currentValue;
                    buttons.forEach(button=>button.classList.add("btn-secondary"))
                    buttons.forEach(button=>button.classList.remove("btn-success"))
                    this.classList.add("btn-success");
                    this.classList.remove("btn-secondary");
                })
            })

            // $(document).ready(function(){
            //     $('#attendanceButton').click(function(){
            //         var val = $(this).val();
            //         console.log(val);
            //     })
            // })
    </script>
</body>
</html>
