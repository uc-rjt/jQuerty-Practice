<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<input type='textbox' id="num1">

<a href="javascript:void(0)" onclick="click_here();">Click Here</a>


<script>
    function click_here(){
        var num1 = jQuery('#num1').val();
        jQuery.ajax({
            url: 'get.php',
            type: 'post',
            data: 'num1=' + num1,
            success: function(result){
                alert(result);
            }
        });
    }

</script>