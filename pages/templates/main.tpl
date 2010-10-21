<!DOCTYPE html>

<html>
<head>
  <title>{{ title }} DIKULAN</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  {{ insert: stylesheets }}
  
  {{ insert: javascript }}
</head>
<body>

    <header id="outer">
      <header id="inner">
        <img src="/images/logo_lowres.png">
        <h1>DIKULAN: The Challenge</h1>
        <button>Billetinformation</button>
      </header>
    </header>

    <div id="container">
      <nav>
        {{ insert: navigation }}
      </nav>
  
      <div id="page">
        <div id="main-content">
          {{ content }}
        </div>

        <div id="sidebar">
          {{ insert: sidebar }}
        </div>
      </div>

      <footer>
        {{ insert: footer }}
      </footer>
    </div>

</body>
</html>
