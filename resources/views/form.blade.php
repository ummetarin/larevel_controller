<h1>The form is</h1>

<form action="/submit" method="POST">
@csrf
<input name="name" placeholder="Name" require type="name">
<input name="email" placeholder="Email" require type="email">
<input name="number" placeholder="Number" require type="number">
<button type="submit">Submit</button>
</form>