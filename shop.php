<html>
<head>
<title>Product Details</title>
<style>
td, th {
border: 1px solid #dddddd;
text-align: left;
padding: 8px;
}
</style>
</head>
<body>
<form action="">
Name:<br>
<input type="text" name="firstname"><br>
Gender:<br>
<input type="radio" name="gender" value="male"> Male<br>
<input type="radio" name="gender" value="female"> Female<br>
Address:<br>
<textarea rows="4" cols="50">
</textarea><br>
Phone Number:<br>
<input type="text" name="pno"><br>
Paymentoptions:<br>
<input type="radio" name="payment" value="cash">CashOnDelivery<br>
<input type="radio" name="payment" value="netbanking">InternetBanking<br>
<input type="radio" name="payment" value="credit/debit">Credit/Debit<br>
<input type="submit">
<table>
<tr>
<th>Product</th>
<th>UnitPrice</th>
<th>Qty</th>
</tr>
<tr>
<td>USB pendrive</td>
<td>300</td>
<td><input type="text" name="usb"/></td>
</tr>
<tr>
<td>wireless mouse</td>
<td>200</td>
<td><input type="text" name="wm"/></td>
</tr>
<tr>
<td>keyboard</td>
<td>400</td>
<td><input type="text" name="kb"/></td>
</tr>
<tr>
<td>laptop</td>
<td>33000</td>
<td><input type="text" name="lp"/></td>
</tr>
</table>
</form>
</body>
</html>
