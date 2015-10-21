<html>
<head>
  <form action="/populate" method="post">
          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <input type="text" name="name" placeholder="name">
        <input type="text" name="shortline" placeholder="shortline">
            <input type="text" name="bigline" placeholder="bigline">
                <input type="text" name="url" placeholder="url">
                    <input type="text" name="spec1" placeholder="spec1">
                        <input type="text" name="spec2" placeholder="spec2">
                        <input type="submit">

  </form>
</head>
</html>
