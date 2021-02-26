<!DOCTYPE html>
<html lang="en">
<head>
<link rel = "stylesheet" type = "text/css" href = "styles/default.css" />
<title>Mark Husmillo's WEB250-N890 Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<header>
  <h1>Header</h1>
</header>

<section>
  <nav>
    <ul>
      <li><a href="http://students.cpcc.edu/~mhusmil0/web250/introduction.html">Introduction</a></li>
      <li><a href="http://students.cpcc.edu/~mhusmil0/web250/contract.html">Contract</a></li>
      <li><a href="http://students.cpcc.edu/~mhusmil0/web250/brand.html">Brand</a></li>
    </ul>
  </nav>
  
  <article>
    <h1>Title</h1>
    <p>
        <?php
        $target = mktime(0,0,0,9,3,2021);
        $today = time ();
        $difference = ($target - $today);
        $days = (int)($difference/86400);
        print "Our event will occur in $days days";?></p>
    <p>body</p>
  </article>
</section>

<footer>
  <p>Copyright: &copy; 2021 Aris Digital Agency.  All rights reserved.</p>
  <br/>
        <a href="http://validator.w3.org/check?uri=referer" class="myButton">HTML
        </a>
        <a href="http://jigsaw.w3.org/css-validator/check/referer" class="myButton">CSS
        </a>
</footer>

</body>
</html>

