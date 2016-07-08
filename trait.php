
<?php

trait OwnerTrait {
	public function owner()
	{
		// ...
	}
}

class Thread {

	use OwnerTrait;

}

class Comment {

	use OwnerTrait;

}
