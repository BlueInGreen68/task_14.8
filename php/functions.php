<?php

function getUsersList($usersList)
{
	var_dump($usersList);
}

function existUser($loginVal, $usersList)
{
	for ($i = 0; $i < count($usersList); $i += 1) {
		if ($loginVal === key($usersList)) {
			echo "Пользователь с логином $loginVal существует";
		}

		next($usersList);
	}
}

function checkPassword($login, $password, $usersList)
{
	if (null != $login || null !== $password) {

		foreach ($usersList as $loginVal => $passwordVal) {
			if ($login === $loginVal && $password === $passwordVal["password"]) {
				$result = "true";
				break;
			} else {
				$result = "false";
			}
		}

		echo "$result";
	}
}

function getCurrentUser($login)
{
	echo $login;
}
