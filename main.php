<!DOCTYPE html>
<html lang= "en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>DiSNelEnd</title>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Merriweather&family=Playfair+Display+SC&display=swap" rel="stylesheet">
</head>
<body>

    <div class= "flex-container">

        <div class= "header">
            <?php include 'logo.inc.php'; ?>
            <?php include 'menu.inc.php'; ?>
        </div>

        <div class="about_me">
            
            <h1> <?php echo $p ?> </h1>

            <div class="data">
                <div class="card">
                    <div class="myPhoto">
                        <?php echo '<img src="img/photo.png">'; ?>
                     </div>

                     <div class="myInfo">
                        <p>Личность: <?php echo $name, ' ', $lastName ?></p>
                        <p>Ник: <?php echo $nicname ?></p>
                        <p>Планета: <?php echo $planet ?></p>
                        <p>Место обитания: <?php echo $city ?></p>
                        <p>Возраст: <?php echo $age ?> года </p>
                        <p>Класс: <?php echo $class ?></p>
                        <p>Профессия: <?php echo $profession ?></p>
                    </div>

                    <div class="article">
                        <p class="text">
                            Порождение хаоса. Дитя эгоизма. 
                            Вначале обратился к великому <?php echo "<font color='grean'>Python</font>" ?>. 
                            В последствии, начал изучать магию <?php echo "<font color='blue'>C#</font>" ?>. 
                            Попутно тренируя запретные техники <?php echo "<font color='white'>Unity</font>" ?>. 
                            Теперь же, к его способностям добавился <?php echo "<font color='pink'>PHP</font>" ?>. 
                            Он все ближе приближается к пониманию всех запретных техник <?php echo "<font color='red'>IT</font>" ?>.
                        </p>
                    </div>
                    
                </div>

                <h2>Демонстрация магии PHP!</h2>

                <div class="knowledge">

                    <?php include 'knowledge.inc.php'; ?>

                    <p>Дамы и господа, сейчас на ваших глазах, я 
                        буду доставать переменные прямо из подключенного php файла!</p>
                    <p>Вот допустим integer <?php echo $integer ?>, или может быть вы хотите double <?php echo $double ?>?</p>
                    <p>Сложим их вместе. Эхо!: <?php echo '$sum' ?>! 
                        Или, при соблюдении определенных условий. <?php echo '$masage' ?>! 
                        Найдем остаток от деления. Эхо!: <?php echo $modulo ?>! <?php echo "Математично не правда ли :)?"?></p>
                    <p>Так, назовите мне любое число из головы. Не слышу? Десять?! Эхо!: <?php echo $x ?> - магия умножения!</p>
                    <p>А сейчас, я на ваших глазах, прямо в этом файле, изменю integer не изменяя его. <?php ++$ref; ?> Эхо!: <?php echo $integer ?>. Невероятно! </p>
                    <p>Обратимся в прямом смысле к волшебству. Волшебные константы! Вы заинтригованы? Номер строки Эхо!: <?php echo __LINE__ ?></p>
                    <p>А что насчёт строк? Достанем одну из файла? А вот и я <?php echo $line ?>! Великолепно! Не правда ли?. 
                        Постойте! А что это у нас в ней? Эхо!: <?php echo "$line ${$line}" ?> Просто чудесно!</p>
                    <p>Если, вы еще не устали? Давайте попробуем прировнять правду и ложь! И узнать их природу! 
                        Дамп!: <?php var_dump($true_bool == $false_bool)?>. Невероятно! Булевые переменные! Вы это видели? 
                        А если так? Дамп!: <?php var_dump($true_bool === $false_bool) ?>. Не выходит уровнять их :(!</p>
                    <p>Но вы то знаете, что магистры php просто так не сдаются. 
                        Я прировняю их так! Эхо!: <?php echo ($true_bool)? 'True': 'False',' = ',($false_bool)? 'True': 'False' ?>!
                        Тернарнная сила! Просто чудесно!</p>

                    <div class="code">
                        <p>А сейчас дорогие гости! Я покажу вам фокус. Прямо в этом файле я напишу php код. 
                            И при помощи манипуляций со строками, мы узнаем, как соединить Apple и Pen!</p>
                        <p>
                            <?php
                            $welcome= 'PPAP! ';
                            $apple = 'Apple';
                            $pen = 'Pen';
                            echo $welcome;
                        
                            echo "I have a $pen!";
                            echo " I have an ",$apple,'!';
                            $applePen = $apple . strtolower($pen);
                            echo " Ohh, ",$applePen,'!';

                            echo " I have a $pen! ";
                            $pineApple= substr($pen,0,1) ."i". substr($pen,2,2) . substr($pen,1,1) . strtolower($apple);
                            echo "I have a $pineApple! ";
                            $pineApplePen= $pineApple . strtolower($pen);
                            echo "Ohh, $pineApplePen! ";

                            echo $applePen,'!!! ';
                            echo $pineApplePen,'!!! ';
                            $result = $pen . $pineApple . $apple . $pen ;
                            echo substr($result,0,3).'-'.substr($result,3,9).'-'.substr($result,12,5).'-'.substr($result,17,3).'!';
                            ?> <br>

                            <?php echo 'Просто чудесно! Великолепно! Программотично!'; ?>
                        </p>  

                    </div>                 
                 </div>                             
            </div>
        </div>

        <?php include 'footer.inc.php'; ?>

    </div>
</body>
</html>