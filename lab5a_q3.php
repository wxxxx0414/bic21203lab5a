<!DOCTYPE html>
<html lang="en">
<head><title>Lab 5a Q3</title></head>
<body>
    <?php 
        function areaOfRectangle ($width, $height): int
        {
            return $width * $height;
        }

        $width = 4;
        $height = 2;
        $area = areaOfRectangle(width: $width,height: $height);
        echo "<strong>The area of a rectangle with a width of $width and $height is $area</strong>";
    ?> 
</body>
</html>