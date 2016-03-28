<?php include('simple_html_dom.php'); 

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>jQuery Autocomplete with Multiple Search Engines Suggestions</title>
<link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" />
</head>
<body>



    <form id="form1" name="form1" method="post" action="">
        Search:
        <input name="q" id="q" type="text" size="40" />
        <input name="submit" type="submit" value="Search" />
    </form>


<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.0.min.js"></script>
<script>
$(document).on('keyup','#q',function() {
var keyword=$(this).val();
$.post('http://192.168.1.10/sarupam/CodeIgniter/',{keyword:keyword},function(data){
console.log(data);exit;
})
})

$(document).on('keyup','#q',function(){

})
</script>


</body>
</html>
