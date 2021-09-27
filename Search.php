<?php
require_once 'vendor/autoload.php';

use App\Register;

$register = new Register('storage/data.csv');

$personFound = NULL;

if (isset($_GET['search'])) {
    $personFound = $register->search($_GET['personalId']);
}

if (isset($_POST['delete'])) {
    $register->delete($personFound);
    header('Location: index.php');
}

?>


<?php if ($personFound === NULL): ?>
    <p>Person was not found</p>
<?php else: ?>
    Name: <?php echo $personFound->getName() ?> <br>
    Surname: <?php echo $personFound->getSurname() ?> <br>
    Person ID number: <?php echo $personFound->getPersonalNumber() ?> <br>
    Description: <?php echo $personFound->getDescription() ?> <br>


    <form method="post" action="/">
        <button type="submit" name="delete">Delete</button>
    </form>
<?php endif; ?>