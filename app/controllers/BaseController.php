<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}



    public function showLogin()
    {
        // show the form
        return View::make('login');
    }

    public function doLogin()
    {
// process the form
    }

}
