<?php
    if ($_POST['butt-order']) {
        $name = trim($_POST['name']);
        $num = trim($_POST['num']);
        $location = trim($_POST['location']);
        $number = (int) $num;
        /*
        if(empty($name)){
            echo "Введите имя!";
        }

        if(empty($num)){
            echo 'Введите номер! ';
        }
        if(empty($name) and empty($num) and empty($location)){
            echo "Заполните поля";
        }
        */
        if(is_int($number) or strpos($number, '+')){
            if($number >= 10){
                if(preg_match("/^[а-я А-Я]+$/u",$name) ){ 
                    if(strlen($location) > 3){
                        if($name and $location and $number) {
                            echo <<<HTML
                            <i class='bx bx-check' ></i>Мы с вами скоро свяжемся
HTML;
                        }
                    }else{
                        echo <<<HTML
                         <i class='bx bx-error' ></i>Напишите локацию более подробно
HTML;
                    }
                }else{
                    echo <<<HTML
                     <i class='bx bx-error' ></i>Введите ваше ФИО должно быть русскими буквами
HTML;
                }
            }else{
                echo <<<HTML
                <i class='bx bx-error' ></i>Ваш номер должен составлять не менее из 11 символов
HTML;
            }  
        }else{
            echo <<<HTML
            <i class='bx bx-error' ></i>Введите номер должен быть в числовом формате
HTML;
        }
    }else{
        echo <<<HTML

		<style>
			.allert2 {
				display: none;
			}
		</style>

HTML;
    }
    
    
?>