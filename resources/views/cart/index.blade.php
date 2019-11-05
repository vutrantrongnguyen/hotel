@extends('layouts.app')

@section('content')
    <html lang="en"><head>
<title>Demo Simple PHP Shopping Cart</title>
<link href="style.css" type="text/css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index,follow">
<link rel="shortcut icon" href="http://phppot.com/favicon.ico" type="image/x-icon">
<link rel="stylesheet" id="solandra-style-css" href="http://phppot.com/wp-content/themes/solandra/style.css" type="text/css" media="all">
<style>
#demo-content {padding: 0px 0px 100px 0px;}
#demo-content table.tutorial-table {table-layout:auto;}
.tutorial-back a{background: url('http://phppot.com/wp-content/themes/solandra/images/back.png') no-repeat 15px center #09f;padding: 10px 10px 10px 20px;margin: 20px 40px 20px 0;color: #fff;display: inline-block;width: 155px;text-align: center;border-radius: 5px;box-shadow: 0 2px 5px rgba(0,0,0,0.25);}
.tutorial-back a:hover {
box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.50);
}
</style><script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-40067115-1']);
  _gaq.push(['_setDomainName', 'phppot.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script></head>
<body>

<div id="demo-content">
<div id="shopping-cart">

	
<table class="tutorial-table">
<tbody>
<tr>
<th><strong>Name</strong></th>
<th><strong>Quantity</strong></th>
<th><strong>Price</strong></th>
<th><strong>Action</strong></th>
</tr>	
				<tr>
				<td><strong>Coca</strong></td>
				<td>2</td>
				<td>$200</td>
				<td><a href="#" class="btnRemoveAction">Remove Item</a></td>
				</tr>
								<tr>
				<td><strong>Bo huc</strong></td>
				<td>1</td>
				<td>$100</td>
				<td><a href="#" class="btnRemoveAction">Remove Item</a></td>
				</tr>
				
<tr>
<td colspan="5" align="right"><strong>Total:</strong> $300</td>
</tr>
</tbody>
</table>		
  </div>



</div>
</body></html>



@endsection