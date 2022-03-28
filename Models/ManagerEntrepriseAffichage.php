$a = new ManagerLogin();
$a=$a->getLog();

foreach ($a as $aa)
{   echo $aa->password;
echo $aa->login;
echo $aa->id_user;
echo $aa->permission;
}
