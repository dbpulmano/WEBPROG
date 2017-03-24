<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('news/edit/'.$news_item['id']); ?>
    <table>
		<tr>
            <td><label for="fullName">Full Name</label></td>
            <td><input type="text" name="fullName" size="35" value="<?php echo $news_item['fullName'] ?>" /></td>
        </tr>
		 <tr>
            <td><label for="nickname">Nickname</label></td>
            <td><input type="text" name="nickname" size="8" value="<?php echo $news_item['nickname'] ?>" /></td>
        </tr>
		 <tr>
            <td><label for="email">Email</label></td>
            <td><input type="email" name="email" size="20" value="<?php echo $news_item['email'] ?>" /></td>
        </tr>
		 <tr>
            <td><label for="homeAddress">Home Address</label></td>
            <td><input type="text" name="homeAddress" size="50" value="<?php echo $news_item['homeAddress'] ?>" /></td>
        </tr>
		<tr>
            <td><label for="gender">Gender</label></td>
            <td><input type="radio" name="gender" value="Female" required
				<?php if (isset($news_item['gender']) && $news_item['gender']=="Female") echo 'checked';?>>Female
				<input type="radio" name="gender" value="Male" required 
				<?php if (isset($news_item['gender']) && $news_item['gender']=="Male") echo 'checked';?>>Male
			</td>
        </tr>
		 <tr>
            <td><label for="cellNumber">Cellphone Number</label></td>
            <td><input type="tel" name="cellNumber" size="11" value="<?php echo $news_item['cellNumber'] ?>" /></td>
        </tr>
		 <tr>
            <td><label for="comments">Comments</label></td>
            <td><textarea name="comments" rows="10" cols="40" size="100"><?php echo $news_item['comments'] ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit user profile" /></td>
        </tr>
    </table>
</form>