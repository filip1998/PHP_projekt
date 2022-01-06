<?php 
	print '
	<h1>Contact</h1>
  <div id="contact">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d46278.92223795818!2d15.937053793457018!3d43.53502269609154!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1335177d6d16f06f%3A0xfed0811a6d909859!2sRogoznica!5e0!3m2!1shr!2shr!4v1610122596614!5m2!1shr!2shr" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    <form action="" id="contact_form" name="contact_form" method="POST">
      
      <label for="fname">Firstname</label>
      <input type="text" id="fname" name="firstname" placeholder="Firstname..">

      <label for="lname">Lastname</label>
      <input type="text" id="lname" name="lastname" placeholder="Lastname..">
      
      <label for="lname">E-mail</label>
      <input type="email" id="email" name="email" placeholder="E-mail..">

      <label for="country">Country *</label>
      <select name="country" id="country">
				<option value="">Country</option>';
				
				$query  = "SELECT * FROM countries";
				$result = @mysqli_query($MySQL, $query);
				while($row = @mysqli_fetch_array($result)) {
					print '<option value="' . $row['country_code'] . '">' . $row['country_name'] . '</option>';
				}
			print '
			</select>
      
      <fieldset class="rating">
          <legend>Rating for Rogoznica: *</legend>
          <input type="radio" id="star5" name="rating" value="5" required /><label for="star5" title="Rocks!">5 stars</label>
          <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
          <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
          <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
          <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
      </fieldset>
    
      <div><input type="submit" value="Send"></div>
    </form>
  </div>';
?>