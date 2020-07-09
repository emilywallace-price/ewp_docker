<style>
	li, p {
		font-size: 18px;
	}
</style>
<?php
	include "CheeseLovers.php";
	include "interfaces.php";
	// interface file needs to be included before the classes that it implements
	include "Name.php";
	include "Mum.php";
    include "Dad.php";
    include "Daughter.php";
    include "Son.php";
    include "Grandson.php";
    include "Lewis.php";
    include "DailyRoutine.php";
    include "Exception.php";
    include "NamePrinter.php";

    $wallaceMembers = array(
		$mumWallace = new Mum('Wallace', 'Jane', 'female', 61),
		$daughter = new Daughter('Wallace', 'Emmie', 'female', 36, 'Mum'),
		$son = new Son('Wallace', 'Seb', 'male', 31, 'Senior Web Dev'),
    	$grandson = new Grandson( 'Wallace', 'Lewis', 'male', 5, '', 'and makes us all happy!')
	);

    $lennardsMembers = array(
	    $mum = new Mum('Lennards', 'Jo', 'female', 58),
	    $dad = new Dad('Lennards', 'Mark', 'male', 60)
	);
?>

<h1>Our Cheese Loving Families</h1>
<ol>
	<?php echo getAllFamilyNames( $families); ?>
</ol>
<h1>The <?php echo $familyWallace->surname . ' Family who ' . $familyWallace->cheese; ?></h1>

<ul>
    <li style="color: darkgreen;">
        <?php echo $mumWallace->firstName . ' ' . $mumWallace->surname . ' is ' . $mumWallace->age . ' years old and ' . ($mumWallace->gender == 'female' ? 'her':'his') . ' height is ' . $mumWallace->height; ?>
    </li>
    <li style="color: purple;">
        <?php echo $daughter->firstName . ' ' . $daughter->surname .  ' is ' . $daughter->age . ' years old and ' . ($daughter->gender == 'female' ? 'her':'his') . ' height is ' . $daughter->height . ' and is ' . $grandson->first_name. "' " . $daughter->parent; ?>
    </li>
    <li style="color: darkred;">
        <?php echo $son->firstName . ' ' . $son->surname .  ' is ' . $son->age . ' years old and ' . ($son->gender == 'female' ? 'her':'his') . ' height is ' . $son->height . ' and works as a ' . $son->job; ?>
    </li>
    <li style="color: blue;">
		<?php echo $grandson->firstName . ' ' . $grandson->surname .  ' is ' . $grandson->age . ' years old and ' . ($grandson->gender == 'female' ? 'her':'his') . ' height ' . $grandson->height . ' and makes us all ' . $grandson->smile; ?>
	</li>
</ul>
<h1>The <?php echo $familyLennards->surname; ?> Family</h1>

<ul>
	<?php
        foreach ($lennardsMembers as $lennardsMember) {
         echo '<li>' . $lennardsMember->firstName . ' ' . $lennardsMember->surname . ' is ' . $lennardsMember->age . ' years old and their height is  '. $lennardsMember->height . '</li>';
        }
	?>
</ul>

<h1>Lewis' Day!!</h1>

<ol>
	<li><?php echo Lewis::eat(); ?></li>
	<li><?php echo Lewis::play(); ?></li>
	<li><?php echo Lewis::sleep(); ?></li>
</ol>

<h1>!! Exemption alert to Chocolate and Chilli !!</h1>

<h3 style="color: navy;"><?php feedLewis('bananas'); ?> </h3>

<h1>Using classes and Interfaces</h1>

<p><?php echo ($testFullName->printFullName( $janeWallace)) ?></p>