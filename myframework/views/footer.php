<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/assets/js/jquery.min.js"></script>
<srcipt src="/assets/js/popper.min.js"></srcipt>
<script src="/assets/js/script.js"></script>
<script src="/assets/js/tether.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>

<script>
    jQuery("#ajaxbutton").click(function(){

        jQuery.ajax({
            method:"POST",
            url: "/login/ajaxPars",
            data:{"email":jQuery("#email").val(),"password":jQuery("#password").val()},
            success:function(msg){

                if(msg=="welcome"){
                    alert("Login Success!")
                }else{
                    alert("Login Failed!")
                }
            }
        })
    })
</script>

<!--
<script src="src/bootstrap-off-canvas-nav.js"></script>
-->
</body>
</html>