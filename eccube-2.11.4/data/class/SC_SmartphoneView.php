<?php
/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) 2000-2011 LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

class SC_SmartphoneView extends SC_SiteView_Ex {
    function SC_SmartphoneView($setPrevURL = true) {
        parent::SC_SiteView($setPrevURL);
        $this->_smarty->template_dir = SMARTPHONE_TEMPLATE_REALDIR;
        $this->_smarty->compile_dir = SMARTPHONE_COMPILE_REALDIR;
        $this->assignTemplatePath(DEVICE_TYPE_SMARTPHONE);
    }
}

?>
