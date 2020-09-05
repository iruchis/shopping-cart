<div id="product-grid">
	<div class="txt-heading">Choose your products</div>

	<div class="product-item">
		<div class="product-image">
			<img src="data/cake1.jfif" id="<?php echo "3DcAM01";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Red Roses with Cake";?></strong>
		</div>
		<div class="product-price"><?php echo "1500.00";?></div>

		<input type="button" id="add_<?php echo "3DcAM01";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "3DcAM01";?>','<?php echo "Red Roses with Cake";?>','<?php echo "1500.00";?>')" />

	</div>

	<div class="product-item">
		<div class="product-image">
			<img src="data/cake2.jfif" id="<?php echo "wristWear03";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Pink Roses with Cake";?></strong>
		</div>
		<div class="product-price"><?php echo "3000.00";?></div>

		<input type="button" id="add_<?php echo "wristWear03";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "wristWear03";?>','<?php echo "Pink Roses with Cake";?>','<?php echo "3000.00";?>')" />
	</div>

	<div class="product-item">
		<div class="product-image">
			<img src="data/cake3.jfif" id="<?php echo "LPN45";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Delightful Divine";?></strong>
		</div>
		<div class="product-price"><?php echo "800.00";?></div>

		<input type="button" id="add_<?php echo "LPN45";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "LPN45";?>','<?php echo "Delightful Divine";?>','<?php echo "800.00";?>')" />
	</div>
</div>