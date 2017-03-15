<html>
<head>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<input type="text" id="birds" />
<script>
    $(function(){
        $("#birds").autocomplete({
            source: "<?php echo site_url('Welcome/get_products');?>" // path to the get_birds method
        });
    });
</script>
</html>