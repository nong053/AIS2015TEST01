<!-- Mainly scripts -->
    <script src="../js/jquery-2.1.1.js"></script>
   <!-- NouSlider -->
   <script src="../js/plugins/nouslider/jquery.nouislider.min.js"></script>
   
    <link href="../css/plugins/nouslider/jquery.nouislider.css" rel="stylesheet">
    <div class="col-lg-6">
        <p class="font-bold">Basic example</p>
        <div id="basic_slider"></div>
    </div>
                                

    
   
 
    <script>
        $(document).ready(function(){

        $("#basic_slider").noUiSlider({
            start: 40,
            behaviour: 'tap',
            connect: 'upper',
            range: {
                'min':  20,
                'max':  80
            }
        });
        });


    </script>

</body>

</html>
