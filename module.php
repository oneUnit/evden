<?php
header( 'Content-Type: text/html; charset=utf-8' );

class mysql {
	###
	#	Подключение к бд
	function connect($db_host, $db_login, $db_passwd, $db_name) {
		mysql_connect($db_host, $db_login, $db_passwd) or die ("MySQL Error: " . mysql_error()); // устанавливаем подключение с бд
		mysql_query("set names utf8") or die ("<br>Invalid query: " . mysql_error()); // указываем что передаем данные в utf8
		mysql_select_db($db_name) or die ("<br>Invalid query: " . mysql_error()); // выбираем базу данных
	}

	###
	#	Запрос к базе и его производные
	function query($query, $type, $num) {
		if ($q=mysql_query($query)) {
			switch ($type) {
				case 'num_row' : return mysql_num_rows($q); break;
				case 'result' : return mysql_result($q, $num); break;
				case 'accos' : return mysql_fetch_assoc($q); break;
				case 'none' : return $q;
				default: return $q;
			}
		} else {
			print 'Mysql error: '.mysql_error();
			return false;
		}
		// при переносе в паблик убрать print 'Mysql error: '.mysql_error();
		// эта строчка стоит только для отладки и используя ее в паблике можно засветить запросы
	}

	###
	#	фильтрование данных 
	function filter($data) {
		$data = trim($data); // удаление пробелов из начала и конца строки
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
		return mysql_real_escape_string($data); // экранирование символов
	}
}

class validate{
    
    function check_email($email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        else{
            return false;
        }
    }
    
       function check_mobile($mobile){
          if ( preg_match( '/^[+]?([\d]{0,3})?[\(\.\-\s]?([\d]{3})[\)\.\-\s]*([\d]{3})[\.\-\s]?([\d]{4})$/', $mobile ) ) {
            return true;
          } 
          else {
            return false;
          }
    }
}


class reg_temp{
    var $db;            //Локальная ссылка на базу данных
    var $validate;      //Проверка данных
    
    # Регистрируем нового пользователя 
    function register_temp($email){
            $this->db = new mysql();
            $this->validate = new validate();
            $email_temp = $this->db->filter($email);
            if($this->validate->check_email($email) == false){
                return 'Zəhmət olmasa düzgün e-mail ünvanınıvızı yazın';       //неправильный email адрес
            }
            else if($this->db->query("SELECT TOP 1 * FROM reg_temp WHERE _email='".$email."';", 'num_row', '')!=0){
                return 'E-mail ünvanı artıq qeydiyyata alınmışdır';            //e-mail уже зарегистрирован 
             }
            $query = "INSERT INTO `reg_temp` (`_email`, `_name`, `_surname`) VALUES ( '".$email_temp."', NULL, NULL);";
            $this->db->query($query, "", "");
        return 42;
    }
}

?>