class specialHeader extends HtmlElement{
  connectedcallback(){
    this.innerhtml=
<header id="header">
    <p style="display:flex; justify-content:space-around;">
       <a href="HOME.HTML" id="text">Home</a>
        <a href="INDEX.html" id="text">Dashboard</a>
        <a href="SIGNUP.html" id="text">Register</a>
        <a href="LOGIN.html" id="text">Log In</a>
        <a href="logout.php" id="text">Log Out</a>
    </p>
</header>
  }
}