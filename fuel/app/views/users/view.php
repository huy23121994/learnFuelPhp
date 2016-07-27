<h2>Viewing <span class='muted'>#<?php echo $user->id; ?></span></h2>

<p>
	<strong>Username:</strong>
	<?php echo $user->username; ?></p>
<p>
	<strong>Password:</strong>
	<?php echo $user->password; ?></p>
<p>
	<strong>Sex:</strong>
	<?php echo $user->sex; ?></p>

<?php echo Html::anchor('users/edit/'.$user->id, 'Edit'); ?> |
<?php echo Html::anchor('users', 'Back'); ?>