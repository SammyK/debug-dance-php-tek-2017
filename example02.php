<?php

function randomColor(): string {
    return '#' . bin2hex(random_bytes(3));
}

function makeColorfulHeading(): string {
    $color = randomColor();
    return sprintf(
            '<h1 style="color: %1$s">This is %1$s</h1>',
            $color
    );
}
?>
<html>
<body>
<?php
for ($x=0; $x<5; $x++) {
    echo makeColorfulHeading() . PHP_EOL;
}
?>
</body>
</html>
