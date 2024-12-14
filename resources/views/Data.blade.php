<h1>Data</h1>

<form action="/dataset" method="POST">
    @csrf
    <input type="name" name="name" placeholder="Product_name" require>
    <input type="number" name="price" placeholder="Product_Price" require>
    <input type="textarea" name="des" placeholder="Product_des" require>
    <button type="submit">Submit</button>
</form>