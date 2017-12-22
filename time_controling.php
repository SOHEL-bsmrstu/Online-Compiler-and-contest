 <div>
        <div id = "response" style=" display: none; font-size: 25px;"></div>

        <script type="text/javascript">
            var setInterval = setInterval(function ()
            {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.open("GET", "exam_time.php", false);
                xmlhttp.send(null);
                var time_finish = xmlhttp.responseText;
                if (time_finish !== "00:00:00") {
                    document.getElementById("response").innerHTML = xmlhttp.responseText;

                }
                else {
                    document.getElementById("response").innerHTML = xmlhttp.responseText;
                    clearInterval(setInterval);

                }

            }, 1000);
        </script>
</div>