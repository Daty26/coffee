<?php
    if ($_POST['butt']) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $num = trim($_POST['num']);
        $text = trim($_POST['text']);
        $number = (int) $num;
        /*
        if(empty($name)){
            echo "Введите имя!";
        }
        if(empty($email)){
        echo 'Введите email!';
        }

        if(empty($num)){
            echo 'Введите номер! ';
        }
        if(empty($name) and empty($num) and empty($email)){
            echo "Заполните поля";
        }
        */
        echo <<<HTML

		<style>
			.allert {
				display: block;
			}
		</style>

HTML;
        if(is_int($number) or strpos($number, '+')){
            if($number >= 10){
                if(preg_match("/^[а-я А-Я]+$/u",$name) ){
                    if(strpos($email, '@') and strlen($email) >= 9){ 
                        if($name and $email and $number) {
                            echo <<<HTML
                            <i class='bx bx-check' ></i>Мы с вами скоро свяжемся
HTML;
                        }
                    }else{
                        echo <<<HTML
                        <i class='bx bx-error' ></i>Вы ввели не корректный email
HTML;
                    }
                }else{
                    echo <<<HTML
                    <i class='bx bx-error' ></i>Введите ваше ФИО должно быть русскими буквами
HTML;
                }
            }else{
                echo <<<HTML
                    <i class='bx bx-error' ></i>Ваш номер должен составлять не менее 11 символов
HTML;
            }  
        }else{
            echo <<<HTML
                    <i class='bx bx-error' ></i>Введите номер в числовом формате
HTML;
        }
    }else{
        // сделать так чтобы поле предупреждение не показывалось
        echo <<<HTML

		<style>
			.allert {
				display: none;
			}
		</style>

HTML;
    }
?>