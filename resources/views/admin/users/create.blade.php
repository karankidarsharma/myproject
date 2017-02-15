<header>Create Form To insert values in to database</header>
</br>
<style >
	header{
      width: 100%;
      height: auto;
      color: white;
      background-color: black;
      padding: 2px red;
      text-align: center;

	}
.t1{

	 width: 300px;
	 height: 23px;
	 border: 2px solid red;

}

</style>

<form action="/users" method="POST">
    {!! csrf_field()!!}

	<marquee SCROLLAMOUNT=50 ><input class="t1" type="text" name="name"></marquee>
    <marquee SCROLLAMOUNT=50 ><input class="t1" type="email" name="email"></marquee>
  <marquee SCROLLAMOUNT=50 DIRECTION=RIGHT ><input  class="t1" type="password" name="password"></marquee>
    <input type="submit" value="create">
</form>
