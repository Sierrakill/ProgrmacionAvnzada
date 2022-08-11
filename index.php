<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<canvas id="canvas" width="500" height="500">
  Tu navegador no admite el elemento canvas
</canvas>
    
<script type="text/javascript">

    var cv = document.getElementById('canvas');
    var ctx= cv.getContext('2d')
    ctx.fillStyle="red"
    ctx.fillRect(10,10,55,50);

    ctx.fillStyle="green"
    ctx.fillRect(40,40,55,50);

    ctx.fillStyle="black"
    ctx.fillRect(70,70,55,50);


    


    

</script>
</body>
</html>