<?php if (!defined(DOORGETS)) { header('Location:../'); exit(); }

/*******************************************************************************
/*******************************************************************************
    doorGets 7.0 - 01, February 2016
    doorGets it's free PHP Open Source CMS PHP & MySQL
    Copyright (C) 2012 - 2015 By Mounir R'Quiba -> Crazy PHP Lover
    
/*******************************************************************************

    Website : http://www.doorgets.com
    Contact : http://www.doorgets.com/t/en/?contact
    
/*******************************************************************************
    -= One life, One code =-
/*******************************************************************************
    
    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
    
******************************************************************************
******************************************************************************/


 /*
  * Variables :
  * 
        $networks[$url_network] = >$url_image
        
 */
 

?>
<!-- doorGets:start:widgets/networks -->
[{?(!empty($networks)):}]
    <ul class="list-inline">
        [{/($networks as $url_network => $url_image):}]
            <li><a href="[{!$url_network!}]" title="[{!$url_network!}]" target="blank"><img src="[{!$url_image!}]" alt="[{!$url_network!}]" /></a></li>
        [/]
    </ul>
[?]
<!-- doorGets:end:widgets/networks -->