<!-- <nav>
<a href="/">Add Brand</a><br>
<a href="/addtype">Add Vehicle Type</a><br>
<a href="/addmodel">Add Vehicle Model</a><br>
<a href="/viewbrands">View Brands</a><br>
<a href="/viewtypes">View Vehicle Types</a><br>
<a href="/viewmodels">View Vehicle Model</a><br>
</nav>
 -->
<style>
    nav{
        background:white;
    }
    nav.primary-navigation {
	 margin: 0 auto;
	 display: block;
	 padding: 10px 0 0 0;
	 text-align: center;
	 font-size: 16px;
}
 nav.primary-navigation ul li {
	 list-style: none;
	 margin: 0 auto;
	 border-left: 2px solid #3ca0e7;
	 display: inline-block;
	 padding: 0 30px;
	 position: relative;
	 text-decoration: none;
	 text-align: center;
	 font-family: arvo;
}
 nav.primary-navigation li a {
	 color: black;
}
 nav.primary-navigation li a:hover {
	 color: #3ca0e7;
}
 nav.primary-navigation li:hover {
	 cursor: pointer;
}
 nav.primary-navigation ul li ul {
	 visibility: hidden;
	 opacity: 0;
	 position: absolute;
	 padding-left: 0;
	 left: 0;
	 display: none;
	 background: white;
}
 nav.primary-navigation ul li:hover > ul, nav.primary-navigation ul li ul:hover {
	 visibility: visible;
	 opacity: 1;
	 display: block;
	 min-width: 250px;
	 text-align: left;
	 padding-top: 20px;
	 box-shadow: 0px 3px 5px -1px #ccc;
}
 nav.primary-navigation ul li ul li {
	 clear: both;
	 width: 100%;
	 text-align: left;
	 margin-bottom: 20px;
	 border-style: none;
}
 nav.primary-navigation ul li ul li a:hover {
	 padding-left: 10px;
	 border-left: 2px solid #3ca0e7;
	 transition: all 0.3s ease;
}
 a {
	 text-decoration: none;
}
 a:hover {
	 color: #3ca0e7;
}
 ul li ul li a {
	 transition: all 0.5s ease;
}
 
    </style>


<link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">

<nav role="navigation" class="primary-navigation">
  <ul>
    <li><a href="/">Add Vehicle Brand&dtrif;</a>
      <ul class="dropdown">
      <a href="/viewbrands">View Brands</a></li>
      </ul>
    <li><a href="/addtype">Add Vehicle Type&dtrif;</a>
      <ul class="dropdown">
      <a href="/viewtypes">View Vehicle Types</a></li>
      </ul>
    <li><a href="/addmodel">Add Vehicle Model&dtrif;</a>
      <ul class="dropdown">
      <a href="/viewmodels">View Vehicle Model</a><br>
    </li>
  </ul>
</nav>


@yield('content')