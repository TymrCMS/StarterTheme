<?php

namespace Tymr\Themes\Starter;

use Tymr\Models\Theme;

class StarterTheme extends Theme
{

    public $info = [
        'name'          => 'Starter',
        'description'   => 'Starter Theme',
        'version'       => '1.0',
        'slug'          => 'starter',
        'admin_theme'   => false,
        'public_theme'  => true,        
        'author'        => 'Sam McDonald',
        'contact'       => ['s.mcdonald@outlook.com.au'],        
    ];

	public function info() : array
	{
		return $this->info;
	}


	public function help() : string
	{
		return "No help documentation supplied.";
	}

    public function install()
    {
        return true;
    }
    
    public function uninstall()
    {
        return true;
    }	

    /** 
     * @return the path to the image/screenshot. Usually this will be the themepath/img/screenshot-0.png
     */
    public function preview()
    {
        return '/system/img/screenshot-0.png';
    }	    
}


