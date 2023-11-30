<?
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$accounts = json_decode(file_get_contents('./assets/datas/accounts.json'));
$page = 'login';
$user = [];

foreach ($accounts as $account) {
  if ($email === $account->email && $password === $account->password) {
    $page = 'main';
    $user = $account;
  }
}

$currentAccount = array_search(0, $accounts);

print_r($currentAccount);

switch ($page) {
  case 'signup':
    require_once './assets/interface/signup.php';
    break;
  case 'main':
    require_once './assets/interface/main.php';
    break;
  default:
    require_once './assets/interface/login.php';
    break;
}
?>
