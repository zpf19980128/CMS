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

?>
<div class="doorGets-rubrique-center">
    <div class="doorGets-rubrique-center-title page-header">

    </div>
    <div class="doorGets-rubrique-center-content">
        <legend>
            [{!$htmlAddTop!}]
            : [{!$this->doorGets->__('Ajouter une page')!}] 
        </legend>
        
        [{!$formAddTop!}]
        [{!$this->doorGets->Form->textarea($this->doorGets->__('Contenu de la page').' <span class="cp-obli">*</span>','article_tinymce','','tinymce ckeditor')!}]
        <div class="row">
            <div class="col-md-12">
                <div class="live-preview-content live-preview"></div>
            </div>
        </div> 
        <div class="separateur-tb"></div>
        [{!$formAddBottom!}]
        
    </div>
</div>