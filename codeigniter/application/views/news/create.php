<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('news/create'); ?>    
    <table>
		<tr>
            <td><label for="fullName">Full Name</label></td>
            <td><input type="input" name="fullName" size="35" /></td>
        </tr>
		<tr>
            <td><label for="nickname">Nickname</label></td>
            <td><input type="input" name="nickname" size="8" /></td>
        </tr>
		<tr>
            <td><label for="email">Email </label></td>
            <td><input type="input" name="email" size="20" /></td>
        </tr>
		<tr>
            <td><label for="homeAddress">Home Address</label></td>
            <td><input type="input" name="homeAddress" size="50" /></td>
        </tr>
		<tr>
            <td><label for="gender">Gender</label></td>
            <td><input type="radio" name="gender" value="Female" required>Female
				<input type="radio" name="gender" value="Male" required>Male 
			</td>
        </tr>
		<tr>
            <td><label for="cellNumber">Cell Number</label></td>
            <td><input type="input" name="cellNumber" size="11" /></td>
        </tr>
		<tr>
            <td><label for="comments">Comments</label></td>
            <td><input type="input" name="comments" size="100" /></td>
        </tr>
		
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Create new profile user" /></td>
        </tr>
    </table>    
</form>