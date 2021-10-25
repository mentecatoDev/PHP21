

https://www.discoduroderoer.es/pasar-un-array-en-un-formulario-php/ 



Hola a todos, hoy os voy a explicar como podemos pasar un array en un formulario en PHP.

En un formulario PHP, podemos tener varios valores que queramos  guardar en un array pero, ¿como podemos pasar un array en un formulario? Podemos usar implode y explode.

Vamos a crear un array con PHP:

```
<?php ``  ``$array` `= ``array``(1,2,3,4,5,6,7,8,9,10);``?>
```



<iframe id="pepsia_player_screen_0" allowfullscreen="" mozallowfullscreen="" webkitallowfullscreen="" allow="autoplay" style="margin: 0px; padding: 0px; width: 100% !important; height: 100% !important; overflow: hidden !important; position: absolute; inset: 0px;" frameborder="0"></iframe>



Vamos a poner en un input con los valores del array:

```
<!DOCTYPE html>``<html lang=``"en"``>``<head>``  ``<meta charset=``"UTF-8"``>``  ``<meta name=``"viewport"` `content=``"width=device-width, initial-scale=1.0"``>``  ``<meta http-equiv=``"X-UA-Compatible"` `content=``"ie=edge"``>``  ``<title>Pasar ``array``</title>``</head>``<body>``  ` `  ``<?php ``    ``$array` `= ``array``(1,2,3,4,5,6,7,8,9,10);``  ``?>` `  ``<form action=``"mostrar-array.php"` `method=``"POST"``>``    ` `    ``<input type=``"text"` `readonly name=``"values_array"` `value=``"<?php echo implode("``,``", $array); ?>"``>` `    ``<input type=``"submit"` `value=``"Pasar array"``>` `  ``</form>` `</body>``</html>
```

Fíjate que tengo un **input text** donde llamo a la función **implode**, esta función lo que hace es dado una cadena y un array, coge cada  elemento, lo separa por esa cadena y nos lo devuelve en esa cadena.



Aquí podéis ver el resultado:

![img](https://www.discoduroderoer.es/wp-content/uploads/2019/09/php_form_array_1.png)

En **mostrar-array.php,** tendríamos lo siguiente:

```
<?php` `  ``$array` `= ``$_POST``[``'values_array'``];` `  ``echo` `"Valor recogido: "` `. ``$array` `. ``"<br/>"``;` `  ``echo` `"Convertirlo en array: "``;``  ``print_r(``explode``(``","``, ``$array``));` `?>
```

Fíjate que aquí hacemos lo contrario, que es pasar la cadena a array usando explode.

Este es el resultado:

![img](https://www.discoduroderoer.es/wp-content/uploads/2019/09/php_form_array_2.png)

Os dejo [aquí](http://j.gs/DFT8) la descarga del ejemplo

Os dejo un vídeo donde trato el tema aunque meta sesiones de por medio: