<h1>Contact</h1>



<form action="/condata" method="POST">
@csrf

<input type="text" name="name" require placeholder="Name">
<input type="file" name="img" id="2" placeholder="Image" require>

<button type="submit"> Submit</button>

</form>