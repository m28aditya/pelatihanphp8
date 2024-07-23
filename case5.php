<?php
function createUser ($name, $email, $role) {
	return "User created with Name: $name, Email: $email, Role: $role";
}

echo createUser(name: "Fadli",role: "Admin",email: "fadliganteng@email.com");

?>
