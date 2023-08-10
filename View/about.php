<?php
// get product details
require './Model/Products.php';
$productTable = new Products();
$titles = $productTable->getProductTitles(); 
?>
<div class="content">

	<div class="search left">
		<?php echo $view->searchForm($titles); ?>
	</div>

	<div class="intro left">
	  <h3>About Us</h3><br/>
	  <p>Welcome to SweetsComplete, your one-stop shop for everything delicious and sweet! At SweetsComplete, we really enjoy fulfilling your needs for mouthwatering delicacies that delight your taste senses.
		  We work hard to provide our customers joyous memories by specialising in the creation of delectable sweets.
	  </p>
	</div>
	<br class="clear"/>
	
	<div class="product-list">
	<table>
 	  <tr>
		<td width="50%">
		Our Journey:

		Founded in [1994 A.D], SweetsComplete has embarked on a delicious journey of spreading happiness and sweetness across the world.
		What started as a small, family-owned bakery has now blossomed into a renowned confectionery company, beloved by people of all ages. 
		Our commitment to quality, creativity, and customer satisfaction has been the driving force behind our growth. At SweetsComplete, we believe that every dessert should be an experience in itself.
		We put our hearts into every creation, carefully selecting the finest ingredients and infusing our recipes with love and passion.
		From melt-in-your-mouth cookies to decadent cakes, from luscious chocolates to whimsical candies, each product is a masterpiece crafted with attention to detail.
		Our team of talented and skilled pastry chefs, chocolatiers, and candy artisans work tirelessly to deliver a diverse range of sweets that cater to various tastes and preferences. Whether you're looking for traditional classics or trendy, innovative confections, SweetsComplete has something special to offer.
		</td>
		<td width="50%">
		<img src="images/185_2577502.scale_20.JPG" width="360" height="240" />
		</td>
	  </tr>
	  <tr>
		<td width="50%">
		<img src="images/735_3633807.scale_20.JPG" width="360" height="240" />
		</td>
		<td width="50%">
		At SweetsComplete, our customers are at the heart of everything we do. We are committed to offering a delightful shopping experience, with user-friendly online platforms and attentive customer service.
		Your satisfaction is our priority, and we are always open to feedback to improve our products and services continually. Beyond creating delightful sweets, SweetsComplete is committed to being a responsible and conscientious member of the community.
		We actively participate in charitable initiatives, supporting causes that make a positive impact on society. Additionally, we strive to reduce our environmental footprint by embracing sustainable practices in our production and packaging processes.
		<br />
		Join Us in Sweetening Moments:

		Whether you're celebrating life's special occasions, indulging in self-care, or simply craving something sweet, SweetsComplete invites you to join us on our sweet journey.
 		Discover a world of flavors, textures, and sensations that will leave you craving for more. We are dedicated to providing you with an unforgettable experience that will create cherished memories for you and your loved ones.

		Thank you for choosing SweetsComplete. Together, let's sweeten every moment!

		</td>
	  </tr>
	</table>
	</div><!-- product-list -->

<br class="clear-all"/>
</div><!-- content -->
