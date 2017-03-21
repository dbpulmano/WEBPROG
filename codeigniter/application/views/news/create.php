<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('news/create'); ?>    
    <table>
        <tr>
            <td><label for="title">Title</label></td>
            <td><input type="input" name="title" size="10" /></td>
        </tr>
        <tr>
            <td><label for="text">Text</label></td>
            <td><textarea name="text" rows="10" cols="40" size="10"></textarea></td>
        </tr>
		<tr>
            <td><label for="text">Full Name</label></td>
            <td><input type="input" name="title" size="35" /></td>
        </tr>
		<tr>
            <td><label for="text">Nickname</label></td>
            <td><input type="input" name="title" size="8" /></td>
        </tr>
		<tr>
            <td><label for="text">Email </label></td>
            <td><input type="input" name="title" size="20" /></td>
        </tr>
		<tr>
            <td><label for="text">Home Address</label></td>
            <td><input type="input" name="title" size="50" /></td>
        </tr>
		<tr>
            <td><label for="text">Gender</label></td>
            <td><input type="input" name="title" size="1" /></td>
        </tr>
		<tr>
            <td><label for="text">Cell Number</label></td>
            <td><input type="input" name="title" size="11" /></td>
        </tr>
		<tr>
            <td><label for="text">Comments</label></td>
            <td><input type="input" name="title" size="100" /></td>
        </tr>
		
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Create news item" /></td>
        </tr>
    </table>    
</form>