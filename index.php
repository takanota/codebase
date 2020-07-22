<?php

?>
<html>
<head>
  <title>hello</title>
  <script type="text/javascript">
    window.beforeunload = function (e) {
      e.returnValue = "are you sure?";
    };
  </script>
</head>
<body>
  <h1>Hello</h1>
</body>
</html>
