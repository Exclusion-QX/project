<?php
require ("header.html");
require ("footer.html");
?>

<script>
					$(document).ready (function() {
						$("#done").click (function {
							var name = $username;
							var email = $email; 
							var password = $password; 
					     	var repassword = $repassword; 
							var login = $login;
							var message = "";
							if (password == repassword) {
								var result = mysqli_query($link, $query);
								if (result) {
									message = "Регистрация прошла успешно";
								} else {
									message = "Такой логин уже существует";
								}
							} else {
								message = "Пароли не совпадают!";
							} 
						})
					})
					
						}
					}
				</script>

				
Fatal error: Uncaught Error: Call to undefined function password_check() in C:\OSPanel\OSPanel\domains\project.loc\registration.php:35 Stack trace: #0 {main} thrown in C:\OSPanel\OSPanel\domains\project.loc\registration.php on line 35